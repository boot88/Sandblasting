<?php

namespace Tests\Feature;

use App\Mail\LeadRequestMail;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class LeadSubmissionTest extends TestCase
{
    public function test_lead_is_sent_to_both_emails_and_max_with_photo(): void
    {
        Mail::fake();
        Http::fake([
            'platform-api2.max.ru/uploads*' => Http::response([
                'url' => 'https://iu.oneme.ru/upload/test',
            ]),
            'iu.oneme.ru/*' => Http::response(['token' => 'image-token']),
            'platform-api2.max.ru/messages*' => Http::response([
                'message' => ['id' => '1'],
            ]),
        ]);

        config()->set('mail.lead_to_addresses', [
            'admin@happypils.ru',
            'povisok888@gmail.com',
        ]);
        config()->set('mail.default', 'smtp');
        config()->set('services.max.access_token', 'max-test-token');
        config()->set('services.max.user_id', '69922776');
        config()->set('services.max.chat_id', null);
        config()->set('services.telegram.bot_token', null);
        config()->set('services.telegram.chat_id', null);

        $response = $this->post(route('lead.send'), [
            'name' => 'Тестовый клиент',
            'phone' => '+7 913 000-00-00',
            'message' => 'Нужно очистить станину оборудования.',
            'photo' => UploadedFile::fake()->create('detail.jpg', 100, 'image/jpeg'),
        ], ['Accept' => 'application/json', 'X-Requested-With' => 'XMLHttpRequest']);

        $response->assertOk()
            ->assertJson([
                'status' => 'ok',
                'message' => 'Заявка отправлена! Мы свяжемся с вами после просмотра.',
            ]);

        Mail::assertSent(LeadRequestMail::class, 2);
        Mail::assertSent(LeadRequestMail::class, fn (LeadRequestMail $mail) =>
            $mail->hasTo('admin@happypils.ru') && $mail->photo['name'] === 'detail.jpg'
        );
        Mail::assertSent(LeadRequestMail::class, fn (LeadRequestMail $mail) =>
            $mail->hasTo('povisok888@gmail.com') && $mail->photo['name'] === 'detail.jpg'
        );

        Http::assertSent(fn ($request) =>
            str_contains($request->url(), 'platform-api2.max.ru/messages?user_id=69922776')
            && $request->hasHeader('Authorization', 'max-test-token')
            && data_get($request->data(), 'attachments.0.payload.token') === 'image-token'
        );
    }

    public function test_lead_requires_a_real_phone_number(): void
    {
        $response = $this->postJson(route('lead.send'), [
            'name' => 'Клиент',
            'phone' => '12345',
            'message' => 'Нужна оценка.',
        ]);

        $response->assertUnprocessable()
            ->assertJsonValidationErrors('phone');
    }
}
