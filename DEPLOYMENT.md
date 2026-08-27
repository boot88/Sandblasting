# Деплой ООО «НСКМакстар»

Перед публикацией скопируйте `.env.production.example` в `.env`, заполните почтовые настройки и задайте `APP_KEY`.

Для формы заявок `MAIL_FROM_ADDRESS` — адрес отправителя, а `LEAD_TO_EMAILS` — получатели через запятую. Для `admin@happypils.ru` используйте SMTP-сервер, порт и схему шифрования из настроек этого ящика в ISPmanager.

```dotenv
MAIL_MAILER=smtp
MAIL_HOST=
MAIL_PORT=587
MAIL_SCHEME=null
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_FROM_ADDRESS=admin@happypils.ru
LEAD_TO_EMAILS=admin@happypils.ru,povisok888@gmail.com

MAX_BOT_TOKEN=
MAX_USER_ID=
MAX_CHAT_ID=
MAX_CA_BUNDLE=
```

Для личного диалога MAX заполните `MAX_USER_ID`, для группы или канала — `MAX_CHAT_ID`.

Для текущего временного адреса используйте:

```dotenv
APP_ENV=production
APP_DEBUG=false
APP_URL=http://happypils.ru/Sandblasting/public
```

После переноса на постоянный домен замените `APP_URL` на фактический публичный адрес, а также обновите строку `Sitemap:` в `public/robots.txt`.

На сервере после обновления файлов выполните:

```bash
php artisan optimize:clear
php artisan config:cache
npm ci
npm run build
```

Кеширование изображений, CSS и JavaScript уже добавлено в `public/.htaccess`. На Apache должны быть включены модули `headers` и `expires`:

```bash
sudo a2enmod headers expires
sudo systemctl reload apache2
```
