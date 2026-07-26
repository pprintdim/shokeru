# Shokeru

Shokeru is a custom OpenCart 3 online store for automotive chemicals and car-care products.
The project combines a standard OpenCart backend with a custom storefront theme, catalog pages,
performance optimizations, multilingual content, and product import tooling.

## Live URLs

- Storefront: https://shokeru.autochemicals.s3.monosite.com.ua/
- Admin route on hosting: `/shk_panel/`
- Local development URL: `http://localhost:8888/shokeru/`

Do not commit hosting passwords, FTP credentials, database dumps, cache files, or local IDE
connection files. Use `app_config.local.php` for local or private overrides.

## Tech Stack

- OpenCart 3
- PHP with MySQL/MariaDB
- Twig templates
- Vanilla JavaScript and jQuery
- Swiper for storefront sliders
- MAMP for local development
- Custom parser/import tools in `shokeruParser/`

## Main Project Structure

- `admin/` - OpenCart admin controllers, models, language files, and templates.
- `catalog/` - storefront controllers, models, languages, JavaScript, CSS, and theme files.
- `catalog/view/theme/shokeru/` - custom Shokeru theme.
- `catalog/view/css/style.css` - main storefront stylesheet.
- `catalog/view/js/script.js` - main storefront interactions and slider initialization.
- `catalog/view/js/common.js` - cart, wishlist, and shared OpenCart theme logic.
- `html/` - static HTML design source and legacy layout references.
- `image/` - project media assets.
- `system/` - OpenCart system files and libraries.
- `storage/` and `system/storage/` - runtime storage, logs, cache, and modification files.
- `tools/` - small project maintenance and seed scripts.
- `shokeruParser/` - product/category parsing and import utilities.

## Important Storefront Routes

- `product/shop` - main catalog page.
- `product/category` - category catalog pages.
- `product/latest` - latest products page.
- `product/special` - sale/promotions page.
- `product/product` - product detail page.
- `information/contact` - contact page.
- `information/payment_delivery` - payment and delivery page.

Several catalog routes share `catalog/view/theme/shokeru/template/product/shop.twig`
for a consistent product listing layout.

## Custom Features

- Custom Shokeru storefront theme.
- Responsive catalog and product cards.
- Recently viewed / recommended product sliders.
- Swiper-powered hero, product, product-gallery, and content sliders.
- Wishlist and cart state synchronization in product cards.
- Custom checkout layout and user popup.
- Custom modules for banners, sliders, safe image/content blocks, FAQ, bestseller products,
  and HTML repeater content.
- WebP image generation and image cache handling.
- Runtime CSS/JS minification toggles in OpenCart settings.
- Multilingual storefront content for Ukrainian, Russian, and English.
- Product parser and importer tooling for catalog data.

## Local Development

1. Put the project in:

   ```text
   /Applications/MAMP/htdocs/shokeru
   ```

2. Start MAMP Apache and MySQL.

3. Create or import the local database:

   ```text
   shokeru
   ```

4. Use local config overrides in `app_config.local.php` when needed.
   This file is ignored by git and is the right place for private credentials.

5. Open the local storefront:

   ```text
   http://localhost:8888/shokeru/
   ```

6. Open the local admin:

   ```text
   http://localhost:8888/shokeru/admin/
   ```

## Configuration

Shared environment settings are loaded from `app_config.php`.
Private local or hosting-specific overrides should be placed in:

```text
app_config.local.php
```

The project expects OpenCart config files to read from the shared settings file.
Keep production passwords out of commits and out of documentation.

## Cache And Generated Files

The project intentionally ignores generated runtime data:

- `image/cache/`
- `system/storage/cache/*`
- `system/storage/logs/*`
- `system/storage/session/*`
- `system/storage/modification/*`
- `.vscode/sftp.json`
- `app_config.local.php`

When OpenCart modifications are refreshed, the modification cache is rebuilt under
`system/storage/modification/`. Frontend asset minification generates files under
`image/cache/min/`.

## Useful Checks Before Commit

Run PHP syntax checks for changed PHP files:

```bash
php -l catalog/controller/product/special.php
php -l catalog/controller/common/header.php
```

Check current git state:

```bash
git status --short
```

Review the diff:

```bash
git diff
```

## Git Workflow

Typical workflow for this project:

```bash
git status --short
git add .
git commit -m "Describe the change"
git push origin main
```

If the active branch is not `main`, check it first:

```bash
git branch --show-current
```

Then push to the current branch:

```bash
git push origin HEAD
```

## Deployment Notes

- Deploy code changes through git or the configured hosting/FTP workflow.
- Do not deploy local cache or logs.
- After uploading controller/template changes, refresh OpenCart modifications if needed.
- Clear runtime caches when frontend assets, templates, or image generation logic changes.
- Product media can be large; keep generated thumbnails and cache out of git.

## Parser And Import Tools

The `shokeruParser/` directory contains custom scripts and data files used for collecting,
transforming, and importing catalog data into OpenCart.

Important files include:

- `shokeruParser/parse_categories.php`
- `shokeruParser/parse_product_urls.php`
- `shokeruParser/parse_products.php`
- `shokeruParser/tools/import_to_opencart.php`
- `shokeruParser/data/products.csv`
- `shokeruParser/data/categories.csv`

Large raw assets, backups, and parser logs are ignored by git.

## Maintenance Notes

- Keep storefront logic close to existing OpenCart conventions.
- Keep secrets in ignored local files.
- Prefer small targeted commits with clear messages.
- Before pushing, check that no generated cache, logs, or credentials are staged.
- For catalog pages, verify `/shop`, `/aktsiyi`, product pages, latest products, and category pages.

---

## Робочий опис проекту та відомі проблеми

### Що це за проект

- Кастомна тема: `catalog/view/theme/shokeru`.
- Окрема HTML-верстка як джерело дизайну: папка `html/`.
- Основні кастомні сторінки каталогу: `product/shop` (магазин/каталог), `product/latest`
  (новинки), `product/category` (категорії), `product/special` (sale/special).

### Структура, яка важлива для доробки

- Контролери каталогу:
  - `catalog/controller/product/shop.php`
  - `catalog/controller/product/latest.php`
  - `catalog/controller/product/category.php`
  - `catalog/controller/product/special.php`
- Фільтр:
  - `catalog/controller/extension/module/filter.php`
  - `catalog/view/theme/shokeru/template/extension/module/filter.twig`
- Шаблони сторінок:
  - `catalog/view/theme/shokeru/template/product/shop.twig`
  - `catalog/view/theme/shokeru/template/product/latest.twig`
  - `catalog/view/theme/shokeru/template/product/category.twig`
- JS:
  - `catalog/view/js/script.js`
  - `catalog/view/js/shop.js`
  - `catalog/view/js/profile.js`

### Поточний стан (факт після ревізії)

1. `shop` працює як основний шаблон для магазину, має підключений модуль фільтра і блок recommended.
2. `latest` кастомізований, але містить логічні помилки в маршрутах/фільтрах.
3. `category` частково кастомізований, але має критичну проблему з порядком виконання (див. нижче).
4. `special` контролер стандартний-ish, але в темі `shokeru` відсутній `product/special.twig`, тому рендер і стилізація sale нестабільні.

### Виявлені проблеми (критичні)

1. Фільтри в `filter.twig` відправляються як `filter[]`, а модель `ModelCatalogProduct::getProducts()` очікує рядок `filter` у форматі `1,2,3` (бо робить `explode(',', $data['filter_filter'])`).
2. `latest.php` формує частину сортувальних URL на `product/shop` замість `product/latest`.
3. `category.php` використовує `$results` у блоці recommended до того, як `$results` реально визначено (ризик warning/fatal і зламаний рендер).
4. У `filter.twig` є UI для ціни (`price-from`, `price-to`), але в контролерах/моделі ці параметри зараз не застосовуються до SQL.
5. У темі `shokeru` немає окремого `product/special.twig`, але є окремий route `product/special` у меню.

### Додаткові проблеми (акаунт)

1. `account/account.php` вбудовує `account/address` як повний output (`{{ address }}`), що змішує full-page контент усередині onpage секції.
2. `extension/module/account.twig` має помилки верстки:
   - typo `text_widhlist` замість `text_wishlist`,
   - невірний закриваючий тег (`</button>` для `<a>`),
   - аватар у шаблоні статичний (`img/profile.png`), не прив'язаний до даних.

### Що брати як джерело верстки

- Основні референси: `html/shop.html`, `html/new.html`, `html/search-result.html`, `html/profile.html`.
- Логіка/анімації: `html/js/shop.js`, `html/js/profile.js`, `html/js/script.js`.

### Пріоритетний план доробки (наступні кроки)

1. Узгодити формат фільтрів у всіх каталогових роутерах: один канонічний формат URL `filter=1,2,3`.
2. Виправити `latest`: сортування/пагінація мають лишатись у `product/latest`, привести `filter_filter` до коректного формату для моделі.
3. Виправити `category`: прибрати використання `$results` до ініціалізації, стабілізувати блок recommended.
4. Доробити `special`: або створити `product/special.twig` в стилі `shokeru`, або явно рендерити `shop.twig` з коректними даними.
5. Підключити реальний price-filter в SQL (`from/to`) або прибрати ці поля з UI до реалізації.

### Нотатка для себе (перед кожною правкою)

- Спочатку змінювати в git-копії, потім синхронізувати у `/Applications/MAMP/htdocs/shokeru`.
- Після змін обов'язково перевіряти:
  - `php -l` для змінених контролерів,
  - ручний smoke-test сторінок: `/index.php?route=product/shop`, `/index.php?route=product/latest`,
    `/index.php?route=product/special`, `/index.php?route=product/category&path=...`

---

## План анімування сайту (без перевантаження)

> Статус: **опис, без змін у коді.** Мета — додати легкі, сучасні анімації, не вбиваючи продуктивність.

### Бібліотека

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

### Що анімувати (по секціях `html/index.html`)

| Секція | Анімація | Тип |
|---|---|---|
| `.hero` | плавна поява заголовка/CTA при завантаженні (fade + translateY 20px) | on-load, JS |
| `.productSlider` | картки з'являються каскадом (stagger) при скролі | inView, JS |
| `.about` (`__block`/`__content`) | fade-in зліва/справа при попаданні у в'юпорт | inView, JS |
| `.safemode` | поява блоку + легкий зум зображення | inView, JS |
| `.feedback` | плавна поява форми | inView, JS |
| Картки товарів (всюди) | hover: підйом + тінь | **чистий CSS** |
| Кнопки / `.shop__more` | hover/active мікро-анімації | **чистий CSS** |
| Header при скролі | компактний/тінь | CSS клас + малий JS |
| Попапи (`.userPopup`, `.busket`) | fade + scale при відкритті | CSS transition |

### Принципи «без перевантаження»

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

### Порядок реалізації (коли дамо «go»)

1. CSS-мікроанімації (hover/попапи) — `html/css/style.css` → синк у `catalog/view/css/style.css`. Без бібліотеки.
2. Підключити Motion One через CDN (1 контролер або глобально у `footer.twig`).
3. Додати `inView()`-анімації появи у новий файл `html/js/animations.js` → синк у `catalog/view/js/`.
4. Прокинути `prefers-reduced-motion`.
5. Перевірити Lighthouse / DevTools Performance (немає layout shift, CLS ≈ 0).

### Джерело правди

Спочатку `html/` (статичний макет), потім синхронізація у `catalog/view/` (CSS/JS) — згідно конвенцій проекту.

---

## Аналіз shokeru vs paralizator.com.ua — SEO, UX, перформанс, анімації (15-годинний план)

> Мета: довести shokeru (OpenCart 3) до стану «готовий продукт під ключ».
> Бюджет робіт: **~15 годин**. Нижче — глибоке порівняння, gap-аналіз і пріоритезований план з оцінкою часу.
>
> ⚠️ Конкурента в реальному часі спарсити автоматично не вдалось (сервер віддає `429 Too Many Requests` — захист від ботів). Аналіз конкурента побудовано на: (1) видачі пошуку по його сторінках, (2) твоєму повному парсі, (3) типовій структурі лідера ніші. Наш сайт перевірено наживо (`localhost:8888/shokeru`).

### 1. Резюме (TL;DR)

| Напрям | shokeru (зараз) | paralizator | Пріоритет |
|---|---|---|---|
| ЧПУ / SEO-URL | ❌ `index.php?route=...` | ✅ `/elektroshoker-osa-704` | 🔴 P0 |
| `<title>` / `description` | ⚠️ тонкі, без формул | ✅ оптимізовані «≡ … \| Купити … ціна» | 🔴 P0 |
| hreflang (3 мови!) | ❌ немає | — | 🔴 P0 |
| Structured data (JSON-LD) | ❌ немає | ✅ Product/Breadcrumb/Org | 🔴 P0 |
| Open Graph / Twitter | ❌ немає | ✅ є | 🟠 P1 |
| SEO-текст у категоріях/головній | ❌ немає | ✅ розгорнуті блоки | 🟠 P1 |
| Відгуки / рейтинг | ⚠️ движок є, не задіяно | ✅ окремі сторінки відгуків | 🟠 P1 |
| FAQ | ❌ | ✅ | 🟡 P2 |
| Сторінки-міста (Харків/Київ…) | ❌ | ✅ локальне SEO | 🟡 P2 |
| Trust-блок (гарантія/оплата/доставка) | ⚠️ частково | ✅ виражено | 🟠 P1 |
| Швидке замовлення / купити в 1 клік | ❌ | ✅ | 🟠 P1 |
| Перформанс | ⚠️ 7 CSS, JS без defer | — | 🟡 P2 |
| Анімації | ⚠️ старт (2 блоки) | мінімальні | 🟡 P2 |

**Головний висновок:** найбільший відрив — у **технічному SEO** (ЧПУ, мета, hreflang, мікророзмітка). Це 60% цінності й має йти першим. UX/конверсійні фічі — другим. Анімації/перф — фінальна полірування.

### 2. SEO-блок — детально

#### 2.1 ЧПУ (SEO-friendly URLs) — 🔴 критично
- **Зараз:** посилання у вигляді `http://localhost:8888/shokeru/index.php?route=product/product&product_id=50`. ЧПУ вимкнено / не заповнено `seo_url`.
- **Конкурент:** `/elektroshoker-osa-704`, `/elektroshokery-dlya-samooborony/`.
- **Що зробити:**
  1. Увімкнути `Use SEO URLs` (System → Settings → Server) + перевірити `.htaccess` (`RewriteEngine On`).
  2. Заповнити `seo_url` (keyword) для всіх товарів, категорій, інформаційних сторінок.
  3. 301-редіректи зі старих `index.php?route=` на ЧПУ (щоб не втратити вагу/уникнути дублів).
- **Оцінка: 1.5 год**

#### 2.2 Title / Meta description — 🔴
- **Зараз:** home `<title>` = «Только оригинальные электрошокеры», без `description`; товар = лише назва, без бренду/гео/УТП.
- **Конкурент:** формула «≡ {Назва} \| Купити за кращою ціною в Україні \| Paralizator».
- **Що зробити:**
  - Шаблони мета: Home, Category, Product, Information — з підстановкою назви + гео («Україна/Київ») + УТП + бренд.
  - Заповнити `meta_description` дефолтами для топ-сторінок (унікальні, 140–160 символів, із CTA).
- **Оцінка: 1.5 год**

#### 2.3 hreflang — 🔴 (бо 3 мови: uk-ua, ru-ru, en-gb)
- **Зараз:** немає `<link rel="alternate" hreflang>` — пошуковик не розуміє мовні версії → канібалізація/дублі.
- **Що зробити:** у `header.twig` вивести `hreflang` для кожної мовної версії поточного URL + `x-default`.
- **Оцінка: 1 год**

#### 2.4 Structured data (JSON-LD) — 🔴
- **Зараз:** немає мікророзмітки (тільки canonical).
- **Що зробити:**
  - `Organization` + `WebSite` (з `SearchAction`) — глобально.
  - `Product` + `Offer` + `AggregateRating` — на картці товару (rich snippets з ціною/наявністю/зірками).
  - `BreadcrumbList` — на категоріях/товарах.
  - `FAQPage` — якщо додамо FAQ.
- **Оцінка: 2 год**

#### 2.5 Open Graph / Twitter Card — 🟠
- **Зараз:** немає → погані прев'ю у соцмережах/месенджерах.
- **Що зробити:** `og:title/description/image/type/url` + `twitter:card` у `header.twig` (з даних сторінки/товару).
- **Оцінка: 0.5 год**

#### 2.6 SEO-текст у категоріях і на головній — 🟠
- **Зараз:** немає текстових SEO-блоків.
- **Конкурент:** розгорнуті описи внизу категорій/головної (ключі, перелінковка).
- **Що зробити:** керований блок (через існуючий модуль `html`/`html_repeater`) з можливістю «розгорнути ще». Унікальні тексти на топ-категорії.
- **Оцінка: 1 год** (верстка+вивід; копірайт — окремо клієнтом/контент-менеджером).

#### 2.7 robots.txt + XML sitemap — 🟢 (майже ок)
- **Зараз:** `robots.txt` стандартний OC (відсікає `?sort=,?limit=,?page=` — добре). Є фід `extension/feed/google_sitemap`.
- **Що зробити:** увімкнути google_sitemap, додати `Sitemap:` у robots.txt, віддати у Search Console.
- **Оцінка: 0.5 год**

**SEO разом: ~8 год**

### 3. UX / конверсія — порівняння

#### 3.1 Відгуки та рейтинг — 🟠
- **Зараз:** движок відгуків OpenCart є, але не виведено/не оформлено; зірок у каталозі нема.
- **Конкурент:** окремі сторінки відгуків (`/elektroshoker-otzyvy/`), рейтинг у картці — соц-доказ + `AggregateRating` для зірок у видачі.
- **Що зробити:** активувати відгуки, вивести зірки в картці й у списку, форма відгуку.
- **Оцінка: 1 год**

#### 3.2 FAQ-акордеон — 🟡
- **Конкурент:** FAQ під товаром/категорією (+`FAQPage` schema).
- **Що зробити:** легкий акордеон (CSS/JS), керований контент.
- **Оцінка: 1 год**

#### 3.3 Trust-блок — 🟠
- **Зараз:** частково (є переваги/benefits).
- **Що зробити:** виражений ряд: гарантія, офіційний імпорт, оплата (карта/накладений), доставка (Нова Пошта), повернення. Іконки + короткий текст біля кнопки купити.
- **Оцінка: 0.5 год**

#### 3.4 Купити в 1 клік / зворотний дзвінок — 🟠
- **Зараз:** є форма feedback, але немає швидкого замовлення з картки.
- **Конкурент:** швидке замовлення + callback.
- **Що зробити:** міні-форма «Купити в 1 клік» (ім'я+телефон) на картці → лист/замовлення; кнопка «передзвоніть мені».
- **Оцінка: 1.5 год**

**UX разом: ~4 год**

### 4. Перформанс

- **Зараз на головній:** 7 CSS-файлів, JS без `defer`, Swiper із CDN, шрифт Montserrat весь діапазон ваг, profile.js вантажиться навіть на головній.
- **Що зробити:**
  - `defer` на несинхронні скрипти; винести Swiper лише туди, де є слайдер.
  - Об'єднати/мініфікувати CSS, `font-display: swap`, підвантажувати лише потрібні ваги шрифту.
  - `loading="lazy"` на зображеннях нижче згину, ширина/висота для CLS.
  - Кеш-заголовки для статики.
- **Оцінка: 1 год** (ціль: Lighthouse mobile 85+→ покращення; без важкого рефакторингу).

### 5. Анімації (продовження вже початого)

Вже зроблено: легкий fade-up на `.productSlider` + `.safemode` (нативний IntersectionObserver, окремий `animations.css`, fallback + `prefers-reduced-motion`).

- **Що додати (без перевантаження):**
  - Поширити fade-up на решту блоків головної (`.about`, `.feedback`, hero — поява на load).
  - Картки товарів: hover-підйом + тінь (чистий CSS).
  - Хедер при скролі: компактний + тінь (CSS-клас + малий JS).
  - Мікро-анімації кнопок/попапів (CSS transition).
  - Перевірка на всіх сторінках + reduced-motion.
- **Бібліотека:** для поточного рівня **не потрібна** (нативний IO найлегший). Якщо захочемо складніші ефекти — Motion One (motion.dev, ~5–18 KB). Деталі — у розділі [«План анімування сайту»](#план-анімування-сайту-без-перевантаження) вище.
- **Оцінка: 2 год**

### 6. Що НЕ входить у 15 год (наступні ітерації)

- Сторінки-міста для локального SEO (Харків/Київ/Дніпро…) — потужний хід конкурента, але це окремий блок робіт + копірайт (~4–6 год).
- Блог/статті під інформаційні запити.
- A/B та глибока CRO-оптимізація.
- Повний рефакторинг швидкості (critical CSS, CDN, WebP-конвеєр).

### 7. Пріоритезований план на 15 годин

| # | Задача | Пріоритет | Год |
|---|---|---|---|
| 1 | Увімкнути ЧПУ + заповнити seo_url + 301 | 🔴 P0 | 1.5 |
| 2 | Шаблони title/description + дефолти | 🔴 P0 | 1.5 |
| 3 | hreflang (3 мови) + x-default | 🔴 P0 | 1.0 |
| 4 | JSON-LD: Organization/Product/Breadcrumb | 🔴 P0 | 2.0 |
| 5 | Open Graph / Twitter | 🟠 P1 | 0.5 |
| 6 | robots + XML sitemap (увімкнути/віддати) | 🟢 | 0.5 |
| 7 | SEO-текст блок (категорії/головна) | 🟠 P1 | 1.0 |
| 8 | Відгуки + зірки рейтингу | 🟠 P1 | 1.0 |
| 9 | Trust-блок (гарантія/оплата/доставка) | 🟠 P1 | 0.5 |
| 10 | Купити в 1 клік + callback | 🟠 P1 | 1.5 |
| 11 | FAQ-акордеон (+FAQ schema) | 🟡 P2 | 1.0 |
| 12 | Перформанс (defer/lazy/шрифти/CSS) | 🟡 P2 | 1.0 |
| 13 | Анімації — решта блоків + полірування | 🟡 P2 | 2.0 |
| | **Разом** | | **15.0** |

### 8. Чек-лист «готовий продукт під ключ»

**SEO**
- [ ] ЧПУ працюють на всіх типах сторінок, старі URL 301-редіректять
- [ ] Унікальні title/description на топ-сторінках
- [ ] hreflang для uk/ru/en + x-default
- [ ] JSON-LD валідний (Rich Results Test): Organization, Product, Breadcrumb
- [ ] OG-прев'ю коректні (debugger FB/Telegram)
- [ ] sitemap.xml у Search Console, robots.txt з `Sitemap:`

**Контент/UX**
- [ ] SEO-тексти на головній + топ-категоріях
- [ ] Відгуки + зірки виведені
- [ ] Trust-блок біля кнопки купити
- [ ] Купити в 1 клік + callback працюють (лист/замовлення приходить)
- [ ] FAQ на ключових сторінках

**Тех/якість**
- [ ] Lighthouse mobile: Performance 80+, SEO 95+, Best Practices 95+
- [ ] Немає JS-помилок у консолі на всіх сторінках
- [ ] Анімації плавні, `prefers-reduced-motion` поважається
- [ ] Перевірено в Chrome/Safari/Firefox + мобільний
- [ ] 404/500 сторінки оформлені; форми валідуються

**Джерела (конкурент):**
[Головна](https://paralizator.com.ua/) ·
[Про нас](https://paralizator.com.ua/o-nas) ·
[Категорія самооборони](https://paralizator.com.ua/elektroshokery-dlya-samooborony/) ·
[Сторінка відгуків](https://paralizator.com.ua/elektroshoker-otzyvy/) ·
[Локальне SEO (Харків)](https://paralizator.com.ua/elektroshokery-harkov/)

---

## Shokeru vs paralizator.com.ua — оновлений аналіз (фокус: SEO) і готовність до запуску реклами

> Дата: 2026-06-29. Конкурент: https://paralizator.com.ua/ (магазин електрошокерів, ринок UA).

### TL;DR
**Технічне SEO в Shokeru СИЛЬНІШЕ за конкурента** (у нас є те, чого в нього немає: schema.org, hreflang, canonical, sitemap, breadcrumbs) — тобто пункти P0 з розділу вище на цю дату вже реалізовано.
**АЛЕ конкурент сильно випереджає по КОНТЕНТУ й ДОВІРІ/КОНВЕРСІЇ** — блог, розгорнуті тексти категорій, відгуки з рейтингами, телефони/гарантії, «купити в 1 клік», «передзвонити». Саме сюди треба інвестувати, бо це і трафік (long-tail), і продажі.

### Порівняння

| Параметр | Shokeru | paralizator.com.ua | Висновок |
|---|---|---|---|
| ЧПУ (clean URLs) | ✅ всюди | ✅ | паритет |
| schema.org (Product/Org/Breadcrumb/ItemList) | ✅ є | ❌ немає | **наша перевага** |
| hreflang + canonical | ✅ централізовано | ❌ немає | **наша перевага** |
| sitemap.xml (секції+hreflang) | ✅ | ? (не видно) | наша перевага |
| breadcrumbs (UI+schema) | ✅ | ❌ | **наша перевага** |
| Мови | uk/ru/en | ru(default)+ua | ми ширше |
| Блог / статті | ❌ немає | ✅ 4+ статті («Рейтинг… 2025») | **відставання** |
| Розгорнуті описи категорій | ⚠️ слабкі/нема | ✅ long-form під кожну | **відставання** |
| Відгуки + рейтинги на товарах | ⚠️ майже нема | ✅ «Отзывов: 45», зірки | **відставання** |
| FAQ | ❌ | ❌ | можливість обігнати |
| «Купити в 1 клік» | ❌ | ✅ | відставання (конверсія) |
| «Передзвонити вам?» (callback) | ❌ | ✅ | відставання (конверсія) |
| Use-case категорії (жіночі, поліцейські, від собак, телефони-шокери) | ⚠️ частково | ✅ багато | **відставання (long-tail SEO)** |
| Тріст-сигнали (3 телефони, адреса+мапа, гарантія 120міс, 14 днів повернення, 100% оригінал) | ⚠️ частково | ✅ сильно | відставання |
| OG/Twitter card | перевірити | ❌ | швидкий виграш для обох |

### Що покращити в Shokeru (пріоритезовано)

**🔴 Високий пріоритет — контент під пошук (де ми реально програємо)**
1. **Блог / статті** (як у конкурента «Рейтинг кращих електрошокерів 2025»). Дає величезний long-tail трафік.
   - Теми: рейтинги/підбірки, «як обрати шокер», «легальність в Україні», «шокер vs газовий балончик», огляди моделей.
   - Технічно: модуль blog (OC або кастом) + schema Article/BlogPosting + у sitemap. (У well був blog — можна підглянути архітектуру, але НЕ тягнути в google_sitemap фаталом.)
2. **Розгорнуті SEO-описи категорій** — унікальний текст 800–1500 знаків під кожною категорією (характеристики типу товару, сценарії, FAQ-вставки). Зараз у категорій тонко/порожньо → втрачаємо ранжування за категорійними запитами.
3. **Відгуки з рейтингами на товарах** (зірки + кількість). Це і соц-доказ (конверсія), і UGC-контент + `AggregateRating`/`Review` schema → rich snippets із зірками у видачі. Конкурент показує «Отзывов: 45» — ми так не вміємо.
4. **Use-case підкатегорії під long-tail**: «жіночі електрошокери», «шокер-ліхтарик», «шокер від собак», «стріляючі», «поліцейські», «міні/компактні», «шокер-телефон». Конкурент має окремі URL під кожен — це прямі ключі. Створити категорії/фільтр-лендінги + тексти.

**🟠 Середній — довіра/конверсія (впливає і на SEO-поведінкові)**
5. **«Купити в 1 клік»** — модалка з лише іменем+телефоном. Знижує бар'єр.
6. **«Передзвонити вам?» (callback)** — форма зворотного дзвінка у шапці/картці.
7. **Блок тріст-сигналів** на головній і в картці: гарантія, термін гарантії, 14 днів повернення, 100% оригінал, оплата при отриманні, Нова Пошта. (Частину вже маємо у weworks/safeImage — підсилити й винести явно.)
8. **Телефон(и) клікабельні** у шапці + графік роботи (вже є open у футері — продублювати в хедер).

**🟡 Нижчий — технічна доводка (де ми вже непогані)**
9. **FAQ-сторінка + FAQPage schema** — обидва конкуренти не мають → шанс обігнати + rich snippet.
10. **Open Graph / Twitter Card** у header.twig (og:title/description/image/type, twitter:card) — для гарних прев'ю в соцмережах/месенджерах. Швидкий виграш.
11. **Рейтинги в schema ItemList/Product** на категоріях — коли з'являться відгуки, додати aggregateRating у вже наявний Product JSON-LD.
12. **Внутрішня перелінковка**: з блогу → на категорії/товари; «схожі товари», «з цим купують».
13. **Швидкість**: lazy-load зображень (у нас вже local lazy на частині), WebP (перевірити масово), мінімізація CSS/JS.

**Що НЕ чіпати (наші переваги — зберегти):** schema.org (Org/WebSite+SearchAction/Product/ItemList/BreadcrumbList), hreflang/canonical/sitemap (тримати в порядку при додаванні блогу/категорій), breadcrumbs, AJAX-розумний пошук.

**Швидкі перемоги (1–2 дні):** OG/Twitter теги, клікабельні телефони + графік у хедер, «купити в 1 клік» + callback (модалки), каркас FAQ + FAQPage schema.

**Стратегічні (тиждень+):** блог із schema + sitemap, SEO-тексти всіх категорій, система відгуків+рейтингів із AggregateRating, use-case категорії/лендінги.

### Оцінка готовності до прод-запуску (GTM / Google Ads / Analytics)

> Дата: 2026-06-29. Стан прода: `shokeru.autochemicals.s3.monosite.com.ua`.

**Короткий вердикт:** сайт **технічно майже готовий**, але **до запуску платної реклами ще НЕ готовий повністю**. Сама вітрина працює (SSL, ЧПУ, schema, sitemap, hreflang). Аналітика/реклама **фізично не підключені**, і є 3 блокери, які треба закрити до того, як лити бюджет.

**✅ Що вже готово**
- HTTPS + HTTP/2, головна віддає 200, без `noindex`.
- ЧПУ всюди, schema.org (Org/WebSite/Product/ItemList/Breadcrumb), hreflang, canonical, sitemap.xml (вже доступний), breadcrumbs.
- **Слот для тегів аналітики є** — у `header.twig` (`{% for analytic in analytics %}`) у `<head>`. Тобто код GA4/GTM можна вставити через Адмінку → Extensions → Analytics, без правки коду.
- **GA4-подія `purchase` вже зібрана**: `catalog/controller/checkout/success.php` будує `items[] (item_id/name/price/quantity)`, `value`, `shipping`, `currency`; `common/success.twig` віддає `window.ShokeruGA4Purchase`. Це найскладніша частина ecommerce-трекінгу — і вона вже ~80% готова.
- robots.txt — **виправлено сьогодні** (були права 640 → «Access Denied»; зробив 644, тепер 200, містить Disallow для page/sort/filter і Sitemap).

**🔴 Блокери перед запуском реклами**
1. **Домен — тимчасовий.** Прод на піддомені хостингу `*.s3.monosite.com.ua`. Це майже напевно НЕ фінальний домен.
   - Лити Google Ads на такий піддомен не варто (довіра, бренд, можливі обмеження).
   - Уся SEO-розмітка (canonical/hreflang/sitemap/schema URL) вказує на цей піддомен → при переїзді ВСЕ це треба оновити + зробити 301-редіректи.
   - **Дія:** визначити фінальний домен ДО підключення Ads/Analytics.
2. **Аналітика не підключена взагалі.** На сторінках немає ні GA4 (gtag), ні GTM, ні Meta Pixel. `window.ShokeruGA4Purchase` нема кому «зловити».
3. **Згода на cookies / Consent Mode v2.** Для трафіку з ЄС і коректної роботи GA4/Ads потрібен банер згоди + Google Consent Mode v2. Без нього — втрата даних і ризики.

**🟠 Що доробити по аналітиці/рекламі (після рішення по домену)**

Рекомендація: один контейнер GTM, через нього — GA4 + Google Ads + (опц.) Meta Pixel. Простіше керувати без правок коду далі.

*Підключення GTM (2 частини):*
- **`<head>`**: вставити GTM-скрипт. Або через Адмінку → Extensions → Analytics (слот `{% for analytic in analytics %}` у `header.twig`), або хардкодом перед `</head>`.
- **`<body>` noscript**: зараз слота НЕМАЄ. Треба додати `<noscript><iframe…GTM…></noscript>` одразу після `<body …>` (у `header.twig`, рядок ~54). (Без noscript JS-користувачі трекаються, але краще додати.)

*dataLayer-події ecommerce (для GA4 + оптимізації Ads):*
- `purchase` — ✅ майже готово; лишається `dataLayer.push(window.ShokeruGA4Purchase)` на success + перевірити `transaction_id`, `value`, `currency=UAH`.
- ❌ `view_item` (картка товару), `add_to_cart` (кнопка в кошик), `begin_checkout` (старт оформлення), `view_item_list`/`select_item` (каталог). Зараз їх нема — без них Ads/GA4 не побачать вирву й не оптимізуються.

*Google Ads:* Conversion tag (purchase) + Remarketing — через GTM, тригер на `purchase` з dataLayer (value+currency). (Для товарної реклами) Merchant Center + product feed: у проєкті є `extension/feed/google_sitemap`; для Shopping потрібен окремо Google Shopping feed (перевірити/налаштувати).

*Meta Pixel (опційно):* `PageView` + `Purchase`/`AddToCart` через той самий GTM.

**🟡 Дрібні хвости (бажано до launch)**
- OG / Twitter Card теги — відсутні. Псує прев'ю в соцмережах/месенджерах.
- GTM `<body>` noscript — див. вище.
- Битий CTA: кнопка hero «В каталог» має `href=""` (нікуди не веде) — виправити перед рекламним трафіком.
- Контентні гепи з аналізу вище (блог, тексти категорій, відгуки) — не блокують запуск, але прямо впливають на якість трафіку й конверсію.

**Фінальний чеклист перед «лити рекламу»**
- [ ] Визначено фінальний домен (+ міграція SEO/301, якщо переїзд)
- [ ] GTM встановлено (head + body noscript)
- [ ] GA4 підключено через GTM, працює realtime
- [ ] dataLayer: purchase (дотиснути) + view_item/add_to_cart/begin_checkout
- [ ] Google Ads: conversion + remarketing на purchase
- [ ] Consent Mode v2 + банер cookies
- [ ] OG/Twitter теги
- [ ] hero CTA «В каталог» полагоджено
- [ ] robots.txt 200 ✅ (зроблено) + sitemap у Search Console
- [ ] Перевірити Search Console (індексація, sitemap) і GA4 DebugView перед стартом

### GA4-події: статус + порядок дій + підготовка під усі види реклами

> Дата: 2026-06-29.

**✅ GA4 ecommerce-події — вже ПОВНІСТЮ реалізовано**

Є файл `catalog/view/js/ga4.js` (підключений у footer) + усі хуки. Працює через `dataLayer`, тож одразу підхопиться, щойно під'єднаєш GTM/GA4. Реалізовано:

| Подія | Де тригериться | Статус |
|---|---|---|
| `view_item` | картка товару (`.prod`) | ✅ |
| `view_item_list` | каталог/слайдери | ✅ |
| `select_item` | клік по товару в списку | ✅ |
| `add_to_cart` | `common.js` → `ShokeruGA4.trackAddToCartFromElement` | ✅ |
| `remove_from_cart` | видалення з кошика | ✅ |
| `begin_checkout` | checkout (`window.ShokeruGA4Checkout`) | ✅ |
| `add_shipping_info` | вибір доставки | ✅ |
| `add_payment_info` | вибір оплати | ✅ |
| `purchase` | success (`window.ShokeruGA4Purchase`, з дедуплікацією через sessionStorage) | ✅ |

Додано `window.dataLayer` ініт у `<head>` (щоб точно існував до GTM) і прибрано випадковий дубль push-у purchase. **Більше по подіях робити нічого не треба** — лише підключити контейнер.

**📋 Порядок подальших дій (роадмеп запуску реклами)**

- **Крок 0 — Домен (обов'язково перше).** Визначити фінальний домен. Якщо переїзд із `*.s3.monosite.com.ua`: перенести, оновити `config.php`/`app_config.php`, canonical/hreflang/sitemap/schema, налаштувати 301 зі старого. Без цього далі рекламу не запускаємо.
- **Крок 1 — GTM.** Створити контейнер `GTM-XXXX`. Вставити head-частину (через Адмінку → Extensions → Analytics або хардкодом перед `</head>`) + додати `<body>`-noscript одразу після `<body>` у `header.twig` (рядок ~54). → дай ID, вставлю.
- **Крок 2 — GA4.** Створити ресурс GA4 (`G-XXXX`). У GTM: тег «GA4 Configuration» (на всі сторінки) + тег «GA4 Event» з тригерами на наші dataLayer-події (view_item, add_to_cart, begin_checkout, purchase, …). Передавати `ecommerce` об'єкт.
- **Крок 3 — Перевірка.** GA4 DebugView + GTM Preview: пройти шлях каталог→картка→кошик→checkout→оплата→success і переконатися, що всі 9 подій летять із правильними `value`/`currency=UAH`/`items`.
- **Крок 4 — Consent Mode v2.** Банер згоди cookies + Google Consent Mode v2 (default denied → update on consent). Інакше — втрата даних і ризики для ЄС-трафіку. Можна через GTM (CMP-шаблон).
- **Крок 5 — Google Ads.** Зв'язати Ads ↔ GA4. Імпортувати конверсію `purchase` з GA4 АБО окремий Ads conversion tag у GTM (value+currency, transaction_id для дедуплікації). Додати Remarketing/Google Ads tag.
- **Крок 6 — Merchant Center + товарний фід** (для Shopping/PMax) — див. нижче.
- **Крок 7 — Search Console** — підтвердити домен, подати sitemap, перевірити покриття/помилки.

**🎯 Підготовка під усі види реклами — що готово / що треба**

*1) Google Ads — Пошук (Search)*
- Потрібно: GTM+GA4+conversion (Кроки 1–5). Цільові сторінки — категорії/картки (вже ЧПУ + швидкі).
- Доробити: посадкові під ключі (use-case категорії з текстами), мінус-слова, розширення (ціни/телефон/sitelinks).
- Готовність: **середня** (треба теги + лендінги).

*2) Google Shopping / Performance Max (найважливіше для товарки)*
- Потрібно: Google Merchant Center + товарний фід (id, title, description, link, image_link, price, availability, brand, gtin/mpn, condition).
- Стан: у проєкті є `extension/feed/google_sitemap` (це sitemap, НЕ Shopping-фід). Окремого Google Shopping product feed немає → треба зробити (OC має `extension/feed/google_base`/Google Shopping, або кастомний фід).
- Готовність: **низька** (немає фіда — це головний таск під Shopping/PMax).

*3) Display / Remarketing (Google)*
- Потрібно: Google Ads remarketing tag + аудиторії з GA4-подій (переглянули товар, додали в кошик, почали checkout, не купили).
- Стан: усі потрібні події вже є (add_to_cart/begin_checkout/purchase) → аудиторії збиратимуться одразу після підключення GA4/Ads.
- Готовність: **висока** (лише підключити креативи).

*4) Meta (Facebook/Instagram)*
- Потрібно: Meta Pixel + Conversions API (опц.) + каталог Meta (той самий товарний фід, що для Merchant).
- Стан: пікселя немає. Події можна мапити з наявного dataLayer через GTM (PageView, ViewContent, AddToCart, InitiateCheckout, Purchase).
- Готовність: **середня** (підключити піксель через GTM + фід для каталогу).

*5) TikTok / інші (опційно)*
- TikTok Pixel + Events API через GTM, події з того ж dataLayer. Фід — той самий.

**Підсумок пріоритетів під рекламу:** 1) домен (блокер усього) → 2) GTM + GA4 + Consent (відкриває Search/Display/Remarketing/Meta) → 3) товарний фід + Merchant Center (відкриває Shopping/PMax + каталог Meta) → 4) лендінги/тексти під Search → 5) OG-теги, фікс hero-CTA.

---

## Google Ads Plan (кампанії, ключові слова, оголошення)

Purpose: ready-to-use ad themes, search keywords, responsive search ad headlines, and descriptions for Shokeru campaigns.

Recommended Google Ads format:
- Responsive Search Ads
- Headlines: up to 30 characters
- Descriptions: up to 90 characters
- Use Ukrainian as primary language; create Russian duplicates only if campaign targeting needs it.

> Див. також розділ нижче [«Google / Meta Ads — чи пройде реклама електрошокерів?»](#google--meta-ads--чи-пройде-реклама-електрошокерів) — товарна реклама шокерів, найімовірніше, буде відхилена модерацією; кампанії нижче варто орієнтувати на бренд/автохімію/інформаційні посадкові, а не на картки товарів-шокерів.

### Campaign Themes

**1. Brand Search**

Goal: capture people already searching for Shokeru.

Landing page: `https://shokeru.autochemicals.s3.monosite.com.ua/`

Keywords: shokeru, шокеру, shokeru магазин, shokeru автохімія, shokeru електрошокери, shokeru купити

Headlines: Shokeru, Shokeru Україна, Магазин Shokeru, Купити в Shokeru, Shokeru офіційно, Автотовари Shokeru, Акції Shokeru, Доставка по Україні, Оплата при отриманні, Товари для авто, Надійний магазин, Замовляйте онлайн

Descriptions:
- Купуйте товари Shokeru онлайн. Зручне замовлення та доставка по Україні.
- Актуальні товари, акції та швидке оформлення замовлення на сайті Shokeru.
- Оберіть потрібний товар, додайте в кошик і оформіть доставку за кілька хвилин.
- Перевірені товари для авто та особистого використання в одному магазині.

**2. Electroshock Products**

Goal: advertise electroshock products and accessories.

Landing pages: `/shop`, `/aktsiyi`

Keywords: електрошокер купити, електрошокер ціна, електрошокер україна, шокер купити, електрошокер з доставкою, електрошокер для захисту, потужний електрошокер, електрошокер ліхтарик, шокер ліхтарик

Headlines: Електрошокери, Купити електрошокер, Електрошокер онлайн, Шокери з доставкою, Захист щодня, Шокер-ліхтарик, Потужні моделі, Акції на шокери, Доставка Україною, Замовити сьогодні, Товари в наявності, Перевірені моделі, Зручна оплата, Захист для себе, Оберіть модель

Descriptions:
- Електрошокери для особистого захисту. Обирайте модель і замовляйте онлайн.
- Шокери та моделі з ліхтариком у каталозі Shokeru. Доставка по Україні.
- Порівняйте характеристики, ціну та наявність. Оформлення замовлення онлайн.
- Перегляньте актуальні акції на електрошокери та товари для захисту.

**3. Promotions And Discounts**

Goal: drive traffic to sale products.

Landing page: `/aktsiyi`

Keywords: акції електрошокери, знижки на шокери, електрошокер акція, шокер зі знижкою, товари для авто акції, shokeru акції

Headlines: Акції Shokeru, Знижки на товари, Шокери зі знижкою, Вигідні пропозиції, Акційні моделі, Купуйте вигідно, Товари по акції, Обмежені пропозиції, Перевірте знижки, Замовляйте онлайн, Доставка по Україні, Оновлені акції

Descriptions:
- Перегляньте актуальні акції Shokeru та замовляйте товари зі знижкою.
- Акційні електрошокери та корисні товари. Кількість пропозицій обмежена.
- Знайдіть вигідну модель, додайте в кошик і оформіть доставку онлайн.
- Оновлюємо акційні товари. Перевіряйте сторінку знижок перед покупкою.

**4. Auto Chemicals And Car Care**

Goal: attract users searching for car-care products and automotive chemicals.

Landing pages: `/shop`, relevant category pages

Keywords: автохімія купити, автохімія україна, догляд за авто, товари для авто, автохімія онлайн, автомобільна хімія, засоби для авто, автоаксесуари купити

Headlines: Автохімія онлайн, Товари для авто, Догляд за авто, Автохімія Shokeru, Засоби для авто, Купити автохімію, Для чистого авто, Каталог автотоварів, Замовити онлайн, Доставка Україною, Актуальні ціни, Товари в наявності

Descriptions:
- Автохімія та товари для догляду за автомобілем. Обирайте в каталозі Shokeru.
- Засоби для авто з доставкою по Україні. Зручне замовлення онлайн.
- Перегляньте каталог автотоварів, порівняйте ціни та оформіть покупку.
- Товари для догляду, очищення й захисту авто в одному онлайн-магазині.

**5. Remarketing**

Goal: return users who viewed products but did not purchase.

Audiences: product viewers, cart abandoners, users who visited `/aktsiyi`, users who visited `/shop`

Headlines: Ви дивились товар, Поверніться в Shokeru, Товар ще доступний, Завершіть покупку, Акції ще діють, Оберіть свій товар, Замовлення онлайн, Доставка Україною, Не втрачайте знижку, Перевірте кошик

Descriptions:
- Ви переглядали товари Shokeru. Поверніться та завершіть замовлення онлайн.
- Обрані товари можуть бути ще в наявності. Перевірте кошик і оформіть доставку.
- Акційні пропозиції оновлюються. Поверніться, щоб не пропустити вигідну ціну.
- Порівняйте моделі ще раз і замовляйте з доставкою по Україні.

### Sitelink Extensions

- Каталог: `/shop`
- Акції: `/aktsiyi`
- Новинки: `/novynky`
- Доставка і оплата: `/payment-and-delivery`
- Контакти: `/contact-us`
- Карта сайту: `/index.php?route=information/sitemap`

### Callout Extensions

Доставка по Україні, Оплата при отриманні, Актуальні акції, Зручне замовлення, Товари в наявності, Онлайн-каталог, Швидке оформлення, Перевірені моделі

### Structured Snippets

Header: Категорії

Values: Електрошокери, Автохімія, Товари для авто, Акційні товари, Новинки, Аксесуари

### Negative Keywords

безкоштовно, скачати, схема, ремонт своїми руками, бу, olx, інструкція pdf, відгуки без купівлі, закон, кримінал, саморобний, відео

### Landing Page Priorities

1. Brand and broad traffic: home page.
2. Electroshock searches: `/shop` or the relevant category.
3. Discount searches: `/aktsiyi`.
4. Returning visitors: product page or cart if remarketing feed is available.
5. Informational trust traffic: payment/delivery and contact pages as sitelinks.

---

## Нотатки / TODO

По задачам:
- Врмя с 9 до 22 без вихідних
- Хиті дашь мне
- Стандарт/платинум - в каталог все
- Кнопки в каталог
- Напишіть нам - в ланши загнать
- Картку убрать - если нет geo задаоно не показать
- https://shokeru.autochemicals.s3.monosite.com.ua/kontakty - правая колонрка в рядок
- Авторизація по емейлу 50$
- Доопрацювання по

## Лінкбілдинг для shokeru.in.ua — де брати посилання

> **Статус:** аналітика ринку з мого досвіду, **без веб-перевірки актуальних цін**.
> Тарифи й умови площадок міняються — перед оплатою звіряй ціни на сайті біржі.

### Головне попередження (прочитати до того, як платити)

**Купівля посилань, що передають вагу, прямо порушує спам-політику Google** (розділ *Link Spam / Схеми посилань*). Ризики:
- ручні санкції або алгоритмічне знецінення (SpamBrain «гасить» вагу),
- гроші витрачені, ефекту нуль,
- у важких випадках — просідання всього домену.

Це **не означає «не робити лінкбілдинг»**. Це означає: пріоритет — посилання, які **виглядають і є природними** (реальні медіа з трафіком, каталоги, PR), і **уникати** відверто продажних мереж (сітки сайтів, оренда посилань, «1000 беклінків за $20»).

**🔴 Специфіка ніші (важливо!)**

Електрошокери — **чутлива, «зброярно-суміжна» тематика**. Наслідки:
- багато великих медіа та бірж **відмовлять** у розміщенні,
- Google Ads / Meta Ads цю категорію **обмежують** — тож органіка й посилання для вас цінніші, ніж для звичайного е-комерсу,
- майданчики, що погодяться, часто самі «сірі» → **ретельніше перевіряй якість**, інакше зашкодиш собі.

### 1. Що робити ПЕРШИМ (безкоштовно / безпечно, нульовий ризик)

Це дає базу довіри домену. Без цього платні посилання — гроші на вітер.

| Джерело | Що дає | Пріоритет |
|---|---|---|
| **Google Business Profile** | локальні сигнали, карти, відгуки | 🔥 обов'язково |
| **Прайс-агрегатори**: Hotline, Price.ua, Nadavi | трафік + посилання + продажі | 🔥 обов'язково |
| **Маркетплейси**: Prom.ua, Rozetka (перевір, чи проходить категорія) | трафік + бренд-сигнали | 🔥 |
| **Каталоги укр. компаній**: Ua-region, Yellow Pages UA, Zakupki-каталоги | базові nofollow/dofollow | ✅ |
| **YouTube-канал** (у вас він уже є — `shokstorecomua`) | посилання з описів + брендові запити | ✅ вже є, дотиснути |
| **Соцмережі** (FB, Instagram, Telegram) | брендові сигнали, не вага | ✅ |
| **Свій блог** (уже зроблено, 12 статей) | внутрішня перелінковка + магніт для природних посилань | ✅ вже є |
| **Відгуки/Q&A**: форуми про самозахист, авто-, туристичні спільноти | природні згадки | ✅ обережно, без спаму |

### 2. Платні посилання — градація ризику

**🟢 Умовно безпечно — гостьові статті на РЕАЛЬНИХ медіа**

Найкращий баланс «ефект / ризик» для вашої ніші. Купуєш розміщення статті з посиланням у контексті.

| Платформа | Що це | Нюанси для вас |
|---|---|---|
| **Collaborator.pro** | найбільша UA/PL біржа гостьових постів і медіа | 👍 основний варіант. Багато укр. сайтів, є фільтри по трафіку/тематиці. Перевіряй, чи бере площадка вашу тематику |
| **PRPosting** | UA-біржа статей у медіа | 👍 альтернатива Collaborator, часто дешевше |
| **Miralinks** | RU-орієнтована біржа статей | ⚠️ багато RU-площадок — для укр. проєкту зараз недоречно |
| **Прямі домовленості** з тематичними блогами/медіа | найдорожче, але найякісніше | 👍 для 3–5 «якірних» посилань на рік |

**Скільки коштує (орієнтир, звіряй!):** гостьовий пост на нормальному укр. сайті — приблизно від **$20–40** (слабкий сайт) до **$150–400+** (сильне медіа з трафіком). Дешевше $15 — майже завжди сміття.

**🟡 Сіра зона — крауд-маркетинг**

Посилання/згадки на форумах, у коментарях, Q&A-сервісах. Працює як розбавлення анкор-профілю (щоб не було 100% комерційних анкорів). Виконавці: фрілансери на Freelancehunt / Kwork. ⚠️ Тільки «людські» повідомлення в тему. Масовий спам = шкода.

**🔴 Не робити (високий ризик):** Sape, Serpzilla та подібна «оренда посилань» зі сіток сайтів; пакети «1000 беклінків за $20» на Kwork/Fiverr (PBN/спам-прогони); PBN-сітки; наскрізні посилання в футері/сайдбарі десятків сайтів.

### 3. Чек-лист перевірки площадки (перед оплатою)

Не орієнтуйся лише на DR/DA — їх накручують. Перевіряй:

- [ ] Реальний органічний трафік (Ahrefs / Serpstat / SimilarWeb). Немає трафіку — немає сенсу.
- [ ] Трафік з України (не Індія/Бангладеш).
- [ ] Тематична дотичність: самозахист, безпека, авто, туризм, товари для дому, чоловічі медіа, лайфстайл. Кулінарний блог з посиланням на шокери = очевидна купівля.
- [ ] Сайт живий: свіжі публікації, а не «стіна» з 200 рекламних статей поспіль.
- [ ] Скільки вихідних посилань у статтях. Якщо в кожній статті 5 посилань на казино/позики — тікай.
- [ ] Сторінка в індексі Google (`site:домен/сторінка`).
- [ ] Посилання dofollow, у тілі статті (не у футері/авторському блоці).
- [ ] Стаття лишається назавжди (не оренда на місяць).

### 4. Анкори (найчастіша причина фільтра)

Не став усюди «купити електрошокер». Пропорція приблизно така:

| Тип анкора | Приклад | Частка |
|---|---|---|
| **Брендовий** | shokeru, Shokeru.in.ua | ~40% |
| **Голий URL** | https://shokeru.in.ua | ~20% |
| **Загальний** | тут, на сайті, детальніше | ~15% |
| **Розбавлений/LSI** | засоби самозахисту, оригінальні шокери WeiShi | ~20% |
| **Точний комерційний** | купити електрошокер | **≤5%** |

### 5. Куди саме ставити посилання (пріоритет сторінок)

1. Головна — брендові анкори.
2. Категорії-локомотиви: класичні, ліхтарики, дубинки, жіночі.
3. Статті блогу (їх легше «продати» майданчику як корисний контент, і вони самі притягують природні посилання): «Як вибрати електрошокер», «Чи законні електрошокери в Україні», «Як відрізнити оригінал WeiShi від підробки».
4. Товари-хіти — в останню чергу (їх краще качати перелінковкою зсередини).

### 6. Реалістичний план (перші 3 місяці)

| Місяць | Дії | Орієнтовний бюджет |
|---|---|---|
| **1** | Уся «база» з розділу 1 (GBP, агрегатори, каталоги, соцмережі). Платних посилань — **нуль**. | $0 |
| **2** | 2–3 гостьові статті на дотичних укр. сайтах з реальним трафіком (Collaborator / PRPosting). Анкори — брендові + голі URL. | ~$100–250 |
| **3** | +2–3 гостьові статті, + крауд (10–20 природних згадок на форумах). Почати міряти динаміку. | ~$150–300 |

**Темп:** 2–4 якісні посилання на місяць — нормально й безпечно. **Не робити:** 50 посилань за тиждень на молодий домен — це червоний прапорець.

**Що міряти:** позиції по цільових запитах, органічний трафік (GSC), кількість посилальних доменів (не посилань!), брендові запити.

### 7. Підсумок — з чого почати саме вам

1. ✅ Закрити безкоштовну базу (розділ 1) — це дасть більше, ніж перші $300 на посилання.
2. ✅ Дотиснути YouTube-канал: посилання в описах усіх 60 відео → на картки товарів (у вас відео вже прив'язані до товарів).
3. ✅ Далі — **тільки гостьові статті** через **Collaborator / PRPosting**, по чек-листу з розділу 3.
4. ❌ Обходити стороною «дешеві прогони», Sape-подібну оренду і PBN.

> **Порада:** у цій ніші довіра до бренду важить більше, ніж кількість посилань. Відгуки, YouTube, реальні клієнти й контент дадуть стабільніший результат, ніж закупівля.

## Google / Meta Ads — чи пройде реклама електрошокерів?

> Оцінка з практики й політики Google/Meta, **без live-перевірки** сьогоднішньої редакції правил.
> Перед стартом звір актуальну версію Google Ads Policy (розділ *Dangerous products or services → Weapons*).

**Коротка відповідь: майже напевно НІ** — не для самих товарів.

Електрошокери в Google Ads підпадають під політику «Небезпечні продукти» → зброя (electroshock weapons / stun guns трактуються як зброя, поряд з ножами, перцевими балончиками, вогнепальною). Це глобальне правило, не залежить від країни.

- ❌ Search / Shopping / Performance Max на картки товарів — відхиляє модерація (disapproved).
- ❌ Навіть оголошення «про доставку/блог», якщо посадкова веде на магазин зброї — модерація дивиться і на сайт, ризик відмови високий.
- ❌ Meta Ads (Facebook / Instagram) — те саме, ще жорсткіше.

**Що працює замість платної реклами**

Саме тому органіка для цієї ніші цінніша, ніж для звичайного е-комерсу — платний трафік по товарах фактично закритий.

1. SEO — блог, категорії, structured data, sitemap (уже впроваджено).
2. Прайс-агрегатори: Hotline, Price.ua, Nadavi — правила лояльніші за Google Ads + прямі продажі.
3. Маркетплейси: Prom.ua (Rozetka — перевір, чи проходить категорія).
4. YouTube / соцмережі — органічно (не платна реклама).
5. Гостьові статті (Collaborator / PRPosting) — див. розділ вище.

**Нюанс (на свій ризик):** іноді вдається протягнути кампанію на бренд (запити «shokeru», «shokstore») або на інформаційні статті блогу з посадковою не на товар. Але акаунт під ризиком блокування, якщо система «побачить» продаж зброї на сайті — ганяти основний бізнес-акаунт на цьому не варто.
</content>
