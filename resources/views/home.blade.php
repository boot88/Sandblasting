<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Пескоструйная обработка в Бердске. Очистка от ржавчины, подготовка под покраску. Колёсные диски, кузова, фасады. Звоните +7 (913) 895-45-25">
    <title>Пескоструйная обработка в Бердске | SandBlast</title>
    
    <link rel="icon" type="image/x-icon" href="images/logotip/l-m.ico">
    <link rel="apple-touch-icon" href="images/logotip/l-m.jpg">
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Instrument Sans"', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#fef8ec',
                            100: '#fcedca',
                            200: '#f8d88f',
                            300: '#f4bd54',
                            400: '#f1a229',
                            500: '#eb8610',
                            600: '#d0650b',
                            700: '#ad480d',
                            800: '#8b3a0f',
                            900: '#733010',
                        },
                    },
                    boxShadow: {
                        'soft': '0 18px 45px rgba(0, 0, 0, 0.35)',
                    },
                },
            },
        }
    </script>

    <style>
        html { scroll-behavior: smooth; }

        body {
            font-family: "Instrument Sans", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background-color: #020617;
        }

        .hero-section {
            background: radial-gradient(circle at top left, rgba(248, 250, 252, 0.08), transparent 50%),
                        radial-gradient(circle at bottom right, rgba(248, 250, 252, 0.08), transparent 55%),
                        url("images/prom_job/photo-1647586028042-1de4d4a935e6.jpg") center/cover no-repeat,
                        #020617;
        }

        .hero-overlay {
            background: radial-gradient(circle at top, rgba(15, 23, 42, 0.65), rgba(15, 23, 42, 1));
        }

        .hero-badge {
            backdrop-filter: blur(18px);
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.6), rgba(15, 23, 42, 0.9));
            border: 1px solid rgba(148, 163, 184, 0.35);
        }

        .hero-border {
            border: 1px solid rgba(148, 163, 184, 0.35);
            box-shadow: 0 30px 80px rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(26px);
            background: radial-gradient(circle at top, rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.95));
        }

        .hero-gradient {
            background-image: radial-gradient(circle at 0% 0%, rgba(248, 250, 252, 0.12), transparent 50%),
                              radial-gradient(circle at 100% 100%, rgba(248, 250, 252, 0.06), transparent 55%);
        }

        .hero-texture {
            background-image: repeating-linear-gradient(120deg, rgba(148, 163, 184, 0.12) 0, rgba(148, 163, 184, 0.12) 1px, transparent 1px, transparent 7px);
        }

        .hero-marker {
            background: radial-gradient(circle at center, rgba(251, 191, 36, 0.95), rgba(248, 113, 22, 0.9));
            box-shadow:
                0 0 0 3px rgba(15, 23, 42, 1),
                0 0 0 8px rgba(248, 113, 22, 0.35),
                0 18px 45px rgba(0, 0, 0, 0.7);
        }

        .hero-marker-pulse {
            box-shadow:
                0 0 0 0 rgba(248, 113, 22, 0.7),
                0 0 0 0 rgba(248, 113, 22, 0.3);
            animation: hero-pulse 2.4s infinite cubic-bezier(0.4, 0, 0.2, 1);
        }

        @keyframes hero-pulse {
            0% {
                box-shadow:
                    0 0 0 0 rgba(248, 113, 22, 0.8),
                    0 0 0 0 rgba(248, 113, 22, 0.35);
                transform: translate(-50%, -50%) scale(1);
            }
            70% {
                box-shadow:
                    0 0 0 20px rgba(248, 113, 22, 0),
                    0 0 0 40px rgba(248, 113, 22, 0);
                transform: translate(-50%, -50%) scale(1.03);
            }
            100% {
                box-shadow:
                    0 0 0 0 rgba(248, 113, 22, 0),
                    0 0 0 0 rgba(248, 113, 22, 0);
                transform: translate(-50%, -50%) scale(1);
            }
        }

        .hero-line {
            background: linear-gradient(90deg, transparent, rgba(148, 163, 184, 0.7), transparent);
        }

        .floating-badge {
            animation: float-badge 8s ease-in-out infinite;
        }

        @keyframes float-badge {
            0%, 100% {
                transform: translateY(0) translateX(0);
            }
            25% {
                transform: translateY(-8px) translateX(4px);
            }
            50% {
                transform: translateY(-12px) translateX(-4px);
            }
            75% {
                transform: translateY(-6px) translateX(4px);
            }
        }

        .floating-card {
            animation: float-card 10s ease-in-out infinite;
        }

        @keyframes float-card {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-8px);
            }
        }

        .hero-glow {
            background: radial-gradient(circle at top, rgba(248, 250, 252, 0.27), transparent 55%);
            opacity: 0.75;
        }

        .hero-metal {
            background: radial-gradient(circle at 20% 0, rgba(148, 163, 184, 0.35), transparent 50%),
                        radial-gradient(circle at 80% 100%, rgba(148, 163, 184, 0.3), transparent 55%);
        }

        .hero-blur {
            backdrop-filter: blur(40px);
        }

        .service-card {
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        }

        .service-card:hover {
            transform: translateY(-4px);
            box-shadow:
                0 18px 45px rgba(15, 23, 42, 0.18),
                0 0 0 1px rgba(30, 64, 175, 0.04);
            border-color: rgba(148, 163, 184, 0.75);
        }

        .service-img {
            width: 100%;
            height: 190px;
            object-fit: cover;
        }

        .service-title {
            letter-spacing: 0.01em;
        }

        .service-tag {
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, #f97316, #ea580c);
            color: #0b1120;
            font-weight: 600;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #fb923c, #f97316);
        }

        .contact-card {
            background: radial-gradient(circle at top left, rgba(15, 23, 42, 0.65), rgba(15, 23, 42, 0.95));
            border: 1px solid rgba(148, 163, 184, 0.35);
            box-shadow: 0 22px 60px rgba(15, 23, 42, 0.85);
        }

        .contact-input {
            background-color: rgba(15, 23, 42, 0.7);
            border-color: rgba(75, 85, 99, 0.9);
            color: #e5e7eb;
        }

        .contact-input::placeholder {
            color: #6b7280;
        }

        .contact-input:focus {
            outline: none;
            border-color: #fb923c;
            box-shadow: 0 0 0 1px rgba(251, 146, 60, 0.3);
        }

        /* === Brand: SandBlast assets === */
:root{
  --brand-accent: #eb8610;
  --brand-shadow: rgba(0,0,0,.25);
}

/* Логотип в шапке (web) */
.brand-logo{
  height: 44px;
  width: auto;
  object-fit: contain;
  display: block;
  background: transparent;
  filter: drop-shadow(0 2px 6px var(--brand-shadow));
}
@media (min-width: 768px){ .brand-logo{ height: 52px; } }
@media (min-width: 1024px){ .brand-logo{ height: 56px; } }

/* Логотип в шапке (mobile / mark) */
.brand-mark{
  height: 40px;
  width: 40px;
  object-fit: cover;
  border-radius: 9999px;
  box-shadow: 0 0 0 2px #0f172a, 0 10px 30px rgba(0,0,0,.6);
}


/* Фото-блоки "Почему выбирают нас" */
.why-photo-card{
  border: 1px solid rgba(148,163,184,.45);
  background: radial-gradient(circle at top, rgba(15,23,42,.9), rgba(15,23,42,1));
  box-shadow: 0 18px 45px rgba(15,23,42,.85);
}
.why-photo-card img{
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: .75;
  transition: opacity .25s ease, transform .25s ease;
}
.why-photo-card:hover img{
  opacity: 1;
  transform: scale(1.03);
}
.why-photo-card:focus-visible{
  outline: 3px solid #fb923c;
  outline-offset: 3px;
}
.why-before-after{
  width: 100%;
  padding: 0;
  cursor: pointer;
  text-align: left;
}
.why-before-after img,
.why-before-after:hover img{
  opacity: 1;
  transform: none;
}
.why-before-after .why-after{
  z-index: 1;
  clip-path: inset(0 100% 0 0);
  transition: clip-path .35s ease;
}
.why-before-after::before{
  content: '';
  position: absolute;
  inset: 0 auto 0 0;
  z-index: 2;
  width: 2px;
  background: rgba(255,255,255,.92);
  box-shadow: 0 0 14px rgba(15,23,42,.9);
  transform: translateX(-100%);
  transition: transform .35s ease;
}
.why-before-after:hover .why-after,
.why-before-after:focus-visible .why-after,
.why-before-after.is-after-visible .why-after{
  clip-path: inset(0 0 0 0);
}
.why-before-after:hover::before,
.why-before-after:focus-visible::before,
.why-before-after.is-after-visible::before{
  transform: translateX(calc(100% - 2px));
}
.why-photo-label{
  position: absolute;
  top: .65rem;
  z-index: 4;
  border-radius: 999px;
  padding: .2rem .55rem;
  background: rgba(15,23,42,.78);
  color: #fff;
  font-size: .68rem;
  font-weight: 700;
  letter-spacing: .04em;
  text-transform: uppercase;
}
.why-before-label{ left: .65rem; }
.why-after-label{ right: .65rem; }
.why-photo-overlay{
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(15,23,42,.88), rgba(15,23,42,.2));
}
.why-photo-caption{
  position: relative;
  z-index: 1;
  height: 100%;
  display: flex;
  align-items: flex-end;
  padding: 0.75rem;
  font-size: 0.8rem;
  line-height: 1.2;
  color: #e5e7eb;
}
/* Галерея */
.portfolio-main-wrap{
  border-radius: 1.25rem;
  overflow: hidden;
  box-shadow: 0 18px 45px rgba(15,23,42,.35);
  border: 1px solid rgba(148,163,184,.35);
  background: radial-gradient(circle at top, rgba(15,23,42,.95), rgba(2,6,23,1));
}
.portfolio-main{
  max-height: 520px;
  object-fit: cover;
  width: 100%;
}
.portfolio-main.is-loading{
  opacity: .55;
}
@media (min-width: 768px) {
  .portfolio-main{
    height: 460px;
  }
}

.portfolio-thumbs{
  gap: .75rem;
}
.portfolio-thumb{
  width: 92px;
  border-radius: 12px;
  overflow: hidden;
  border: 1px solid transparent;
  transition: transform .18s ease, box-shadow .18s ease, border-color .18s ease, opacity .18s ease;
  opacity: .75;
}
.portfolio-thumb img{
  width: 100%;
  height: 68px;
  object-fit: cover;
}
.portfolio-thumb:hover{
  transform: translateY(-2px);
  box-shadow: 0 12px 30px rgba(15,23,42,.55);
  border-color: rgba(251,146,60,.7);
  opacity: 1;
}
.portfolio-thumb.is-active{
  border-color: rgba(251,146,60,1);
  opacity: 1;
}

/* Обёртка для карты/адреса */
.map-card{
  border-radius: 1.5rem;
  overflow: hidden;
  border: 1px solid rgba(148,163,184,.35);
  background: radial-gradient(circle at top, rgba(15,23,42,.9), rgba(15,23,42,1));
  box-shadow: 0 24px 60px rgba(15,23,42,.95);
}
.map-iframe{
  width: 100%;
  border: none;
  filter: saturate(1.1) contrast(1.02);
}
.map-actions{
  display: flex;
  justify-content: flex-end;
  gap: .5rem;
  padding: .65rem;
  border-top: 1px solid rgba(148,163,184,.25);
}

/* Отзывы */
.review-card{
  background: radial-gradient(circle at top left, rgba(15,23,42,.9), rgba(15,23,42,1));
  border-radius: 1.25rem;
  border: 1px solid rgba(148,163,184,.35);
  box-shadow: 0 20px 55px rgba(15,23,42,.85);
}

/* Scrollbar (опционально, под десктоп) */
::-webkit-scrollbar{
  width: 10px;
}
::-webkit-scrollbar-track{
  background: #020617;
}
::-webkit-scrollbar-thumb{
  background: linear-gradient(180deg, #f97316, #ea580c);
  border-radius: 999px;
}
::-webkit-scrollbar-thumb:hover{
  background: linear-gradient(180deg, #fb923c, #f97316);
}
    </style>
</head>
<body class="bg-slate-950 text-slate-50">
    <header class="border-b border-slate-800/70 bg-slate-950/90 backdrop-blur-lg sticky top-0 z-40">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Логотип и бренд -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <img src="images/logotip/l-m.jpg" alt="SandBlast" class="brand-mark md:hidden">
                    <img src="images/logotip/logo_transparent_smoothed_more.png" alt="Логотип SandBlast" class="brand-logo hidden md:block">
                    <span class="text-2xl font-bold text-primary-600 ml-1 hidden md:inline">SandBlast</span>
                </div>

<!-- Теглайн в шапке -->
<div class="hidden lg:flex items-center mx-6">
    <div class="h-8 w-px bg-slate-800/60 mr-4"></div>
    <span class="text-xs tracking-[0.18em] uppercase text-slate-400">
        Пескоструйная&nbsp;обработка
    </span>
</div>

                <!-- Десктопное меню -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-6">
                        <a href="#services" class="text-neutral-300 hover:text-primary-400 px-3 py-2 text-sm font-medium">Услуги</a>
                        <a href="#portfolio" class="text-neutral-300 hover:text-primary-400 px-3 py-2 text-sm font-medium">Наши работы</a>
                        <a href="#about" class="text-neutral-300 hover:text-primary-400 px-3 py-2 text-sm font-medium">О нас</a>
                        <a href="#reviews" class="text-neutral-300 hover:text-primary-400 px-3 py-2 text-sm font-medium">Отзывы</a>
                        <a href="#contact" class="btn-primary text-sm py-2 px-4 rounded-full shadow-lg shadow-orange-500/30 border border-orange-300/40">Заказать звонок</a>
                    </div>
                </div>

                <!-- Телефон (виден на мобиле) -->
                <div class="md:hidden flex items-center">
                    <a href="tel:+79138954525" class="btn-primary text-sm py-2 px-3 mr-2 rounded-full shadow-lg shadow-orange-500/30 flex items-center">
                        <span class="sr-only">Позвонить</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M3 5a2 2 0 012-2h1.28a1 1 0 01.96.73l1.02 3.58a1 1 0 01-.55 1.17l-1.2.6a1 1 0 00-.45 1.45 11.05 11.05 0 005.02 4.51 1 1 0 001.13-.2l1.46-1.46a1 1 0 011.18-.18l3.16 1.58a1 1 0 01.54.9V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>Позвонить</span>
                    </a>
                    <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-neutral-300 hover:text-white hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500 transition-colors duration-200" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Открыть меню</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Мобильное меню (скрыто по умолчанию) -->
            <div id="mobile-menu" class="md:hidden hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-slate-950 border-t border-slate-800">
                    <a href="#services" class="block px-3 py-2 rounded-md text-base font-medium text-neutral-300 hover:text-primary-400 hover:bg-slate-900">Услуги</a>
                    <a href="#portfolio" class="block px-3 py-2 rounded-md text-base font-medium text-neutral-300 hover:text-primary-400 hover:bg-slate-900">Наши работы</a>
                    <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-neutral-300 hover:text-primary-400 hover:bg-slate-900">О нас</a>
                    <a href="#reviews" class="block px-3 py-2 rounded-md text-base font-medium text-neutral-300 hover:text-primary-400 hover:bg-slate-900">Отзывы</a>
                    <a href="#contact" class="block mt-2 btn-primary w-full text-center py-3 rounded-full shadow-lg shadow-orange-500/30">Заказать звонок</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- Герой секция -->
        <section class="hero-section relative py-16 md:py-24 lg:py-32 overflow-hidden">
            <div class="hero-overlay absolute inset-0"></div>

            <div class="hero-glow pointer-events-none absolute -inset-x-24 -top-32 h-72 opacity-40"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                    <div class="text-center lg:text-left">
                        <div class="hero-badge inline-flex items-center gap-3 px-4 py-2 rounded-full mb-6 text-sm text-neutral-100">
                            <span class="flex h-2 w-2">
                                <span class="relative inline-flex h-2 w-2 rounded-full bg-emerald-400">
                                    <span class="absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75 animate-ping"></span>
                                </span>
                            </span>
                            <span class="uppercase tracking-[0.18em] text-[11px] text-neutral-300">
                                Пескоструйная обработка в&nbsp;Бердске
                            </span>
                            <span class="h-4 w-px bg-slate-600"></span>
                            <span class="text-xs text-amber-300 flex items-center gap-1">
                                <span class="inline-flex h-1.5 w-6 bg-gradient-to-r from-amber-400/80 via-orange-500/90 to-amber-300/80 rounded-full"></span>
                                до 3 классов очистки
                            </span>
                        </div>

                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 md:mb-6">
                            Профессиональная <span class="text-primary-400">пескоструйная обработка</span>
                        </h1>
                        <p class="text-xl md:text-2xl text-neutral-200 mb-8 md:mb-10 max-w-3xl mx-auto lg:mx-0">
                            Очистка, восстановление и подготовка поверхностей под порошковую покраску.
                            Колёсные диски, кузова, промышленные конструкции, фасады. Очистка от ржавчины,
                            грязи, копоти и гари любых поверхностей.
                        </p>

                        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                            <a href="#contact" class="btn-primary hover:scale-[1.02] active:scale-[0.99] transition-transform duration-150 inline-flex items-center justify-center px-7 py-3 rounded-full shadow-soft">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M3 4a1 1 0 011-1h4.586a1 1 0 01.707.293l1.414 1.414A1 1 0 0011.414 5H20a1 1 0 011 1v2.764a5 5 0 01-.879 2.83l-4.242 6.364A4 4 0 0112.618 20H8a4 4 0 01-4-4V4z" />
                                </svg>
                                Рассчитать стоимость
                            </a>
                            <a href="tel:+79138954525" class="bg-white border border-slate-300/70 text-slate-900 hover:border-primary-400/80 hover:text-slate-950 inline-flex items-center justify-center px-6 py-3 rounded-full shadow-lg shadow-slate-900/50 hover:shadow-xl transition-all duration-150">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M3 5a2 2 0 012-2h1.28a1 1 0 01.96.73l1.02 3.58a1 1 0 01-.55 1.17l-1.2.6a1 1 0 00-.45 1.45 11.05 11.05 0 005.02 4.51 1 1 0 001.13-.2l1.46-1.46a1 1 0 011.18-.18l3.16 1.58a1 1 0 01.54.9V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                +7 (913) 895-45-25
                            </a>
                        </div>

                        <div class="mt-8 flex flex-col sm:flex-row sm:items-center gap-4 text-sm text-neutral-300">
                            <div class="flex items-center justify-center sm:justify-start gap-3">
                                <div class="flex -space-x-2">
                                    <span class="inline-flex h-8 w-8 rounded-full bg-slate-800 border border-slate-700"></span>
                                    <span class="inline-flex h-8 w-8 rounded-full bg-slate-800 border border-slate-700"></span>
                                    <span class="inline-flex h-8 w-8 rounded-full bg-slate-800 border border-slate-700"></span>
                                </div>
                                <div>
                                    <p class="font-semibold text-neutral-100">Более 500 обработанных комплектов дисков</p>
                                    <p class="text-xs text-neutral-400">Работаем с частными клиентами и сервисами</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Правая часть героя: карта/металл/метка -->
                    <div class="relative mt-4 lg:mt-0">
                        <div class="hero-border hero-metal rounded-3xl p-6 md:p-7 lg:p-8 relative overflow-hidden">
                            <div class="hero-texture absolute inset-0 opacity-30 mix-blend-soft-light pointer-events-none"></div>

                            <div class="relative z-10 grid grid-cols-1 gap-6">
                                <div class="flex items-center justify-between gap-3">
                                    <div>
                                        <p class="text-xs uppercase tracking-[0.2em] text-slate-400 mb-1">ЛОКАЦИЯ</p>
                                        <a href="https://2gis.ru/berdsk/geo/141373143549296" target="_blank" rel="noopener noreferrer" class="hover:text-primary-300 underline-offset-4 hover:underline transition-colors">НСО, г. Бердск, пер. Промышленный 2а/4</a>
                                        <p class="text-xs text-neutral-400">Удобный выезд по региону и приём на площадке</p>
                                    </div>
                                    <div class="relative">
                                        <div class="hero-marker hero-marker-pulse absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 rounded-full h-7 w-7"></div>
                                        <div class="relative h-16 w-16 rounded-full border border-slate-500/70 bg-slate-900/80 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-primary-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                                <path d="M12 22s7-7.134 7-12.5A7 7 0 0 0 5 9.5C5 14.866 12 22 12 22Z" />
                                                <circle cx="12" cy="9.5" r="2.5" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="map-card mt-2">
                                    <iframe
                                        class="map-iframe h-64 md:h-72"
                                        src="https://yandex.ru/map-widget/v1/?ll=83.096077%2C54.766532&amp;z=17&amp;pt=83.096077%2C54.766532%2Cpm2rdm"
                                        loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"
                                        title="Карта: НСО, г. Бердск, пер. Промышленный 2а/4"
                                    ></iframe>
                                    <div class="map-actions">
                                        <a href="https://2gis.ru/berdsk/geo/141373143549296" target="_blank" rel="noopener noreferrer" class="text-xs font-semibold text-primary-300 hover:text-primary-200 underline underline-offset-4">Открыть в 2ГИС</a>
                                        <a href="https://yandex.ru/maps/?text=НСО%2C%20г.%20Бердск%2C%20пер.%20Промышленный%202а%2F4" target="_blank" rel="noopener noreferrer" class="text-xs font-semibold text-primary-300 hover:text-primary-200 underline underline-offset-4">Открыть в Яндекс Картах</a>
                                    </div>
                                </div>

                                <div class="grid grid-cols-2 gap-4 mt-1">
                                    <div class="review-card px-4 py-3 flex items-center gap-3">
                                        <div class="flex flex-col">
                                            <span class="text-xs uppercase tracking-[0.18em] text-slate-400">СРОКИ</span>
                                            <span class="text-sm font-semibold text-neutral-100">от 1 рабочего дня</span>
                                            <span class="text-xs text-neutral-400">в зависимости от объёма и загрузки</span>
                                        </div>
                                    </div>
                                    <div class="review-card px-4 py-3 flex items-center gap-3">
                                        <div class="flex flex-col">
                                            <span class="text-xs uppercase tracking-[0.18em] text-slate-400">ТИПЫ ОБЪЕКТОВ</span>
                                            <span class="text-sm font-semibold text-neutral-100">диски, рамы, конструкции</span>
                                            <span class="text-xs text-neutral-400">частные и промышленные задачи</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hero-line absolute left-0 right-0 bottom-0 h-[1px] opacity-60"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Услуги -->
        <section id="services" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-neutral-900 mb-12">Наши услуги</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    
					<div class="service-card card overflow-hidden">
                        <img src="images/uslug/u-1.jpg" alt="Пескоструйная обработка дисков" class="service-img" loading="lazy" decoding="async">
                        <div class="p-6 text-center">
                            <h3 class="service-title text-lg font-semibold mb-2 text-neutral-900">Пескоструйная обработка дисков</h3>
                            <p class="text-sm text-neutral-600 mb-4">
                                Полная очистка дисков от старой краски, ржавчины и налёта, подготовка поверхности под порошковую покраску.
                            </p>
                            <p class="text-xs text-neutral-500">
                                Литые, штампованные и кованые диски разных диаметров.
                            </p>
                        </div>
                    </div>

                    <div class="service-card card overflow-hidden">
                        <img src="images/uslug/u-2.jpg" alt="Пескоструйная обработка кузова и рам" class="service-img" loading="lazy" decoding="async">
                        <div class="p-6 text-center">
                            <h3 class="service-title text-lg font-semibold mb-2 text-neutral-900">Обработка кузова и рам</h3>
                            <p class="text-sm text-neutral-600 mb-4">
                                Пескоструйная очистка рам, элементов подвески, мостов и кузова автомобилей от коррозии и старых покрытий.
                            </p>
                            <p class="text-xs text-neutral-500">
                                Подготовка к ремонту и антикоррозийной обработке.
                            </p>
                        </div>
                    </div>

                    <div class="service-card card overflow-hidden">
                        <img src="images/uslug/u-3.jpg" alt="Пескоструйная обработка металлоконструкций" class="service-img" loading="lazy" decoding="async">
                        <div class="p-6 text-center">
                            <h3 class="service-title text-lg font-semibold mb-2 text-neutral-900">Промышленные металлоконструкции</h3>
                            <p class="text-sm text-neutral-600 mb-4">
                                Очистка балок, ферм, площадок, резервуаров и других металлических конструкций на производстве.
                            </p>
                            <p class="text-xs text-neutral-500">
                                Для предприятий, строек и коммерческих объектов.
                            </p>
                        </div>
                    </div>

                    <div class="service-card card overflow-hidden">
                        <img src="images/uslug/u-4.jpg" alt="Пескоструйная обработка фасадов и архитектурных деталей" class="service-img" loading="lazy" decoding="async">
                        <div class="p-6 text-center">
                            <h3 class="service-title text-lg font-semibold mb-2 text-neutral-900">Фасады и архитектура</h3>
                            <p class="text-sm text-neutral-600 mb-4">
                                Аккуратная пескоструйная очистка металлических элементов фасада, ограждений и архитектурных деталей.
                            </p>
                            <p class="text-xs text-neutral-500">
                                Сохраняем геометрию и внешний вид конструкций.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- С чем мы работаем -->
        <section id="objects" class="py-16 bg-neutral-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-neutral-900 mb-10">
                    С какими объектами работаем
                </h2>
                <p class="text-center text-neutral-600 max-w-3xl mx-auto mb-10">
                    Пескоструйная обработка SandBlast подходит для очистки и подготовки к покраске
                    как небольших деталей, так и крупных конструкций.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="card h-full text-center">
                        <h3 class="text-lg font-semibold mb-2 text-neutral-900">Автодиски и колёса</h3>
                        <p class="text-sm text-neutral-600">
                            Восстанавливаем внешний вид литых и штампованных дисков, снимаем старое покрытие
                            и готовим поверхность под порошковую покраску.
                        </p>
                    </div>
                    <div class="card h-full text-center">
                        <h3 class="text-lg font-semibold mb-2 text-neutral-900">Кузова и рамы авто</h3>
                        <p class="text-sm text-neutral-600">
                            Очищаем рамы, мосты, элементы подвески и кузова от ржавчины, старой краски, битума и сложных загрязнений.
                        </p>
                    </div>
                    <div class="card h-full text-center">
                        <h3 class="text-lg font-semibold mb-2 text-neutral-900">Промышленные конструкции</h3>
                        <p class="text-sm text-neutral-600">
                            Балки, фермы, металлоконструкции, резервуары, площадки — подготавливаем металл под дальнейшую защиту.
                        </p>
                    </div>
                    <div class="card h-full text-center">
                        <h3 class="text-lg font-semibold mb-2 text-neutral-900">Фасады и архитектура</h3>
                        <p class="text-sm text-neutral-600">
                            Аккуратно очищаем элементы фасадов, ограждения, декоративные детали и другие уличные конструкции.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Как мы работаем -->
        <section id="process" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-neutral-900 mb-10">
                    Как проходит пескоструйная обработка
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="card h-full">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary-100 text-primary-700 font-semibold mb-4">
                            1
                        </div>
                        <h3 class="text-lg font-semibold mb-2 text-neutral-900">Заявка и консультация</h3>
                        <p class="text-sm text-neutral-600">
                            Созваниваемся или переписываемся, оцениваем объём работ по описанию и фотографиям.
                        </p>
                    </div>
                    <div class="card h-full">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary-100 text-primary-700 font-semibold mb-4">
                            2
                        </div>
                        <h3 class="text-lg font-semibold mb-2 text-neutral-900">Подготовка объекта</h3>
                        <p class="text-sm text-neutral-600">
                            Снимаем навесные элементы, закрываем уязвимые зоны, подбираем абразив и давление под конкретную задачу.
                        </p>
                    </div>
                    <div class="card h-full">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary-100 text-primary-700 font-semibold mb-4">
                            3
                        </div>
                        <h3 class="text-lg font-semibold mb-2 text-neutral-900">Пескоструйная обработка</h3>
                        <p class="text-sm text-neutral-600">
                            Очищаем поверхность до нужной степени, добиваемся однородной шероховатости под грунт и покраску.
                        </p>
                    </div>
                    <div class="card h-full">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary-100 text-primary-700 font-semibold mb-4">
                            4
                        </div>
                        <h3 class="text-lg font-semibold mb-2 text-neutral-900">Передача под покраску</h3>
                        <p class="text-sm text-neutral-600">
                            Готовый результат передаём под порошковую покраску или дальнейшую защиту по договорённости.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Наши работы: 2 слайдера по 3 фото -->
        <section id="portfolio" class="py-16 bg-neutral-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-neutral-900 mb-12">Наши работы</h2>

                <!-- Группа 1: Автодиски и автомобили -->

<div class="portfolio-group mb-14" data-gallery="cars">
    <h3 class="text-2xl font-semibold mb-6 text-center text-neutral-900">Автодиски и автомобили</h3>

    <div class="portfolio-main-wrap">
        <img
            class="portfolio-main service-img w-full"
            src="images/job2/1_b2.jpg"
            data-src-desktop="images/job2/1_b2.jpg"
            data-src-mobile="images/job2/j1.jpg"
            alt="Автодиски и автомобили"
            loading="lazy"
            decoding="async"
        >
    </div>

    <div class="portfolio-thumbs mt-5 flex flex-wrap justify-center gap-3">
        <button
            type="button"
            class="portfolio-thumb is-active"
            data-src-desktop="images/job2/1_b2.jpg"
            data-src-mobile="images/job2/j1.jpg"
            aria-label="Открыть работу 1"
        >
            <img src="images/job2/j1.jpg" alt="Миниатюра 1" loading="lazy" decoding="async">
        </button>

        <button
            type="button"
            class="portfolio-thumb"
            data-src-desktop="images/job2/2_b2.jpg"
            data-src-mobile="images/job2/j2.jpg"
            aria-label="Открыть работу 2"
        >
            <img src="images/job2/j2.jpg" alt="Миниатюра 2" loading="lazy" decoding="async">
        </button>

        <button
            type="button"
            class="portfolio-thumb"
            data-src-desktop="images/job2/3_bl2.jpg"
            data-src-mobile="images/job2/j3.jpg"
            aria-label="Открыть работу 3"
        >
            <img src="images/job2/j3.jpg" alt="Миниатюра 3" loading="lazy" decoding="async">
        </button>

        <button
            type="button"
            class="portfolio-thumb"
            data-src-desktop="images/job2/4_b2.jpg"
            data-src-mobile="images/job2/j4.jpg"
            aria-label="Открыть работу 4"
        >
            <img src="images/job2/j4.jpg" alt="Миниатюра 4" loading="lazy" decoding="async">
        </button>

        <button
            type="button"
            class="portfolio-thumb"
            data-src-desktop="images/job2/5_bl2.jpg"
            data-src-mobile="images/job2/j5.jpg"
            aria-label="Открыть работу 5"
        >
            <img src="images/job2/j5.jpg" alt="Миниатюра 5" loading="lazy" decoding="async">
        </button>

        <button
            type="button"
            class="portfolio-thumb"
            data-src-desktop="images/job2/6_b2.jpg"
            data-src-mobile="images/job2/j6.jpg"
            aria-label="Открыть работу 6"
        >
            <img src="images/job2/j6.jpg" alt="Миниатюра 6" loading="lazy" decoding="async">
        </button>
    </div>
</div>

                <!-- Группа 2: Промышленные объекты -->
                <div class="portfolio-group" data-gallery="industry">
                    <h3 class="text-2xl font-semibold mb-6 text-center text-neutral-900">Промышленные объекты</h3>

                    <div class="portfolio-main-wrap">
                        <img
                            class="portfolio-main service-img w-full"
                            src="images/prom_job/photo-1647586028042-1de4d4a935e6.avif"
                            alt="Промышленные объекты — работа 1"
                            loading="lazy"
                            decoding="async"
                        >
                    </div>

                    <div class="portfolio-thumbs mt-5 flex flex-wrap justify-center gap-3">
                        <button type="button" class="portfolio-thumb is-active"
        data-gallery="industry"
        data-src="images/prom_job/photo-1647586028042-1de4d4a935e6.avif"
        aria-label="Открыть работу 1">
    <picture>
        <source srcset="images/prom_job/photo-1647586028042-1de4d4a935e6.avif" type="image/avif">
        <img src="images/prom_job/photo-1647586028042-1de4d4a935e6.jpg"
             alt="Миниатюра 1"
             loading="lazy" decoding="async">
    </picture>
</button>
                        <button type="button" class="portfolio-thumb" data-gallery="industry" data-src="images/prom_job/photo-1539361599489-e7ff367e4abf.avif" aria-label="Открыть работу 2">
                            <img src="images/prom_job/photo-1539361599489-e7ff367e4abf.avif" alt="Миниатюра 2" loading="lazy" decoding="async">
                        </button>
                        <button type="button" class="portfolio-thumb" data-gallery="industry" data-src="images/prom_job/photo-1564182842519-8a3b2af3e228.avif" aria-label="Открыть работу 3">
                            <img src="images/prom_job/photo-1564182842519-8a3b2af3e228.avif" alt="Миниатюра 3" loading="lazy" decoding="async">
                        </button>
                        <button type="button" class="portfolio-thumb" data-gallery="industry" data-src="images/prom_job/photo-1747999461210-a56f72294428.avif" aria-label="Открыть работу 4">
                            <img src="images/prom_job/photo-1747999461210-a56f72294428.avif" alt="Миниатюра 4" loading="lazy" decoding="async">
                        </button>
                        <button type="button" class="portfolio-thumb" data-gallery="industry" data-src="images/prom_job/photo-1747999703278-ef065c39cb18.avif" aria-label="Открыть работу 5">
                            <img src="images/prom_job/photo-1747999703278-ef065c39cb18.avif" alt="Миниатюра 5" loading="lazy" decoding="async">
                        </button>
                        <button type="button" class="portfolio-thumb" data-gallery="industry" data-src="images/prom_job/photo-1748348812466-8e29e1348f73.avif" aria-label="Открыть работу 6">
                            <img src="images/prom_job/photo-1748348812466-8e29e1348f73.avif" alt="Миниатюра 6" loading="lazy" decoding="async">
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- О нас -->
        <section id="about" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h2 class="text-4xl md:text-5xl font-bold text-neutral-900 mb-8">Почему выбирают нас</h2>
                        <p class="text-lg text-neutral-600 mb-6">
                            <strong>SandBlast</strong> — это команда специалистов по пескоструйной обработке
                            с опытом работы с автодисками, кузовами и промышленными объектами. Мы используем
                            современное оборудование и качественные материалы.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-primary-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-neutral-700">Опытные мастера с допусками к работам</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-primary-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-neutral-700">Подробная консультация и понятная смета перед началом работ</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-primary-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-neutral-700">Современное оборудование и контролируемое качество обработки</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-primary-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-neutral-700">Работаем с объектами разного масштаба — от одного комплекта дисков до крупных конструкций</span>
                            </li>
                        </ul>
                    </div>

                    <div class="relative">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-4">
                                <div class="why-photo-card h-40 rounded-2xl overflow-hidden relative">
                                    <img src="images/process/photo-1748348812466-8e29e1348f73.avif" alt="Процесс пескоструйной обработки" loading="lazy" decoding="async">
                                    <div class="why-photo-overlay"></div>
                                    <div class="why-photo-caption">
                                        <span>Фото процесса пескоструйной обработки</span>
                                    </div>
                                </div>
                                <div class="why-photo-card h-40 rounded-2xl overflow-hidden relative">
                                    <img src="images/fragment/photo-1766340744738-0c3355ea9879.avif" alt="Фрагмент обработанной поверхности" loading="lazy" decoding="async">
                                    <div class="why-photo-overlay"></div>
                                    <div class="why-photo-caption">
                                        <span>Фрагменты обработанных поверхностей</span>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-4 mt-6">
                                <div class="why-photo-card h-40 rounded-2xl overflow-hidden relative">
                                    <img src="images/exemple/photo-1673201159941-68fcdbbb4fa1.avif" alt="Пример промышленного объекта" loading="lazy" decoding="async">
                                    <div class="why-photo-overlay"></div>
                                    <div class="why-photo-caption">
                                        <span>Пример промышленного объекта</span>
                                    </div>
                                </div>
                                <button type="button" class="why-photo-card why-before-after h-40 rounded-2xl overflow-hidden relative" aria-pressed="false" aria-label="Показать очищенную поверхность металла">
                                    <img src="images/before/photo-1684310978150-5cabf9542b7d.avif" alt="Коррозия на металлической поверхности" loading="lazy" decoding="async">
                                    <img class="why-after" src="images/after/photo-1766340744738-0c3355ea9879.avif" alt="Очищенная поверхность металла" loading="lazy" decoding="async">
                                    <span class="why-photo-label why-before-label">Коррозия</span>
                                    <span class="why-photo-label why-after-label">Металл</span>
                                    <div class="why-photo-overlay"></div>
                                    <div class="why-photo-caption">
                                        <span>Состояние поверхности — наведите или нажмите</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Отзывы -->
        <section id="reviews" class="py-16 bg-slate-950">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-white mb-10">Отзывы клиентов</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <article class="review-card p-6">
                        <p class="text-sm text-neutral-300 mb-4">
                            «Отдавал комплект дисков после нескольких сезонов — были коррозия и сколы.
                            После пескоструя и покраски выглядят как новые. Сделали быстро и аккуратно.»
                        </p>
                        <p class="text-sm font-semibold text-neutral-100">Алексей, владелец Toyota</p>
                    </article>

                    <article class="review-card p-6">
                        <p class="text-sm text-neutral-300 mb-4">
                            «Потребовалась обработка части металлоконструкций на объекте. Ребята оперативно выехали,
                            отработали в оговорённые сроки, помогли с подготовкой под последующую окраску.»
                        </p>
                        <p class="text-sm font-semibold text-neutral-100">Дмитрий, представитель подрядчика</p>
                    </article>

                    <article class="review-card p-6">
                        <p class="text-sm text-neutral-300 mb-4">
                            «Хороший сервис и понятное общение. По телефону сразу обозначили примерную стоимость и сроки,
                            по факту всё совпало. Могу рекомендовать.»
                        </p>
                        <p class="text-sm font-semibold text-neutral-100">Игорь, частный клиент</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- Контакты -->
        <section id="contact" class="py-20 bg-slate-950">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Связаться с SandBlast</h2>
                        <p class="text-neutral-300 mb-6">
                            Расскажите о задаче, пришлите фото или опишите объект — мы предложим варианты обработки и ориентировочную стоимость.
                        </p>

                        <div class="space-y-4 text-neutral-300">
                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <path d="M16.5 3.75h-9A2.25 2.25 0 0 0 5.25 6v11.25A2.25 2.25 0 0 0 7.5 19.5h9a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 16.5 3.75Z" />
                                    <path d="M8.25 7.5h7.5" />
                                    <path d="M8.25 10.5h4.5" />
                                </svg>
                                <div>
                                    <p class="text-sm font-semibold text-neutral-100">Телефон</p>
                                    <a href="tel:+79138954525" class="text-base text-primary-400 hover:text-primary-300">+7 (913) 895-45-25</a>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <path d="M4.5 6.75 12 12l7.5-5.25" />
                                    <path d="M4.5 6.75A2.25 2.25 0 0 1 6.75 4.5h10.5A2.25 2.25 0 0 1 19.5 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 17.25Z" />
                                </svg>
                                <div>
                                    <p class="text-sm font-semibold text-neutral-100">E-mail</p>
                                    <a href="mailto:marketing@nioch-appl.ru" class="text-base text-primary-400 hover:text-primary-300">marketing@nioch-appl.ru</a>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <path d="M12 21.75s7.5-7.364 7.5-12.375A7.5 7.5 0 0 0 4.5 9.375C4.5 14.386 12 21.75 12 21.75Z" />
                                    <circle cx="12" cy="9.375" r="2.625" />
                                </svg>
                                <div>
                                    <p class="text-sm font-semibold text-neutral-100">Адрес</p>
                                    <a href="https://2gis.ru/berdsk/geo/141373143549296" target="_blank" rel="noopener noreferrer" class="text-sm text-neutral-300 hover:text-primary-300 underline-offset-4 hover:underline">
                                        НСО, г. Бердск, пер. Промышленный 2а/4
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contact-card rounded-3xl p-8">
                        <h3 class="text-xl font-semibold text-white mb-4">Оставить заявку</h3>
                        <p class="text-sm text-neutral-300 mb-6">
                            Укажите контакты и кратко опишите задачу — мы свяжемся с вами и обсудим детали.
                        </p>
                        <form id="lead-form" method="POST" action="{{ route('lead.send') }}" class="space-y-4">
                            @csrf
                            <div>
                                <label for="name" class="block text-sm font-medium text-neutral-300 mb-1">Имя</label>
                                <input id="name" type="text" class="contact-input w-full px-4 py-3 rounded-xl text-sm" placeholder="Иван Иванов" required name="name">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-neutral-300 mb-1">Телефон</label>
                                <input id="phone" type="tel" class="contact-input w-full px-4 py-3 rounded-xl text-sm" placeholder="+7 (___) ___-__-__" required name="phone">
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-neutral-300 mb-1">Описание задачи</label>
                                <textarea id="message" rows="4" class="contact-input w-full px-4 py-3 rounded-xl text-sm" placeholder="Например, пескоструйная обработка дисков или металлоконструкции" required name="message"></textarea>
                            </div>
                            <button type="submit" class="btn-primary w-full py-3 rounded-xl mt-2 flex items-center justify-center gap-2">
                                <span>Отправить заявку</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <path d="M5 12h14" />
                                    <path d="M13 5l7 7-7 7" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-black border-t border-slate-800/80 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <img src="images/logotip/l-m.jpg" alt="SandBlast" class="h-10 w-10 rounded-full object-cover">
                    <div>
                        <p class="text-sm font-semibold text-white">SandBlast</p>
                        <p class="text-xs text-neutral-500">Пескоструйная обработка в Бердске и НСО</p>
                    </div>
                </div>
                <div class="text-xs text-neutral-500 md:text-center">
    <p class="font-semibold text-neutral-300">Адрес</p>
    <p>
        НСО, г.&nbsp;Бердск, пер.&nbsp;Промышленный&nbsp;2а/4<br>
        <a href="https://2gis.ru/berdsk/geo/141373143549296" target="_blank" rel="noopener noreferrer" class="text-primary-400 hover:text-primary-300 underline-offset-4 hover:underline">
            Открыть в 2ГИС
        </a>
    </p>
</div>
<div class="text-xs text-neutral-500 md:text-right">

                    <p>Телефон: <a href="tel:+79138954525" class="text-primary-400 hover:text-primary-300">+7 (913) 895-45-25</a></p>
                    <p>E-mail: <a href="mailto:marketing@nioch-appl.ru" class="text-primary-400 hover:text-primary-300">marketing@nioch-appl.ru</a></p>
                </div>
            </div>
            <div class="border-t border-neutral-800 mt-6 pt-4 text-sm text-center text-neutral-500">
                <p>© 2026 SandBlast. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <script>
    (function () {
        const form = document.getElementById('lead-form');
        if (!form) return;

        const toast = document.getElementById('toast-success');
        const toastClose = document.getElementById('toast-success-close');

        function showToast() {
            if (!toast) return;
            toast.classList.remove('hidden');
            toast.classList.add('opacity-100');
            setTimeout(hideToast, 5000);
        }

        function hideToast() {
            if (!toast) return;
            toast.classList.add('hidden');
        }

        if (toastClose) {
            toastClose.addEventListener('click', function () {
                hideToast();
            });
        }

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton ? submitButton.innerHTML : null;

            if (submitButton) {
                submitButton.disabled = true;
                submitButton.classList.add('opacity-70', 'cursor-wait');
                submitButton.innerHTML = '<span>Отправляем...</span>';
            }

            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value,
                    'Accept': 'application/json',
                },
                body: formData
            })
            .then(async (response) => {
                if (!response.ok) {
                    throw new Error('Ошибка отправки');
                }
                // Пытаемся прочитать JSON, если Laravel вернет
                try {
                    const data = await response.json();
                    console.log('Lead response:', data);
                } catch (e) {
                    // Если не JSON — просто игнорируем
                }

                form.reset();
                showToast();
            })
            .catch((error) => {
                console.error(error);
                alert('Не удалось отправить заявку. Попробуйте еще раз или свяжитесь по телефону.');
            })
            .finally(() => {
                if (submitButton) {
                    submitButton.disabled = false;
                    submitButton.classList.remove('opacity-70', 'cursor-wait');
                    submitButton.innerHTML = originalText;
                }
            });
        });
    })();
</script>

<script>
        // Мобильное меню
        document.getElementById('mobile-menu-button').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            const expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', String(!expanded));
            menu.classList.toggle('hidden');
        });

        // Галерея "Наши работы"
        document.querySelectorAll('.portfolio-group').forEach((group) => {
    const mainImg = group.querySelector('.portfolio-main');
    const thumbs = group.querySelectorAll('.portfolio-thumb');

    if (!mainImg || !thumbs.length) return;

    const desktopMainSrc = mainImg.getAttribute('data-src-desktop');
    const mobileMainSrc = mainImg.getAttribute('data-src-mobile');

    const updateMainSrc = (desktopSrc, mobileSrc) => {
        const isMobile = window.matchMedia('(max-width: 767px)').matches;
        const target = isMobile ? (mobileSrc || desktopSrc) : (desktopSrc || mobileSrc);
        if (target && mainImg.getAttribute('src') !== target) {
            mainImg.classList.add('is-loading');
            mainImg.src = target;
        }
    };

    mainImg.addEventListener('load', () => mainImg.classList.remove('is-loading'));

    // Стартовое изображение: подбираем под устройство
    if (desktopMainSrc || mobileMainSrc) {
        updateMainSrc(desktopMainSrc, mobileMainSrc);
    }

    thumbs.forEach((btn) => {
        btn.addEventListener('click', () => {
            const desktopSrc = btn.getAttribute('data-src-desktop') || btn.getAttribute('data-src');
            const mobileSrc = btn.getAttribute('data-src-mobile') || desktopSrc;

            updateMainSrc(desktopSrc, mobileSrc);

            // Подсветка активной миниатюры
            thumbs.forEach((b) => b.classList.remove('is-active'));
            btn.classList.add('is-active');
        });
    });
});

        // Подгружаем большие изображения после первого рендера, чтобы первое
        // переключение в галерее не ждало сеть. На экономных соединениях не грузим.
        const connection = navigator.connection || navigator.mozConnection || navigator.webkitConnection;
        const shouldPreloadGallery = !connection || (!connection.saveData && !/2g/.test(connection.effectiveType || ''));

        if (shouldPreloadGallery) {
            const preloadGalleryImages = () => {
                const isMobile = window.matchMedia('(max-width: 767px)').matches;

                document.querySelectorAll('.portfolio-thumb').forEach((thumb) => {
                    const desktopSrc = thumb.getAttribute('data-src-desktop') || thumb.getAttribute('data-src');
                    const mobileSrc = thumb.getAttribute('data-src-mobile') || desktopSrc;
                    const source = isMobile ? mobileSrc : desktopSrc;

                    if (source) {
                        const image = new Image();
                        image.decoding = 'async';
                        image.src = source;
                    }
                });
            };

            if ('requestIdleCallback' in window) {
                window.requestIdleCallback(preloadGalleryImages, { timeout: 2500 });
            } else {
                window.setTimeout(preloadGalleryImages, 1200);
            }
        }

        document.querySelectorAll('.why-before-after').forEach((card) => {
            card.addEventListener('click', () => {
                const isVisible = card.classList.toggle('is-after-visible');
                card.setAttribute('aria-pressed', String(isVisible));
            });
        });
</script>
<div id="toast-success" class="fixed inset-x-0 top-4 flex justify-center z-50 pointer-events-none hidden">
    <div class="bg-emerald-500 text-white text-sm md:text-base px-4 md:px-6 py-3 md:py-3.5 rounded-full shadow-2xl flex items-center gap-2 md:gap-3 pointer-events-auto">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
        <span>Заявка отправлена! Мы свяжемся с вами в ближайшее время.</span>
        <button type="button" id="toast-success-close" class="ml-2 md:ml-4 inline-flex items-center justify-center rounded-full border border-white/40 bg-white/10 px-2 py-1 text-xs md:text-sm hover:bg-white/20 transition">
            Закрыть
        </button>
    </div>
</div>

</body>
</html>
