# Shokeru (OpenCart 3) — робочий опис проекту

## Робочий шлях
- Основний: `/Applications/MAMP/htdocs/shokeru`

## Що це за проект
- Інтернет-магазин на OpenCart 3.
- Кастомна тема: `catalog/view/theme/shokeru`.
- Окрема HTML-верстка як джерело дизайну: папка `html/`.
- Основні кастомні сторінки каталогу:
  - `product/shop` (магазин/каталог),
  - `product/latest` (новинки),
  - `product/category` (категорії),
  - `product/special` (sale/special).

## Структура, яка важлива для доробки
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

## Поточний стан (факт після ревізії)
1. `shop` працює як основний шаблон для магазину, має підключений модуль фільтра і блок recommended.
2. `latest` кастомізований, але містить логічні помилки в маршрутах/фільтрах.
3. `category` частково кастомізований, але має критичну проблему з порядком виконання (див. нижче).
4. `special` контролер стандартний-ish, але в темі `shokeru` відсутній `product/special.twig`, тому рендер і стилізація sale нестабільні.

## Виявлені проблеми (критичні)
1. Фільтри в `filter.twig` відправляються як `filter[]`, а модель `ModelCatalogProduct::getProducts()` очікує рядок `filter` у форматі `1,2,3` (бо робить `explode(',', $data['filter_filter'])`).
2. `latest.php` формує частину сортувальних URL на `product/shop` замість `product/latest`.
3. `category.php` використовує `$results` у блоці recommended до того, як `$results` реально визначено (ризик warning/fatal і зламаний рендер).
4. У `filter.twig` є UI для ціни (`price-from`, `price-to`), але в контролерах/моделі ці параметри зараз не застосовуються до SQL.
5. У темі `shokeru` немає окремого `product/special.twig`, але є окремий route `product/special` у меню.

## Додаткові проблеми (акаунт)
1. `account/account.php` вбудовує `account/address` як повний output (`{{ address }}`), що змішує full-page контент усередині onpage секції.
2. `extension/module/account.twig` має помилки верстки:
   - typo `text_widhlist` замість `text_wishlist`,
   - невірний закриваючий тег (`</button>` для `<a>`),
   - аватар у шаблоні статичний (`img/profile.png`), не прив’язаний до даних.

## Нюанс по файлу з IDE
- У вкладках IDE є `catalog/controller/extension/module/page_banner.php`, але у поточному дереві такого файлу немає.
- Це або старий tab, або файл був видалений/не доданий у цей стан проекту.

## Що брати як джерело верстки
- Основні референси:
  - `html/shop.html`
  - `html/new.html`
  - `html/search-result.html`
  - `html/profile.html`
- Логіка/анімації:
  - `html/js/shop.js`
  - `html/js/profile.js`
  - `html/js/script.js`

## Пріоритетний план доробки (наступні кроки)
1. Узгодити формат фільтрів у всіх каталогових роутерах:
   - один канонічний формат URL: `filter=1,2,3`.
2. Виправити `latest`:
   - сортування/пагінація мають лишатись у `product/latest`,
   - привести `filter_filter` до коректного формату для моделі.
3. Виправити `category`:
   - прибрати використання `$results` до ініціалізації,
   - стабілізувати блок recommended.
4. Доробити `special`:
   - або створити `product/special.twig` в стилі `shokeru`,
   - або явно рендерити `shop.twig` з коректними даними.
5. Підключити реальний price-filter в SQL (`from/to`) або прибрати ці поля з UI до реалізації.

## Нотатка для себе (перед кожною правкою)
- Спочатку змінювати в git-копії, потім синхронізувати у `/Applications/MAMP/htdocs/shokeru`.
- Після змін обов’язково перевіряти:
  - `php -l` для змінених контролерів,
  - ручний smoke-test сторінок:
    - `/index.php?route=product/shop`
    - `/index.php?route=product/latest`
    - `/index.php?route=product/special`
    - `/index.php?route=product/category&path=...`
