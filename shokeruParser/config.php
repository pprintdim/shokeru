<?php
/**
 * Конфігурація парсера paralizator.com.ua
 *
 * УСІ селектори винесено сюди. Якщо сайт змінить верстку — правити ТІЛЬКИ тут.
 * Селектори у форматі XPath (працюють через DOMXPath).
 */

return [

    // --- Базові налаштування ---
    'base_url'   => 'https://paralizator.com.ua/',

    /*
     * User-Agent. Сайт за antibot-захистом adm.tools, але пропускає Googlebot.
     * Якщо захист почне блокувати — відкрий сайт у браузері, пройди перевірку,
     * скопіюй cookie з DevTools (Application → Cookies) у 'cookie' нижче.
     */
    'user_agent' => 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',
    'cookie'     => '', // напр. 'PHPSESSID=...; protection=...'

    // Пауза між запитами (сек). float дозволено: 1.5 = 1.5 сек
    'delay'        => 1.0,
    'timeout'      => 30,   // таймаут запиту, сек
    'max_retries'  => 3,    // спроб при 429/мережевій помилці
    'retry_wait'   => 5,    // пауза перед повтором, сек

    // --- Шляхи ---
    'paths' => [
        'categories'    => __DIR__ . '/data/categories.csv',
        'product_urls'  => __DIR__ . '/data/product_urls.csv',
        'products'      => __DIR__ . '/data/products.csv',
        'price_history' => __DIR__ . '/data/price_history.csv',
        'log'           => __DIR__ . '/logs/parser.log',
    ],

    /*
     * Джерело списку категорій:
     *  'menu'    — парсити з головного меню сайту (nav)
     *  'sitemap' — брати категорії із sitemap.xml (URL, що закінчуються на /)
     */
    'category_source' => 'menu',
    'sitemap_url'     => 'https://paralizator.com.ua/sitemap.xml',

    // --- СЕЛЕКТОРИ (XPath) ---
    'selectors' => [

        // Головне меню категорій (parse_categories.php)
        'menu_links' => '//nav//a',

        // Картка товару у лістингу категорії (parse_product_urls.php)
        'product_card'      => '//div[contains(@class,"product-thumb")]',
        'card_link'         => './/div[@class="card-name"]/a/@href',
        // Пагінація: посилання "наступна сторінка"
        'pagination_links'  => '//*[contains(@class,"pagination")]//a/@href',

        // Сторінка товару (parse_products.php)
        'is_product'        => '//h1[contains(@class,"prodpg-name")]',
        'name'              => '//h1',
        'breadcrumbs'       => '//*[contains(@class,"breadcrumb")]//a',
        'price'             => '//*[@itemprop="price"]/@content',
        'currency'          => '//*[@itemprop="priceCurrency"]/@content',
        'old_price'         => '//*[contains(@class,"prodpg")]//*[contains(@class,"old-price")] | //*[@class="old-price"]',
        'availability'      => '(//*[contains(@class,"prod_pg_bl-top")]//*[contains(@class,"availability")])[1]',
        'availability_alt'  => '(//*[contains(@class,"availability")])[1]',
        'meta_title'        => '//title',
        'meta_description'  => '//meta[@name="description"]/@content',
        'meta_keywords'     => '//meta[@name="keywords"]/@content', // на сайті відсутні → генеруємо
        'full_description'  => '//*[@id="descript"]',
        // Рядки характеристик: <div><span>Ключ:</span><span>Значення</span></div>
        'spec_rows'         => '//*[@id="specific"]//div[span[2]]',
        // Фото-галерея: <img src> усередині галереї товару (НЕ href — той веде на якір #el0).
        // У галереї лежать обидва розміри; код залишає лише повнорозмірні 1400x1300.
        'images'            => '//ul[contains(@class,"thumbnails-my")]//img/@src',
    ],

    // Чи генерувати meta_keywords з даних товару, якщо на сайті їх немає
    'generate_keywords' => true,
];
