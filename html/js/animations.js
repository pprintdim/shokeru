/* animations.js — легкі анімації появи на скролі (нативний IntersectionObserver).
   Старт: 2 блоки головної — .aboutus та .safemode. Без сторонніх бібліотек. */
(function () {
    var SELECTOR = '.productSlider, .safemode';
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

/* Заголовки по сайту: поява (fade-up) при скролі */
(function () {
    function initTitles() {
        var nodes = document.querySelectorAll('.title, .main-title');
        if (!nodes.length) return;

        // hero має власну анімацію — виключаємо
        var list = Array.prototype.filter.call(nodes, function (el) {
            return !el.closest('.hero');
        });
        if (!list.length) return;

        var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (reduce || !('IntersectionObserver' in window)) {
            list.forEach(function (el) { el.classList.add('title-in'); });
            return;
        }

        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('title-in');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0, rootMargin: '0px 0px -60px 0px' });

        var vh = window.innerHeight || document.documentElement.clientHeight;
        list.forEach(function (el) {
            var r = el.getBoundingClientRect();
            if (r.top < vh && r.bottom > 0) {
                requestAnimationFrame(function () { el.classList.add('title-in'); });
            } else {
                io.observe(el);
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initTitles);
    } else {
        initTitles();
    }
})();

/* Hero: текст з'являється після завантаження картинки слайда */
(function () {
    function initHero() {
        var hero = document.querySelector('.hero');
        if (!hero) return;

        var ready = false;
        function setReady() {
            if (ready) return;
            ready = true;
            hero.classList.add('hero--ready');
        }

        if (!('IntersectionObserver' in window)) { setReady(); return; }

        // поява при потраплянні hero у в'юпорт (як решта — "при скролі")
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) { setReady(); io.disconnect(); }
            });
        }, { threshold: 0.05 });
        io.observe(hero);

        // запобіжник
        setTimeout(setReady, 3000);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initHero);
    } else {
        initHero();
    }
})();

/* about__block: лічильник цифр (count-up) при появі */
(function () {
    function countUp(el) {
        // перший текстовий вузол із числом (щоб не зламати вкладені <span> одиниць)
        var node = null;
        for (var i = 0; i < el.childNodes.length; i++) {
            var ch = el.childNodes[i];
            if (ch.nodeType === 3 && /\d/.test(ch.nodeValue)) { node = ch; break; }
        }
        if (!node) return;

        var text = node.nodeValue;
        var m = text.match(/\d[\d\s]*/);
        if (!m) return;

        var target = parseInt(m[0].replace(/\s/g, ''), 10);
        if (!isFinite(target) || target <= 0) return;

        var prefix = text.slice(0, m.index);
        var suffix = text.slice(m.index + m[0].length);
        var dur = 1400, start = null;

        function step(ts) {
            if (!start) start = ts;
            var p = Math.min((ts - start) / dur, 1);
            // ease-out
            var eased = 1 - Math.pow(1 - p, 3);
            node.nodeValue = prefix + Math.floor(eased * target) + suffix;
            if (p < 1) requestAnimationFrame(step);
            else node.nodeValue = prefix + target + suffix;
        }
        requestAnimationFrame(step);
    }

    function initCounters() {
        var blocks = document.querySelectorAll('.about__block, .aboutus__block');
        if (!blocks.length) return;

        var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (reduce || !('IntersectionObserver' in window)) return; // лишаємо статичні значення

        blocks.forEach(function (block) {
            var spans = block.querySelectorAll('.about__item > span, .aboutus__item > span');
            if (!spans.length) return;

            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (e) {
                    if (e.isIntersecting) {
                        spans.forEach(countUp);
                        io.disconnect();
                    }
                });
            }, { threshold: 0.3 });
            io.observe(block);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initCounters);
    } else {
        initCounters();
    }
})();
