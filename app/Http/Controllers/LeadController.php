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

        // Почта отправителя и получателя задаётся отдельно в .env.
        $toEmail = config('mail.lead_to_address');
        $mailSent = false;

        if ($toEmail) {
            try {
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

                $mailSent = true;
            } catch (\Throwable $e) {
                report($e);
            }
        }

        // В Telegram уходит ровно одно текстовое сообщение на заявку.
        $botToken = config('services.telegram.bot_token');
        $chatId   = config('services.telegram.chat_id');
        $telegramSent = false;

        if ($botToken && $chatId) {
            $text = "Новая заявка с сайта ООО «НСКМакстар»\n"
                . "Имя: {$lead['name']}\n"
                . "Телефон: {$lead['phone']}\n"
                . "Описание: {$lead['message']}\n"
                . ($lead['photo_name'] ? "Фото: приложено к письму\n" : '')
                . "Страница: {$lead['page']}\n"
                . "IP: {$lead['ip']}";

            try {
                $response = Http::asForm()->timeout(10)->post("https://api.telegram.org/bot{$botToken}/sendMessage", [
                    'chat_id' => $chatId,
                    'text'    => $text,
                ]);

                $telegramSent = $response->successful();

                if (! $telegramSent) {
                    report(new \RuntimeException('Telegram notification was rejected by the API.'));
                }
            } catch (\Throwable $e) {
                report($e);
            }
        }

        if (! $mailSent && ! $telegramSent) {
            $message = 'Не удалось отправить заявку. Позвоните нам по телефону +7 (913) 895-45-25.';

            if ($request->expectsJson() || $request->ajax()) {
                return response()->json(['message' => $message], 503);
            }

            return back()->withInput()->withErrors(['form' => $message]);
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
