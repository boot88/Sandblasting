(() => {
    const mapWrap = document.querySelector('[data-map-zoom]');
    const locationMap = document.getElementById('locationMap');
    if (!mapWrap || !locationMap) return;
    const updateZoom = (delta) => {
        const current = Number(mapWrap.dataset.mapZoom || 17);
        const zoom = Math.min(19, Math.max(12, current + delta));
        if (zoom === current) return;
        mapWrap.dataset.mapZoom = String(zoom);
        const url = new URL(locationMap.src);
        url.searchParams.set('z', String(zoom));
        locationMap.src = url.toString();
    };
    mapWrap.querySelector('[data-map-zoom-in]')?.addEventListener('click', () => updateZoom(1));
    mapWrap.querySelector('[data-map-zoom-out]')?.addEventListener('click', () => updateZoom(-1));
    let pinchDistance = null;
    mapWrap.addEventListener('touchstart', (event) => {
        if (event.touches.length === 2) pinchDistance = Math.hypot(event.touches[0].clientX - event.touches[1].clientX, event.touches[0].clientY - event.touches[1].clientY);
    }, { passive: true });
    mapWrap.addEventListener('touchmove', (event) => {
        if (event.touches.length !== 2 || pinchDistance === null) return;
        const distance = Math.hypot(event.touches[0].clientX - event.touches[1].clientX, event.touches[0].clientY - event.touches[1].clientY);
        if (Math.abs(distance - pinchDistance) < 34) return;
        updateZoom(distance > pinchDistance ? 1 : -1);
        pinchDistance = distance;
    }, { passive: true });
    mapWrap.addEventListener('touchend', () => { pinchDistance = null; }, { passive: true });
})();
