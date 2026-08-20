# Деплой ООО «НСКМакстар»

Перед публикацией скопируйте `.env.production.example` в `.env`, заполните почтовые настройки и задайте `APP_KEY`.

Для формы заявок `MAIL_FROM_ADDRESS` — адрес отправителя, а `LEAD_TO_EMAIL` — адрес, на который придут заявки. Для рабочего ящика `marketing@happypils.ru` используйте SMTP-сервер, порт и схему шифрования именно из настроек этого почтового ящика в ISPmanager; `smtp.gmail.com` подходит только для Gmail и на локальном компьютере сейчас недоступен.

Для текущего временного адреса используйте:

```dotenv
APP_ENV=production
APP_DEBUG=false
APP_URL=http://happypils.ru/Sandblasting/public
```

После переноса на постоянный домен замените `APP_URL` на `https://www.maxtar-nsk.ru`, а также обновите строку `Sitemap:` в `public/robots.txt`.

На сервере после обновления файлов выполните:

```bash
php artisan config:clear
php artisan cache:clear
npm ci
npm run build
```

Кеширование изображений, CSS и JavaScript уже добавлено в `public/.htaccess`. На Apache должны быть включены модули `headers` и `expires`:

```bash
sudo a2enmod headers expires
sudo systemctl reload apache2
```
