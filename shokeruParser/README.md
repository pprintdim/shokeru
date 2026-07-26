# Парсер paralizator.com.ua

Простий парсер магазину електрошокерів (OpenCart 3) на чистому PHP 8 + CSV.
Без фреймворків, без БД, без адмінки.

## Структура

```
config.php                # усі налаштування + XPath селектори
src/
  Logger.php              # лог у logs/parser.log + консоль
  HttpClient.php          # cURL з UA, cookie, ретраями, паузою
  Dom.php                 # обгортка DOMXPath (UTF-8)
  CsvHelper.php           # читання/запис/upsert CSV (UTF-8 BOM)
  CategoryParser.php      # збір категорій
  ProductUrlParser.php    # збір URL товарів (+ пагінація)
  ProductParser.php       # парсинг сторінки товару
  PriceHistory.php        # фіксація змін ціни
  bootstrap.php           # підключення всього + конфіг
parse_categories.php      # крок 1
parse_product_urls.php    # крок 2
parse_products.php        # крок 3
retry_failed.php          # повтор невдалих
data/                     # CSV-результати
logs/parser.log
```

## 1. Запуск

```bash
cd /Applications/MAMP/shokeruParser

php parse_categories.php      # → data/categories.csv
php parse_product_urls.php    # → data/product_urls.csv
php parse_products.php        # → data/products.csv (+ price_history.csv)
php retry_failed.php          # перепарсити те, що впало
```

Перепарсити **все** заново (ігнорувати кеш):
```bash
php parse_products.php --all
```

## 2. Антибот

Сайт під захистом adm.tools (HTTP 429 + JS-челендж). Він **пропускає Googlebot**,
тому в `config.php` за замовчуванням стоїть Googlebot User-Agent — цього достатньо.

Якщо почне блокувати:
1. Відкрий сайт у браузері, пройди перевірку.
2. DevTools → Application → Cookies → скопіюй усі cookie.
3. Встав їх у `config.php` → `'cookie' => 'ім'я=значення; ...'`.

Captcha/авторизацію парсер **не обходить**.

## 3. Як змінювати селектори (CSS/XPath)

Усі селектори — у `config.php` → масив `'selectors'`. Формат — **XPath**.
Нічого в коді `src/` чіпати не треба.

Приклад — якщо зміниться клас ціни:
```php
'price' => '//*[@itemprop="price"]/@content',   // було
'price' => '//span[@class="new-price-class"]',  // стало
```

Як підібрати новий селектор:
1. Відкрий сторінку товару → DevTools (F12) → клік по елементу.
2. Скопіюй клас/id, склади XPath: `//div[@class="..."]` або `//*[@id="..."]`.
3. Для атрибута додай `/@href`, `/@content` тощо.

Ключові селектори вже перевірені на живому сайті (h1 `prodpg-name`,
ціна `itemprop=price`, характеристики `#specific`, опис `#descript`,
фото `.thumbnails a`, breadcrumbs `.breadcrumb a`).

## 4. Оновлення CSV без дублів

Ключ дедуплікації — `product_url`.
`CsvHelper::upsert()` шукає рядок із таким же `product_url`:
- є → **оновлює** його;
- немає → **додає** новий.

Тобто повторний запуск не плодить дублі, а актуалізує дані.

## 5. Зміна ціни

При парсингу нова ціна порівнюється зі старою (з `products.csv`).
Якщо відрізняється — рядок дописується в `data/price_history.csv`
(`old_price`, `new_price`, `changed_at`). Перший збір зміною не вважається.

## 6. Відновлення після зупинки

- Кожен крок **зберігає прогрес інкрементально** (після кожної категорії / товару) —
  можна перервати `Ctrl+C` будь-коли.
- `parse_products.php` при повторному запуску **пропускає** товари зі статусом `ok`
  і продовжує з місця зупинки.
- `retry_failed.php` бере лише рядки зі `status=failed`.

## 7. Як перевірити, що працює

```bash
# скільки і яких статусів у products.csv
php -r 'require "src/CsvHelper.php";$r=CsvHelper::read("data/products.csv");
$o=$f=0;foreach($r as $x)$x["status"]=="ok"?$o++:$f++;
echo "товарів=".count($r)." ok=$o failed=$f\n";'

# подивитись лог
tail -n 30 logs/parser.log
```

Очікувано: у `products.csv` заповнені назва, ціна, наявність,
characteristics_json, images_json, breadcrumbs; `status=ok`, `error` порожній.
Товари «Нет в наличии» коректно йдуть без ціни (сайт її не показує) — це не помилка.

## Колонки products.csv

`source, category, subcategory, product_name, sku, price, old_price, currency,
availability, short_description, full_description, characteristics_json,
images_json, meta_title, meta_description, meta_keywords, breadcrumbs,
product_url, parsed_at, status, error`

> `sku` — на сайті артикул не публікується (порожній).
> `meta_keywords` — на сайті відсутні, генеруються з назви/категорії/бренду
> (вимикається в `config.php` → `'generate_keywords' => false`).
