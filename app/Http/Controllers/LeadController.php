<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function send(Request $request)
    {
        // Базовая валидация
        $data = $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'phone'   => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
            'photo'   => ['nullable', 'file', 'mimes:jpg,jpeg,png,webp,heic,heif', 'max:10240'],
        ]);

        $photo = $request->file('photo');

        // Дополнительные данные о заявке
        $lead = array_merge($data, [
            'page'       => $request->headers->get('referer') ?? $request->fullUrl(),
            'created_at' => now()->format('d.m.Y H:i'),
            'user_agent' => $request->userAgent(),
            'ip'         => $request->ip(),
            'photo_name' => $photo?->getClientOriginalName(),
        ]);

        // Куда отправляем заявку (на почту)
        $toEmail = config('mail.from.address', 'povisok888@gmail.com');

        Mail::send('emails.lead_request', ['lead' => $lead], function ($message) use ($toEmail, $photo) {
            $message
                ->to($toEmail)
                ->subject('Новая заявка с сайта ООО «НСКМакстар»');

            if ($photo?->isValid()) {
                $message->attach($photo->getRealPath(), [
                    'as' => $photo->getClientOriginalName(),
                    'mime' => $photo->getMimeType(),
                ]);
            }
        });

        // Уведомление в Telegram (если настроено)
        $botToken = config('services.telegram.bot_token', env('TELEGRAM_BOT_TOKEN'));
        $chatId   = config('services.telegram.chat_id', env('TELEGRAM_CHAT_ID'));

        if ($botToken && $chatId) {
            $text = "Новая заявка с сайта ООО «НСКМакстар»%0A"
                . "Имя: {$lead['name']}%0A"
                . "Телефон: {$lead['phone']}%0A"
                . "Описание: " . urlencode($lead['message']) . "%0A"
                . ($lead['photo_name'] ? "Фото: приложено к письму%0A" : '')
                . "Страница: " . urlencode($lead['page']) . "%0A"
                . "IP: {$lead['ip']}";

            try {
                Http::get("https://api.telegram.org/bot{$botToken}/sendMessage", [
                    'chat_id' => $chatId,
                    'text'    => $text,
                ]);
            } catch (\Throwable $e) {
                // Логируем, но не ломаем форму
                report($e);
            }
        }

        // Если запрос AJAX (fetch), отдаем JSON
        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'status'  => 'ok',
                'message' => 'Заявка отправлена',
            ]);
        }

        // Обычный POST — редирект назад с флеш-сообщением
        return back()->with('success', 'Заявка отправлена! Мы свяжемся с вами в ближайшее время.');
    }
}
