# НСКМакстар — пескоструйная обработка

Одностраничный сайт на Laravel 12 для услуг пескоструйной очистки в Бердске.

## Возможности

- адаптивный каталог услуг, цены, этапы работы и галерея;
- плавная якорная навигация и ненавязчивые анимации появления;
- форма заявки с фотографией до 10 МБ;
- независимая доставка заявки на несколько email, в MAX и Telegram;
- защита формы: CSRF, honeypot, валидация и ограничение частоты;
- подтверждение успешной отправки без перезагрузки страницы.

## Локальный запуск

```bash
composer install
cp .env.example .env
php artisan key:generate
npm ci
npm run build
php artisan serve
```

## Настройка заявок

В `.env` заполните SMTP. Получатели перечисляются через запятую:

```dotenv
MAIL_MAILER=smtp
MAIL_HOST=
MAIL_PORT=587
MAIL_SCHEME=null
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_FROM_ADDRESS=admin@happypils.ru
MAIL_FROM_NAME="ООО НСКМакстар"
LEAD_TO_EMAILS=admin@happypils.ru,povisok888@gmail.com

MAX_BOT_TOKEN=
MAX_USER_ID=
MAX_CHAT_ID=
MAX_CA_BUNDLE=

TELEGRAM_BOT_TOKEN=
TELEGRAM_CHAT_ID=
```

Для личного диалога MAX заполните `MAX_USER_ID`; для группы или канала — `MAX_CHAT_ID`. Токены и пароли не добавляются в GitHub.

После изменения `.env`:

```bash
php artisan optimize:clear
php artisan config:cache
php artisan test
```
