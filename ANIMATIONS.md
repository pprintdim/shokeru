# План анімування сайту Shokeru (без перевантаження)

> Статус: **опис, без змін у коді.** Мета — додати легкі, сучасні анімації, не вбиваючи продуктивність.

## Бібліотека

**Motion One** (motion.dev) — рекомендована.
- ~5–18 KB (tree-shakeable), сучасна, на базі нативного Web Animations API → анімації йдуть на GPU (composite-потік), не блокують main thread.
- Працює з vanilla JS, інтегрується з наявним `script.js` без jQuery.
- Має вбудований `inView()` (scroll-trigger через IntersectionObserver) — без сторонніх scroll-бібліотек.

Підключення (коли дійде до реалізації):
```php
// у потрібному контролері
$this->document->addScript('https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.min.js');
```

Альтернативи (якщо Motion не підійде):
- **AOS** — найпростіше, але старіше і важче для DOM.
- **GSAP** — потужно, але надлишково (користувач: «суперсильні анімації не треба»).
- **Чистий CSS** — для дрібниць (hover, fade) взагалі без бібліотеки.

## Що анімувати (по секціях `html/index.html`)

| Секція | Анімація | Тип |
|---|---|---|
| `.hero` | плавна поява заголовка/CTA при завантаженні (fade + translateY 20px) | on-load, JS |
| `.productSlider` | картки з`являються каскадом (stagger) при скролі | inView, JS |
| `.about` (`__block`/`__content`) | fade-in зліва/справа при попаданні у в`юпорт | inView, JS |
| `.safemode` | поява блоку + легкий зум зображення | inView, JS |
| `.feedback` | плавна поява форми | inView, JS |
| Картки товарів (всюди) | hover: підйом + тінь | **чистий CSS** |
| Кнопки / `.shop__more` | hover/active мікро-анімації | **чистий CSS** |
| Header при скролі | компактний/тінь | CSS клас + малий JS |
| Попапи (`.userPopup`, `.busket`) | fade + scale при відкритті | CSS transition |

## Принципи «без перевантаження»

1. **Тільки `transform` і `opacity`** — не анімувати `width/height/top/left/margin` (викликають reflow).
2. **`will-change` точково** — лише на елементах, що реально анімуються, і прибирати після.
3. **IntersectionObserver / `inView()`** замість слухача `scroll` — анімація лише коли блок видно, спрацьовує один раз.
4. **Stagger ≤ 0.05–0.08s**, тривалість 0.3–0.6s — швидко, не дратує.
5. **`prefers-reduced-motion`** — вимикати анімації для користувачів з налаштуванням доступності:
   ```css
   @media (prefers-reduced-motion: reduce) {
     *, *::before, *::after { animation: none !important; transition: none !important; }
   }
   ```
6. **Без анімацій на мобільному для важких блоків** (опційно, через media-query / matchMedia).
7. **Не чіпати закоментований код у Twig** (правило проекту).

## Порядок реалізації (коли дамо «go»)

1. CSS-мікроанімації (hover/попапи) — `html/css/style.css` → синк у `catalog/view/css/style.css`. Без бібліотеки.
2. Підключити Motion One через CDN (1 контролер або глобально у `footer.twig`).
3. Додати `inView()`-анімації появи у новий файл `html/js/animations.js` → синк у `catalog/view/js/`.
4. Прокинути `prefers-reduced-motion`.
5. Перевірити Lighthouse / DevTools Performance (немає layout shift, CLS ≈ 0).

## Джерело правди
Спочатку `html/` (статичний макет), потім синхронізація у `catalog/view/` (CSS/JS) — згідно конвенцій проекту.
