/* animations.js — легкі анімації появи на скролі (нативний IntersectionObserver).
   Старт: 2 блоки головної — .aboutus та .safemode. Без сторонніх бібліотек. */
(function () {
    var SELECTOR = '.aboutus, .safemode';

    // позначаємо, що JS працює → CSS вмикає старт-стан (інакше блоки видимі)
    document.documentElement.classList.add('js-anim');

    var nodes = document.querySelectorAll(SELECTOR);
    if (!nodes.length) return;

    var reduceMotion = window.matchMedia &&
        window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // фолбек: старий браузер або reduce-motion → одразу показати
    if (reduceMotion || !('IntersectionObserver' in window)) {
        nodes.forEach(function (el) { el.classList.add('anim-in'); });
        return;
    }

    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('anim-in');
                io.unobserve(entry.target); // анімація один раз
            }
        });
    }, { threshold: 0.15, rootMargin: '0px 0px -10% 0px' });

    nodes.forEach(function (el) { io.observe(el); });
})();
