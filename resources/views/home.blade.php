<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description" content="ООО «НСКМакстар» — пескоструйная обработка в Бердске. Очищаем диски, рамы, кузова и металлоконструкции от ржавчины и старых покрытий, готовим поверхность под покраску.">
    <meta name="robots" content="index,follow">
    <meta name="theme-color" content="#11151a">
    <meta name="yandex-metrika-id" content="106844100">
    <link rel="canonical" href="{{ url('/') }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:title" content="Пескоструйная обработка в Бердске | НСКМакстар">
    <meta property="og:description" content="Очистка металла и подготовка к покраске. Предварительная оценка по фотографии.">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset('images/hero/hero-nskmaxtar-v2.webp') }}">
    <title>Пескоструйная обработка в Бердске | НСКМакстар</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logotip/l-m.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logotip/l-m.jpg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html { scroll-behavior: smooth !important; scroll-padding-top: 88px; }
        .toast:not(.is-visible) { pointer-events: none !important; }
        @media (max-width: 920px) {
            .mobile-menu {
                position: absolute !important;
                top: 70px !important;
                right: 0 !important;
                bottom: auto !important;
                left: 0 !important;
                height: calc(100dvh - 70px) !important;
                z-index: 250 !important;
                overflow-y: auto !important;
            }
            .mobile-actions,
            .mobile-actions a {
                pointer-events: auto !important;
                touch-action: manipulation;
            }
        }
    </style>
    <script type="application/ld+json">{!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => 'ООО «НСКМакстар»',
        'description' => 'Пескоструйная обработка и подготовка металлических поверхностей к покраске.',
        'url' => url('/'),
        'image' => asset('images/hero/hero-nskmaxtar-v2.webp'),
        'telephone' => '+79138954525',
        'email' => 'admin@happypils.ru',
        'priceRange' => '₽₽',
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Бердск',
            'addressRegion' => 'Новосибирская область',
            'streetAddress' => 'пер. Промышленный, 2а/4',
            'addressCountry' => 'RU',
        ],
        'sameAs' => ['https://vk.ru/club105621991'],
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>
</head>
<body>
    <a class="skip-link" href="#main">Перейти к содержанию</a>
    <div class="utility-bar">
        <div class="site-container utility-bar__inner">
            <a href="https://2gis.ru/berdsk/geo/141373143549296" target="_blank" rel="noopener noreferrer" data-metrika-goal="route_2gis">Бердск, пер. Промышленный, 2а/4</a>
            <div class="utility-bar__right">
                <span>Приём по предварительной договорённости</span>
                <a href="tel:+79138954525" data-metrika-goal="phone_click">+7 913 895-45-25</a>
            </div>
        </div>
    </div>
    <header class="site-header" id="siteHeader">
        <div class="site-container site-header__inner">
            <a class="brand" href="#top" aria-label="НСКМакстар — на главную">
                <span class="brand__mark" aria-hidden="true">НМ</span>
                <span class="brand__text"><strong>НСКМакстар</strong><small>Обработка металла</small></span>
            </a>
            <nav class="desktop-nav" aria-label="Основная навигация">
                <a href="#services">Услуги</a><a href="#cases">До и после</a><a href="#prices">Цены</a><a href="#process">Как работаем</a><a href="#contacts">Контакты</a>
            </nav>
            <div class="site-header__actions">
                <a class="header-phone" href="tel:+79138954525" data-metrika-goal="phone_click"><span>Позвонить</span><strong>+7 913 895-45-25</strong></a>
                <a class="button button--primary header-quote" href="#quote" data-metrika-goal="header_quote">Рассчитать</a>
                <button class="menu-toggle" id="menuToggle" type="button" aria-controls="mobileMenu" aria-expanded="false" aria-label="Открыть меню"><span></span><span></span><span></span></button>
            </div>
        </div>
        <nav class="mobile-menu" id="mobileMenu" aria-label="Мобильная навигация" aria-hidden="true">
            <div class="mobile-menu__inner">
                <a href="#services">Услуги</a><a href="#cases">До и после</a><a href="#prices">Цены</a><a href="#process">Как работаем</a><a href="#contacts">Контакты</a>
                <div class="mobile-menu__contacts">
                    <a href="tel:+79138954525" data-metrika-goal="phone_click">+7 913 895-45-25</a>
                    <a href="https://wa.me/79138954525" target="_blank" rel="noopener noreferrer" data-metrika-goal="whatsapp_click">WhatsApp</a>
                    <a href="https://vk.ru/club105621991" target="_blank" rel="noopener noreferrer" data-metrika-goal="vk_click">VK</a>
                </div>
            </div>
        </nav>
    </header>

    <main id="main">
        <section class="hero" id="top">
            <img class="hero__image" src="{{ asset('images/hero/hero-nskmaxtar-v2.webp') }}" alt="Пескоструйная обработка металлической рамы в защитной экипировке" width="1672" height="941" fetchpriority="high">
            <div class="hero__shade"></div>
            <div class="site-container hero__inner">
                <div class="hero__content">
                    <p class="eyebrow"><span></span> Пескоструйная обработка · Бердск</p>
                    <h1>Чистый металл.<br><em>Готов к покрытию.</em></h1>
                    <p class="hero__lead">Удаляем ржавчину, краску и сложные загрязнения. Готовим диски, рамы, кузовные детали и металлоконструкции под грунт или покраску.</p>
                    <div class="hero__actions">
                        <a class="button button--primary button--large" href="#quote" data-metrika-goal="hero_quote">Оценить работу по фото</a>
                        <a class="button button--ghost button--large" href="tel:+79138954525" data-metrika-goal="phone_click">Позвонить</a>
                    </div>
                    <ul class="hero__trust" aria-label="Преимущества">
                        <li><strong>от 1 дня</strong><span>ориентировочный срок</span></li>
                        <li><strong>от 5 000 ₽</strong><span>минимальный заказ</span></li>
                        <li><strong>по фото</strong><span>предварительная оценка</span></li>
                    </ul>
                </div>
            </div>
            <p class="hero__image-note">Иллюстрация технологического процесса</p>
        </section>

        <section class="fact-strip" aria-label="Основная информация">
            <div class="site-container fact-strip__grid">
                <div><span>01</span><p><strong>Работаем с металлом</strong>Диски, рамы, детали и конструкции</p></div>
                <div><span>02</span><p><strong>Подготовка под покрытие</strong>Равномерный профиль поверхности</p></div>
                <div><span>03</span><p><strong>Площадка в Бердске</strong>Промышленный переулок, 2а/4</p></div>
                <div><span>04</span><p><strong>Понятный расчёт</strong>Размер, покрытие, сложность и срочность</p></div>
            </div>
        </section>

        <section class="section section--light" id="services">
            <div class="site-container">
                <div class="section-heading section-heading--split">
                    <div><p class="section-kicker">Что очищаем</p><h2>Работаем с частными и промышленными заказами</h2></div>
                    <p>Подбираем режим обработки под материал и состояние поверхности. Перед началом согласуем результат, цену и дальнейшее покрытие.</p>
                </div>
                <div class="service-grid">
                    <article class="service-card service-card--wide">
                        <img src="{{ asset('images/job2/2_b2.jpg') }}" alt="Колёсные диски в промышленной зоне" width="1536" height="1024" loading="lazy" decoding="async">
                        <div class="service-card__body"><span>01</span><h3>Колёсные диски</h3><p>Снимаем старую краску, лак и коррозию. Подготавливаем поверхность к грунту или порошковой покраске.</p><strong>от 5 000 ₽ за комплект</strong></div>
                    </article>
                    <article class="service-card">
                        <img src="{{ asset('images/job2/4_b2.jpg') }}" alt="Обработка кузова автомобиля" width="1536" height="1024" loading="lazy" decoding="async">
                        <div class="service-card__body"><span>02</span><h3>Рамы и детали авто</h3><p>Рамы, мосты, элементы подвески и кузовные детали.</p><strong>от 1 500 ₽</strong></div>
                    </article>
                    <article class="service-card">
                        <img src="{{ asset('images/job2/6_b2.jpg') }}" alt="Обработка промышленной металлической конструкции" width="1536" height="1024" loading="lazy" decoding="async">
                        <div class="service-card__body"><span>03</span><h3>Металлоконструкции</h3><p>Балки, фермы, ёмкости, площадки и производственные элементы.</p><strong>от 500 ₽/м²</strong></div>
                    </article>
                    <article class="service-card">
                        <img src="{{ asset('images/job2/1_b2.jpg') }}" alt="Очистка металлической детали" width="1536" height="1024" loading="lazy" decoding="async">
                        <div class="service-card__body"><span>04</span><h3>Лодки, фасады, прочее</h3><p>Оценим нестандартное изделие по фотографии или после осмотра.</p><strong>Расчёт индивидуально</strong></div>
                    </article>
                    <article class="service-card">
                        <img src="{{ asset('images/job2/5_bl2.jpg') }}" alt="Пескоструйная очистка узлов промышленного оборудования" width="1536" height="1024" loading="lazy" decoding="async">
                        <div class="service-card__body"><span>05</span><h3>Станки и оборудование</h3><p>Корпуса, опоры, узлы и металлические элементы производственного оборудования.</p><strong>от 5 000 ₽</strong></div>
                    </article>
                </div>
                <p class="illustration-note">Фотографии в блоке иллюстрируют виды работ и будут дополняться реальными материалами ООО «НСКМакстар».</p>
            </div>
        </section>

        <section class="section section--dark" id="cases">
            <div class="site-container">
                <div class="section-heading section-heading--split section-heading--dark">
                    <div><p class="section-kicker">Результат в деталях</p><h2>До и после обработки</h2></div>
                    <p>Пескоструй удаляет разрушенное покрытие и коррозию, открывая чистый металл с профилем для следующего защитного слоя.</p>
                </div>
                <div class="case-grid">
                    <article class="case-card"><div class="case-card__visual"><img src="{{ asset('images/examples/example-wheel-before-after.webp') }}" alt="Иллюстративное сравнение диска до и после очистки" width="1440" height="720" loading="lazy" decoding="async"><span class="case-card__label case-card__label--before">До</span><span class="case-card__label case-card__label--after">После</span></div><div class="case-card__body"><h3>Колёсный диск</h3><p>Удаление старого покрытия и очагов коррозии перед грунтованием.</p></div></article>
                    <article class="case-card"><div class="case-card__visual"><img src="{{ asset('images/examples/example-frame-before-after.webp') }}" alt="Иллюстративное сравнение металлической детали до и после очистки" width="1440" height="720" loading="lazy" decoding="async"><span class="case-card__label case-card__label--before">До</span><span class="case-card__label case-card__label--after">После</span></div><div class="case-card__body"><h3>Металлическая деталь</h3><p>Очистка сложного рельефа и труднодоступных участков.</p></div></article>
                </div>
                <p class="case-disclaimer">Сейчас показаны иллюстративные примеры результата работ пар «до / после». После будут добавлены больше фотографии, по требованию можем показать дополнительные работы готовых продукций.</p>
            </div>
        </section>

        <section class="section section--paper" id="prices">
            <div class="site-container pricing-layout">
                <div class="pricing-intro"><p class="section-kicker">Ориентиры стоимости</p><h2>Цена зависит от состояния изделия</h2><p>Для предварительной оценки пришлите несколько фотографий, укажите размеры и желаемый срок. Точную стоимость подтверждаем после осмотра.</p><a class="text-link" href="#quote" data-metrika-goal="price_request">Отправить фото на оценку <span>→</span></a></div>
                <div class="price-list">
                    <div class="price-row"><span>01</span><div><strong>Колёсные диски</strong><small>Комплект, цена зависит от диаметра</small></div><b>от 5 000 ₽</b></div>
                    <div class="price-row"><span>02</span><div><strong>Рамы и детали авто</strong><small>Подвеска, кузовные и другие детали</small></div><b>от 1 500 ₽</b></div>
                    <div class="price-row"><span>03</span><div><strong>Металлоконструкции</strong><small>После оценки площади и сложности</small></div><b>от 500 ₽/м²</b></div>
                    <div class="price-row"><span>04</span><div><strong>Крупные поверхности</strong><small>Ориентир при достаточном объёме</small></div><b>от 500 ₽/м²</b></div>
                    <div class="price-row"><span>05</span><div><strong>Станки и оборудование</strong><small>Узлы, корпуса и производственные детали</small></div><b>от 5 000 ₽</b></div>
                    <div class="price-row price-row--accent"><span>—</span><div><strong>Минимальный заказ</strong><small>Для запуска и подготовки оборудования</small></div><b>5 000 ₽</b></div>
                </div>
            </div>
        </section>

        <section class="section section--light" id="process">
            <div class="site-container">
                <div class="section-heading"><p class="section-kicker">Как строится работа</p><h2>Три понятных шага</h2></div>
                <div class="process-grid">
                    <article><span>01</span><h3>Показываете задачу</h3><p>Присылаете фото, размеры и описание покрытия. Мы уточняем детали и называем ориентир.</p></article>
                    <article><span>02</span><h3>Согласовываем работу</h3><p>После осмотра фиксируем объём, требуемую степень очистки, стоимость и срок.</p></article>
                    <article><span>03</span><h3>Получаете чистый металл</h3><p>Проверяем поверхность и передаём изделие готовым к согласованному следующему этапу.</p></article>
                </div>
            </div>
        </section>

        <section class="section section--portfolio" id="portfolio">
            <div class="site-container">
                <div class="section-heading section-heading--split"><div><p class="section-kicker">Галерея</p><h2>Типовые задачи</h2></div><p>Раздел постепенно заменим фотографиями выполненных заказов с описанием исходного состояния, срока и результата.</p></div>
                <div class="portfolio-grid">
                    <figure class="portfolio-item portfolio-item--large"><img src="{{ asset('images/job2/1_b2.jpg') }}" alt="Очистка металлической поверхности" width="1536" height="1024" loading="lazy" decoding="async"><figcaption><span>Подготовка поверхности</span><strong>Снятие старого покрытия</strong></figcaption></figure>
                    <figure class="portfolio-item"><img src="{{ asset('images/job2/2_b2.jpg') }}" alt="Колёсные диски" width="1536" height="1024" loading="lazy" decoding="async"><figcaption><span>Автомобили</span><strong>Колёсные диски</strong></figcaption></figure>
                    <figure class="portfolio-item"><img src="{{ asset('images/job2/4_b2.jpg') }}" alt="Кузов автомобиля" width="1536" height="1024" loading="lazy" decoding="async"><figcaption><span>Автомобили</span><strong>Кузова и рамы</strong></figcaption></figure>
                    <figure class="portfolio-item"><img src="{{ asset('images/job2/5_bl2.jpg') }}" alt="Обработка тяжёлой металлической детали" width="1536" height="1024" loading="lazy" decoding="async"><figcaption><span>Промышленность</span><strong>Тяжёлые детали</strong></figcaption></figure>
                    <figure class="portfolio-item portfolio-item--wide"><img src="{{ asset('images/job2/6_b2.jpg') }}" alt="Промышленная металлическая конструкция" width="1536" height="1024" loading="lazy" decoding="async"><figcaption><span>Промышленность</span><strong>Металлоконструкции</strong></figcaption></figure>
                </div>
                <p class="illustration-note">Представлены иллюстрации направлений работ, а не подтверждённые заказы компании.</p>
            </div>
        </section>

        <section class="source-panel" id="reviews">
            <div class="site-container source-panel__inner">
                <div><p class="section-kicker">Открытая информация</p><h2>Новости и будущие отзывы — в сообществе VK</h2><p>Не публикуем вымышленные отзывы. Когда появятся подтверждённые отклики клиентов, добавим их со ссылками на источник.</p></div>
                <a class="button button--outline" href="https://vk.ru/club105621991" target="_blank" rel="noopener noreferrer" data-metrika-goal="vk_reviews_click">Открыть сообщество VK</a>
            </div>
        </section>

        <section class="section contact-section" id="contacts">
            <div class="site-container">
                <div class="contact-heading"><p class="section-kicker">Бердск · НСО</p><h2>Покажите деталь — оценим объём работ</h2></div>
                <div class="contact-layout">
                    <div class="contact-info">
                        <div class="contact-list">
                            <div><span>Телефон</span><a href="tel:+79138954525" data-metrika-goal="phone_click">+7 913 895-45-25</a></div>
                            <div><span>Email</span><a href="mailto:admin@happypils.ru" data-metrika-goal="email_click">admin@happypils.ru</a></div>
                            <div><span>Адрес</span><a href="https://2gis.ru/berdsk/geo/141373143549296" target="_blank" rel="noopener noreferrer" data-metrika-goal="route_2gis">Бердск, пер. Промышленный, 2а/4</a></div>
                        </div>
                        <div class="messenger-row">
                            <a href="https://wa.me/79138954525" target="_blank" rel="noopener noreferrer" data-metrika-goal="whatsapp_click">WhatsApp</a><a href="tg://resolve?phone=79138954525" data-metrika-goal="telegram_click">Telegram</a><a href="https://vk.ru/club105621991" target="_blank" rel="noopener noreferrer" data-metrika-goal="vk_click">VK</a>
                        </div>
                        <div class="map-wrap">
                            <iframe src="https://yandex.ru/map-widget/v1/?ll=83.096077%2C54.766532&amp;z=17&amp;pt=83.096077%2C54.766532%2Cpm2rdm" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Карта: Бердск, пер. Промышленный, 2а/4"></iframe>
                            <div class="map-wrap__actions"><a href="https://2gis.ru/berdsk/geo/141373143549296" target="_blank" rel="noopener noreferrer" data-metrika-goal="route_2gis">Маршрут в 2ГИС</a><a href="https://yandex.ru/maps/?text=НСО%2C%20г.%20Бердск%2C%20пер.%20Промышленный%202а%2F4" target="_blank" rel="noopener noreferrer" data-metrika-goal="route_yandex">Яндекс Карты</a></div>
                        </div>
                    </div>
                    <div class="quote-card" id="quote">
                        <div class="quote-card__head"><span>Предварительная оценка</span><h3>Расскажите о задаче</h3><p>Приложите фотографию — так мы быстрее поймём объём и зададим только нужные вопросы.</p></div>
                        @if($errors->any())<div class="form-message form-message--error" role="alert">{{ $errors->first() }}</div>@endif
                        <div class="form-message" id="formMessage" role="status" aria-live="polite"></div>
                        <form id="leadForm" method="POST" action="{{ route('lead.send') }}" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="form-grid">
                                <label class="field"><span>Ваше имя</span><input type="text" name="name" value="{{ old('name') }}" autocomplete="name" required placeholder="Как к вам обращаться"></label>
                                <label class="field"><span>Телефон</span><input type="tel" name="phone" value="{{ old('phone') }}" autocomplete="tel" inputmode="tel" required placeholder="+7 ___ ___-__-__"></label>
                            </div>
                            <label class="field"><span>Что нужно обработать</span><textarea name="message" rows="5" required placeholder="Например: четыре диска R17, старое порошковое покрытие">{{ old('message') }}</textarea></label>
                            <label class="upload-field" for="leadPhoto"><span class="upload-field__icon" aria-hidden="true">+</span><span><strong>Прикрепить фото детали</strong><small>JPG, PNG, WebP, HEIC или AVIF · до 25 МБ</small></span><input id="leadPhoto" type="file" name="photo" accept="image/jpeg,image/png,image/webp,image/heic,image/heif,image/avif"><em id="photoStatus">Фото не выбрано</em></label>
                            <label class="honeypot" aria-hidden="true" style="position:absolute!important;left:-10000px!important;width:1px!important;height:1px!important;overflow:hidden!important;clip:rect(0,0,0,0)!important;white-space:nowrap!important;">Не заполняйте это поле<input type="text" name="website" tabindex="-1" autocomplete="off"></label>
                            <button class="button button--primary button--submit" type="submit">Отправить заявку</button>
                            <p class="form-consent">Отправляя форму, вы соглашаетесь на обработку указанных контактных данных для ответа на заявку.</p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="site-container site-footer__top">
            <a class="brand brand--footer" href="#top"><span class="brand__mark" aria-hidden="true">НМ</span><span class="brand__text"><strong>НСКМакстар</strong><small>Пескоструйная обработка</small></span></a>
            <div class="site-footer__summary"><p>Подготовка металлических поверхностей под защитные и декоративные покрытия.</p><div class="site-footer__hours"><strong>Режим работы</strong>&nbsp;<span>Пн–пт: 8:00–18:00</span>&nbsp;<span>Обед: 13:00–14:00</span>&nbsp;<span>Сб–вс: выходные</span></div></div>
            <div class="site-footer__contacts"><a href="tel:+79138954525">+7 913 895-45-25</a><a href="mailto:admin@happypils.ru">admin@happypils.ru</a><a href="https://2gis.ru/berdsk/geo/141373143549296" target="_blank" rel="noopener noreferrer">Бердск · Как проехать</a></div>
        </div>
        <div class="site-container site-footer__bottom"><span>© {{ date('Y') }} ООО «НСКМакстар»</span><span>Информация на сайте не является публичной офертой</span></div>
    </footer>

    <div class="mobile-actions" aria-label="Быстрая связь">
        <a href="tel:+79138954525" data-metrika-goal="phone_click">Позвонить</a>
        <a class="mobile-actions__primary" href="#quote" data-metrika-goal="mobile_quote">Оценить по фото</a>
    </div>
    <div class="toast{{ session('success') ? ' is-visible' : '' }}" id="successToast" role="status" aria-live="polite" data-initial-visible="{{ session('success') ? 'true' : 'false' }}"><strong>Заявка отправлена</strong><span>{{ session('success', 'Мы свяжемся с вами после просмотра.') }}</span><button type="button" id="toastClose" aria-label="Закрыть уведомление">×</button></div>
</body>
</html>
