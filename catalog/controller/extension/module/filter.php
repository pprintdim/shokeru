<?php
class ControllerExtensionModuleFilter extends Controller {

    public function index() {

        // ======================
        // Category визначення (може і не бути)
        // ======================
        $category_id = 0;

        if (!empty($this->request->get['path'])) {
            $parts = explode('_', (string)$this->request->get['path']);
            $category_id = (int)end($parts);
        }

        $this->load->language('extension/module/filter');
        $this->load->model('catalog/category');
        $this->load->model('catalog/product');
        $this->load->model('catalog/filter');

        // ======================
        // URL
        // ======================
        $route = $this->request->get['route'] ?? 'product/shop';

        // Дозволені маршрути
        $allowed_routes = ['product/shop', 'product/latest', 'product/special', 'product/category'];
        if (!in_array($route, $allowed_routes)) {
            $route = 'product/shop';
        }

        // 2. Формуємо параметри URL
        $url_params = [];

        if (!empty($this->request->get['filter'])) {
            if (is_array($this->request->get['filter'])) {
                $url_params['filter'] = implode(',', $this->request->get['filter']);
            } else {
                $url_params['filter'] = $this->request->get['filter'];
            }
        }

        $data['price_from'] = isset($this->request->get['price_from']) ? $this->request->get['price_from'] : ($this->request->get['price-from'] ?? '');
        $data['price_to'] = isset($this->request->get['price_to']) ? $this->request->get['price_to'] : ($this->request->get['price-to'] ?? '');
        $data['price_label'] = '';

        if ($data['price_from'] !== '' || $data['price_to'] !== '') {
            if ($data['price_from'] !== '' && $data['price_to'] !== '') {
                $data['price_label'] = 'Ціна: ' . $data['price_from'] . ' - ' . $data['price_to'];
            } elseif ($data['price_from'] !== '') {
                $data['price_label'] = 'Ціна від ' . $data['price_from'];
            } else {
                $data['price_label'] = 'Ціна до ' . $data['price_to'];
            }
        }

        if ($data['price_from'] !== '') $url_params['price_from'] = $data['price_from'];
        if ($data['price_to'] !== '') $url_params['price_to'] = $data['price_to'];

        if (isset($this->request->get['sort']))  $url_params['sort']  = $this->request->get['sort'];
        if (isset($this->request->get['order'])) $url_params['order'] = $this->request->get['order'];
        if (isset($this->request->get['limit'])) $url_params['limit'] = $this->request->get['limit'];

        // 3. Формуємо action
        if ($category_id) {
            $path = $this->request->get['path'] ?? $category_id;
            $query = 'path=' . $path;

            if ($url_params) {
                $query .= '&' . http_build_query($url_params);
            }

            $data['action'] = $this->url->link('product/category', $query);
        } else {
            $data['action'] = $this->url->link($route, http_build_query($url_params));
        }


        // ======================
        // Вибрані фільтри
        // ======================
        $data['filter_category'] = [];

        if (!empty($this->request->get['filter'])) {
            if (is_array($this->request->get['filter'])) {
                $data['filter_category'] = $this->request->get['filter'];
            } elseif (is_string($this->request->get['filter'])) {
                $data['filter_category'] = explode(',', $this->request->get['filter']);
            }
        }


        // ======================
        // Отримання груп
        // ======================
        if ($category_id) {
            $filter_groups = $this->model_catalog_category->getCategoryFilters($category_id);
        } else {
            // БЕЗ категорії → всі
            $filter_groups = $this->model_catalog_filter->getAllFilters();
        }


       // ======================
        // Вибране сортування
        // ======================
        $this->load->language('product/category');

        $data['sort']  = $this->request->get['sort']  ?? '';
        $data['order'] = $this->request->get['order'] ?? '';
        $data['sort_selected'] = $data['sort'] . '-' . $data['order'];

        $data['sort_options'] = [];

        $route = $this->request->get['route'] ?? 'product/shop';

        $price_sort = ($route == 'product/special') ? 'ps.price' : 'p.price';

        $sorts = [
            ['sort' => 'pd.name', 'order' => 'ASC',  'text' => $this->language->get('text_name_asc')],
            ['sort' => 'pd.name', 'order' => 'DESC', 'text' => $this->language->get('text_name_desc')],
            ['sort' => $price_sort, 'order' => 'ASC',  'text' => $this->language->get('text_price_asc')],
            ['sort' => $price_sort, 'order' => 'DESC', 'text' => $this->language->get('text_price_desc')],
            ['sort' => 'rating',  'order' => 'DESC', 'text' => $this->language->get('text_rating_desc')],
            ['sort' => 'rating',  'order' => 'ASC',  'text' => $this->language->get('text_rating_asc')],
        ];

        foreach ($sorts as $s) {
            $data['sort_options'][] = [
                'text'  => $s['text'],
                'value' => $s['sort'] . '-' . $s['order'],
                'href'  => $this->url->link($route, http_build_query(array_merge($url_params, [
                    'sort'  => $s['sort'],
                    'order' => $s['order']
                ])))
            ];
        }


        $data['filter_groups'] = [];

        if ($filter_groups) {
            foreach ($filter_groups as $filter_group) {

                $childen_data = [];

                foreach ($filter_group['filter'] as $filter) {

                    $filter_data = [
                        'filter_category_id' => $category_id,
                        'filter_filter'      => $filter['filter_id']
                    ];

                    $childen_data[] = [
                        'filter_id' => $filter['filter_id'],
                        'title'     => $filter['name'],
                        'name'      => $filter['name'] .
                            ($this->config->get('config_product_count')
                                ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')'
                                : ''),
                        'selected'  => in_array($filter['filter_id'], $data['filter_category']) // <-- ось тут
                    ];

                }

                $data['filter_groups'][] = [
                    'filter_group_id' => $filter_group['filter_group_id'],
                    'name'            => $filter_group['name'],
                    'filter'          => $childen_data
                ];
            }

            return $this->load->view('extension/module/filter', $data);
        }

        return '';
    }
}
