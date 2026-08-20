const metrikaId = Number(document.querySelector('meta[name="yandex-metrika-id"]')?.content);

if (metrikaId) {
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments); };
        m[i].l = 1 * new Date();
        k = e.createElement(t);
        a = e.getElementsByTagName(t)[0];
        k.async = 1;
        k.src = r;
        a.parentNode.insertBefore(k, a);
    })(window, document, 'script', `https://mc.yandex.ru/metrika/tag.js?id=${metrikaId}`, 'ym');

    window.ym(metrikaId, 'init', {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
    });
}

const trackGoal = (goal) => {
    if (metrikaId && typeof window.ym === 'function') {
        window.ym(metrikaId, 'reachGoal', goal);
    }
};

document.querySelectorAll('[data-metrika-goal]').forEach((element) => {
    element.addEventListener('click', () => trackGoal(element.dataset.metrikaGoal));
});

(function () {
        const form = document.getElementById('lead-form');
        if (!form) return;

        const toast = document.getElementById('toast-success');
        const toastClose = document.getElementById('toast-success-close');
        const photoInput = document.getElementById('lead-photo');
        const photoStatus = document.getElementById('lead-photo-status');

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

        if (photoInput && photoStatus) {
            photoInput.addEventListener('change', () => {
                const file = photoInput.files?.[0];
                photoStatus.textContent = file
                    ? `Выбрано: ${file.name}`
                    : 'Фото не выбрано';
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
                if (photoStatus) photoStatus.textContent = 'Фото не выбрано';
                showToast();
                trackGoal('lead_submit');
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

// Мобильное меню
        document.getElementById('mobile-menu-button')?.addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            const expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', String(!expanded));
            menu.classList.toggle('hidden');
        });

        // Галерея "Наши работы"
        document.querySelectorAll('.portfolio-group').forEach((group) => {
    const mainImg = group.querySelector('.portfolio-main');
    const thumbs = group.querySelectorAll('.portfolio-thumb');
    const caption = group.querySelector('.portfolio-caption');

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
            if (caption && btn.dataset.caption) caption.textContent = btn.dataset.caption;
            trackGoal('portfolio_view');
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
