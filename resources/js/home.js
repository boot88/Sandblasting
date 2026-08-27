const metrikaId = Number(document.querySelector('meta[name="yandex-metrika-id"]')?.content);

if (metrikaId) {
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments); };
        m[i].l = 1 * new Date();
        k = e.createElement(t);
        a = e.getElementsByTagName(t)[0];
        k.async = true;
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

const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

let scrollAnimationFrame = null;

const smoothScrollTo = (target) => {
    if (scrollAnimationFrame) window.cancelAnimationFrame(scrollAnimationFrame);

    const scrollPadding = Number.parseFloat(
        window.getComputedStyle(document.documentElement).scrollPaddingTop
    ) || 0;
    const startPosition = window.scrollY;
    const targetPosition = Math.max(
        0,
        target.getBoundingClientRect().top + startPosition - scrollPadding
    );
    const distance = targetPosition - startPosition;
    const duration = Math.min(850, Math.max(550, Math.abs(distance) * 0.35));
    const startedAt = window.performance.now();

    const animate = (currentTime) => {
        const progress = Math.min((currentTime - startedAt) / duration, 1);
        const easedProgress = progress < 0.5
            ? 4 * progress ** 3
            : 1 - ((-2 * progress + 2) ** 3) / 2;

        window.scrollTo(0, startPosition + distance * easedProgress);

        if (progress < 1) {
            scrollAnimationFrame = window.requestAnimationFrame(animate);
        } else {
            scrollAnimationFrame = null;
            target.focus({ preventScroll: true });
        }
    };

    scrollAnimationFrame = window.requestAnimationFrame(animate);
};

document.querySelectorAll('a[href^="#"]').forEach((link) => {
    link.addEventListener('click', (event) => {
        const hash = link.getAttribute('href');
        const target = hash && hash.length > 1 ? document.getElementById(hash.slice(1)) : null;

        if (!target) return;

        event.preventDefault();
        setMenuState(false);
        smoothScrollTo(target);
        window.history.replaceState(null, '', hash);
    });
});

document.querySelectorAll('[data-metrika-goal]').forEach((element) => {
    element.addEventListener('click', () => trackGoal(element.dataset.metrikaGoal));
});

const menuToggle = document.getElementById('menuToggle');
const mobileMenu = document.getElementById('mobileMenu');

const setMenuState = (open) => {
    if (!menuToggle || !mobileMenu) return;

    menuToggle.classList.toggle('is-active', open);
    mobileMenu.classList.toggle('is-open', open);
    menuToggle.setAttribute('aria-expanded', String(open));
    menuToggle.setAttribute('aria-label', open ? 'Закрыть меню' : 'Открыть меню');
    mobileMenu.setAttribute('aria-hidden', String(!open));
    document.body.classList.toggle('menu-open', open);
};

menuToggle?.addEventListener('click', () => {
    setMenuState(menuToggle.getAttribute('aria-expanded') !== 'true');
});

mobileMenu?.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => setMenuState(false));
});

window.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') setMenuState(false);
});

const desktopMedia = window.matchMedia('(min-width: 921px)');
const closeMenuOnDesktop = (event) => {
    if (event.matches) setMenuState(false);
};

if (typeof desktopMedia.addEventListener === 'function') {
    desktopMedia.addEventListener('change', closeMenuOnDesktop);
} else if (typeof desktopMedia.addListener === 'function') {
    desktopMedia.addListener(closeMenuOnDesktop);
}

const form = document.getElementById('leadForm');
const photoInput = document.getElementById('leadPhoto');
const photoStatus = document.getElementById('photoStatus');
const formMessage = document.getElementById('formMessage');
const successToast = document.getElementById('successToast');
const toastClose = document.getElementById('toastClose');
const maxPhotoSize = 10 * 1024 * 1024;

const showFormMessage = (message, type = 'error') => {
    if (!formMessage) return;

    formMessage.textContent = message;
    formMessage.className = `form-message form-message--${type} is-visible`;
};

const clearFormMessage = () => {
    if (!formMessage) return;

    formMessage.textContent = '';
    formMessage.className = 'form-message';
};

const showToast = () => {
    successToast?.classList.add('is-visible');
    window.setTimeout(() => successToast?.classList.remove('is-visible'), 6000);
};

if (successToast?.dataset.initialVisible === 'true') {
    window.setTimeout(() => successToast.classList.remove('is-visible'), 6000);
}

toastClose?.addEventListener('click', () => successToast?.classList.remove('is-visible'));

photoInput?.addEventListener('change', () => {
    clearFormMessage();
    const file = photoInput.files?.[0];

    if (!file) {
        if (photoStatus) photoStatus.textContent = 'Фото не выбрано';
        return;
    }

    if (file.size > maxPhotoSize) {
        photoInput.value = '';
        if (photoStatus) photoStatus.textContent = 'Фото не выбрано';
        showFormMessage('Файл больше 10 МБ. Выберите фотографию меньшего размера.');
        return;
    }

    if (photoStatus) photoStatus.textContent = file.name;
});

form?.addEventListener('submit', async (event) => {
    event.preventDefault();
    clearFormMessage();

    if (!form.checkValidity()) {
        form.reportValidity();
        return;
    }

    const submitButton = form.querySelector('button[type="submit"]');
    const originalText = submitButton?.textContent;

    if (submitButton) {
        submitButton.disabled = true;
        submitButton.textContent = 'Отправляем…';
    }

    try {
        const response = await fetch(form.action, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': form.querySelector('input[name="_token"]')?.value ?? '',
                'Accept': 'application/json',
            },
            body: new FormData(form),
        });

        const data = await response.json().catch(() => ({}));

        if (!response.ok) {
            const validationMessage = data.errors
                ? Object.values(data.errors).flat().join(' ')
                : data.message;
            throw new Error(validationMessage || 'Не удалось отправить заявку. Позвоните нам по телефону.');
        }

        form.reset();
        if (photoStatus) photoStatus.textContent = 'Фото не выбрано';
        showToast();
        trackGoal('lead_submit');
    } catch (error) {
        showFormMessage(error.message || 'Не удалось отправить заявку. Позвоните нам по телефону.');
        formMessage?.scrollIntoView({ behavior: 'smooth', block: 'center' });
    } finally {
        if (submitButton) {
            submitButton.disabled = false;
            submitButton.textContent = originalText || 'Отправить заявку';
        }
    }
});

if (!reducedMotion && 'IntersectionObserver' in window) {
    const revealTargets = document.querySelectorAll([
        '.service-card',
        '.case-card',
        '.price-row',
        '.process-grid article',
        '.portfolio-item',
        '.contact-layout > *',
    ].join(','));
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;

            entry.target.classList.add('is-revealed');
            observer.unobserve(entry.target);
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -36px' });

    revealTargets.forEach((element, index) => {
        element.classList.add('reveal-on-scroll');
        element.style.setProperty('--reveal-delay', `${Math.min(index % 4, 3) * 70}ms`);
        revealObserver.observe(element);
    });
}
