<?php
class ControllerProductShop extends Controller {
    public function index() {

        $this->load->language('product/category');
        $this->load->model('catalog/category');
        $this->load->model('catalog/product');
        $this->load->model('tool/image');
        $this->load->model('catalog/filter');

        $filter = '';
        if (!empty($this->request->get['filter'])) {
            $filter = is_array($this->request->get['filter'])
                ? implode(',', $this->request->get['filter'])
                : $this->request->get['filter'];
        }

        $price_from = isset($this->request->get['price_from']) ? $this->request->get['price_from'] : ($this->request->get['price-from'] ?? '');
        $price_to = isset($this->request->get['price_to']) ? $this->request->get['price_to'] : ($this->request->get['price-to'] ?? '');

        $sort   = $this->request->get['sort'] ?? 'p.sort_order';
        $order  = $this->request->get['order'] ?? 'ASC';
        $page   = isset($this->request->get['page']) ? (int)$this->request->get['page'] : 1;

        if (isset($this->request->get['limit']) && (int)$this->request->get['limit'] > 0) {
            $limit = (int)$this->request->get['limit'];
        } else {
            $limit = 8;
        }

        // ======================
        // Хлібні крихти
        // ======================
        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_shop'),
            'href' => $this->url->link('product/shop')
        ];

        // ======================
        // Отримання товарів
        // ======================
        $filter_data = [
            'filter_category_id' => 0,
            'filter_filter'      => $filter,
            'filter_price_from'  => $price_from,
            'filter_price_to'    => $price_to,
            'sort'               => $sort,
            'order'              => $order,
            'start'              => ($page - 1) * $limit,
            'limit'              => $limit
        ];

        $product_total = $this->model_catalog_product->getTotalProducts($filter_data);
        $results       = $this->model_catalog_product->getProducts($filter_data);

        // ======================
        // Фільтр модуль
        // ======================
        $data['filter'] = $this->load->controller('extension/module/filter');

        // ======================
        // Рекомендовані товари
        // ======================
         $this->document->addStyle('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
        $this->document->addScript('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
        $data['recommended'] = [];

        $limit_rec = 10;
        $added_ids = [];
        $recently_viewed = $this->session->data['recently_viewed'] ?? [];

        // 1. Отримуємо популярні товари (за переглядами)
        $popular_products = $this->model_catalog_product->getProducts([
            'sort'  => 'p.viewed',
            'order' => 'DESC',
            'start' => 0,
            'limit' => 100,
        ]);

        $rec_items = [];

        // 2. Додаємо недавно переглянуті товари
        if ($recently_viewed) {
            $rv_ids = array_diff($recently_viewed, $added_ids);

            if ($rv_ids) {
                $rv_products = $this->model_catalog_product->getProducts([
                    'filter_product_id' => $rv_ids,
                    'start' => 0,
                    'limit' => $limit_rec,
                ]);

                foreach ($rv_products as $p) {
                    if (!in_array($p['product_id'], $added_ids)) {
                        $added_ids[] = $p['product_id'];
                        $rec_items[] = $p;
                    }
                }
            }
        }

        // 3. Додаємо популярні, якщо мало товарів
        if (count($rec_items) < $limit_rec) {
            foreach ($popular_products as $p) {
                if (!in_array($p['product_id'], $added_ids)) {
                    $added_ids[] = $p['product_id'];
                    $rec_items[] = $p;
                }
                if (count($rec_items) >= $limit_rec) break;
            }
        }

        // 4. Форматуємо для шаблону
        foreach ($rec_items as &$rec) {
            $rec['thumb'] = $rec['image']
                ? $this->model_tool_image->resize(
                    $rec['image'],
                    $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'),
                    $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height')
                )
                : $this->model_tool_image->resize(
                    'placeholder.png',
                    $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'),
                    $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height')
                );

            $rec['href'] = $this->url->link('product/product', 'product_id=' . $rec['product_id']);
        }
        unset($rec);

        // 5. Віддаємо у шаблон
        $data['recommended'] = array_slice($rec_items, 0, $limit_rec);


        // ======================
        // Список товарів
        // ======================
        $data['products'] = [];

        foreach ($results as $result) {

            $image = $result['image']
                ? $this->model_tool_image->resize($result['image'],
                    $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'),
                    $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'))
                : $this->model_tool_image->resize('placeholder.png',
                    $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'),
                    $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));

            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format(
                    $this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')),
                    $this->session->data['currency']
                );
            } else {
                $price = false;
            }

            if (!is_null($result['special']) && (float)$result['special'] >= 0) {
                $special = $this->currency->format(
                    $this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')),
                    $this->session->data['currency']
                );
                $tax_price = (float)$result['special'];
            } else {
                $special = false;
                $tax_price = (float)$result['price'];
            }

            $tax = $this->config->get('config_tax')
                ? $this->currency->format($tax_price, $this->session->data['currency'])
                : false;

            $data['products'][] = [
                'product_id'  => $result['product_id'],
                'thumb'       => $image,
                'name'        => $result['name'],
                'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0,
                    $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                'price'   => $price,
                'special' => $special,
                'tax'     => $tax,
                'minimum' => $result['minimum'] > 0 ? $result['minimum'] : 1,
                'rating'  => $result['rating'],
                'href'    => $this->url->link('product/product', 'product_id=' . $result['product_id'])
            ];
        }

        // ======================
        // Пагінація
        // ======================
        $url = '';

        if ($filter !== '') $url .= '&filter=' . $filter;
        if ($price_from !== '') $url .= '&price_from=' . $price_from;
        if ($price_to !== '') $url .= '&price_to=' . $price_to;

        if (isset($this->request->get['sort']))  $url .= '&sort='  . $this->request->get['sort'];
        if (isset($this->request->get['order'])) $url .= '&order=' . $this->request->get['order'];
        if (isset($this->request->get['limit'])) $url .= '&limit=' . $this->request->get['limit'];

        $pagination = new Pagination();
        $pagination->total = $product_total;
        $pagination->page  = $page;
        $pagination->limit = $limit;
        $pagination->url   = $this->url->link('product/shop', $url . '&page={page}');

        $data['pagination'] = $pagination->render();
        $data['current_page'] = $page;
        $data['total_pages'] = $limit ? (int)ceil($product_total / $limit) : 1;
        $data['pagination_pages'] = [];

        $pagination_url = $this->url->link('product/shop', $url . '&page={page}');
        $pagination_url = str_replace(['%7Bpage%7D', '%7bpage%7d'], '{page}', $pagination_url);
        $first_page_url = str_replace(['&amp;page={page}', '?page={page}', '&page={page}'], '', $pagination_url);

        $tp = (int)$data['total_pages'];
        $show = [];
        $start = $page - 1;
        if ($start > $tp - 2) { $start = $tp - 2; }
        if ($start < 1) { $start = 1; }
        for ($i = $start; $i <= min($start + 2, $tp); $i++) { $show[$i] = true; }
        if ($tp >= 1) { $show[$tp] = true; }
        ksort($show);
        $prev = 0;
        foreach (array_keys($show) as $i) {
            if ($prev && ($i - $prev) > 1) {
                $data['pagination_pages'][] = ['text' => '...', 'href' => '', 'active' => false, 'ellipsis' => true];
            }
            $data['pagination_pages'][] = [
                'text'     => $i,
                'href'     => ($i == 1) ? $first_page_url : str_replace('{page}', $i, $pagination_url),
                'active'   => ($i == $page),
                'ellipsis' => false
            ];
            $prev = $i;
        }

        $data['next_page_url'] = ($page < $data['total_pages'])
            ? str_replace('{page}', $page + 1, $pagination_url)
            : '';

        $data['results'] = sprintf(
            $this->language->get('text_pagination'),
            ($product_total) ? (($page - 1) * $limit) + 1 : 0,
            ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit),
            $product_total,
            ceil($product_total / $limit)
        );

        // ======================
        // SEO
        // ======================
        if ($page == 1) {
            $this->document->addLink($this->url->link('product/shop'), 'canonical');
        } else {
            $this->document->addLink($this->url->link('product/shop', 'page=' . $page), 'canonical');
        }

        if ($page > 1) {
            $this->document->addLink($this->url->link('product/shop', ($page - 2 ? 'page=' . ($page - 1) : '')), 'prev');
        }

        if ($limit && ceil($product_total / $limit) > $page) {
            $this->document->addLink($this->url->link('product/shop', 'page=' . ($page + 1)), 'next');
        }

        $data['sort']  = $sort;
        $data['order'] = $order;
        $data['limit'] = $limit;

        $data['continue'] = $this->url->link('common/home');

        $data['column_left']   = $this->load->controller('common/column_left');
        $data['column_right']  = $this->load->controller('common/column_right');
        $data['content_top']   = $this->load->controller('common/content_top');
        $data['content_bottom']= $this->load->controller('common/content_bottom');
        $data['footer']        = $this->load->controller('common/footer');
        $data['header']        = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('product/shop', $data));
    }
}
