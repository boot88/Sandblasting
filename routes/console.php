<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('lead:test-delivery', function () {
    $recipients = array_values(array_filter((array) config('mail.lead_to_addresses', [])));
    $mailer = (string) config('mail.default');
    $mailOk = false;
    $maxOk = false;

    $this->line('Проверка отправки заявок (секреты не выводятся).');

    if ($recipients === [] || in_array($mailer, ['array', 'log'], true)) {
        $this->error('Email не настроен: укажите SMTP и LEAD_TO_EMAILS, MAIL_MAILER не должен быть log или array.');
    } else {
        try {
            Mail::raw('Тест уведомлений с сайта НСКМакстар. Если это письмо пришло, SMTP настроен верно.', function ($message) use ($recipients) {
                $message->to($recipients)->subject('Тест доставки заявки · НСКМакстар');
            });
            $mailOk = true;
            $this->info('Email: команда принята SMTP для '.count($recipients).' получателей.');
        } catch (\Throwable $exception) {
            $this->error('Email: '.$exception->getMessage());
        }
    }

    $token = trim((string) config('services.max.access_token'));
    $userId = trim((string) config('services.max.user_id'));
    $chatId = trim((string) config('services.max.chat_id'));
    $recipientKey = $userId !== '' ? 'user_id' : 'chat_id';
    $recipientId = $userId !== '' ? $userId : $chatId;

    if ($token === '' || ! preg_match('/^-?\d+$/', $recipientId)) {
        $this->error('MAX не настроен: заполните MAX_BOT_TOKEN и MAX_USER_ID (или MAX_CHAT_ID).');
    } else {
        try {
            $client = Http::asJson()->acceptJson()->withHeaders(['Authorization' => $token])->timeout(15);
            $bundle = trim((string) config('services.max.ca_bundle'));
            if ($bundle !== '') {
                $client = $client->withOptions(['verify' => $bundle]);
            }

            $response = $client->post('https://platform-api2.max.ru/messages?'.http_build_query([$recipientKey => $recipientId]), [
                'text' => '<b>Тест уведомлений · НСКМакстар</b>\nMAX подключён: новые заявки будут приходить сюда.',
                'format' => 'html',
                'disable_link_preview' => true,
            ]);

            if ($response->successful()) {
                $maxOk = true;
                $this->info('MAX: тестовое сообщение отправлено.');
            } else {
                $this->error('MAX: HTTP '.$response->status().' — '.($response->json('description') ?? $response->json('message') ?? 'ответ без описания'));
            }
        } catch (\Throwable $exception) {
            $this->error('MAX: '.$exception->getMessage());
        }
    }

    return $mailOk || $maxOk ? 0 : 1;
})->purpose('Sends a safe test notification to the configured email and MAX recipients');
