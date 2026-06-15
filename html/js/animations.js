/* animations.js — легкі анімації появи на скролі (нативний IntersectionObserver).
   Старт: 2 блоки головної — .aboutus та .safemode. Без сторонніх бібліотек. */
(function () {
    var SELECTOR = '.aboutus, .safemode';
    var root = document.documentElement;

    // позначаємо, що JS працює → CSS вмикає старт-стан (інакше блоки видимі)
    root.classList.add('js-anim');

    function reveal(el) { el.classList.add('anim-in'); }

    function inViewport(el) {
        var r = el.getBoundingClientRect();
        var vh = window.innerHeight || document.documentElement.clientHeight;
        return r.top < vh && r.bottom > 0;
    }

    function init() {
        var nodes = document.querySelectorAll(SELECTOR);
        if (!nodes.length) return;

        var reduce = window.matchMedia &&
            window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        // фолбек: reduce-motion або старий браузер → одразу показати
        if (reduce || !('IntersectionObserver' in window)) {
            nodes.forEach(reveal);
            return;
        }

        // threshold:0 — спрацьовує на будь-який видимий піксель (важливо для високих блоків).
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    reveal(entry.target);
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0, rootMargin: '0px 0px -80px 0px' });

        nodes.forEach(function (el) {
            // те, що вже на екрані — показуємо одразу (не чекаємо скрол)
            if (inViewport(el)) {
                requestAnimationFrame(function () { reveal(el); });
            } else {
                io.observe(el);
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
