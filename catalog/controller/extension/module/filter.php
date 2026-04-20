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

        if (isset($this->request->get['sort']))  $url_params['sort']  = $this->request->get['sort'];
        if (isset($this->request->get['order'])) $url_params['order'] = $this->request->get['order'];
        if (isset($this->request->get['limit'])) $url_params['limit'] = $this->request->get['limit'];

        // 3. Формуємо action
        if ($category_id) {
            $data['action'] = $this->url->link('product/category', 'path=' . $category_id . '&' . http_build_query($url_params));
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

        $sorts = [
            ['sort' => 'pd.name', 'order' => 'ASC',  'text' => $this->language->get('text_name_asc')],
            ['sort' => 'pd.name', 'order' => 'DESC', 'text' => $this->language->get('text_name_desc')],
            ['sort' => 'p.price', 'order' => 'ASC',  'text' => $this->language->get('text_price_asc')],
            ['sort' => 'p.price', 'order' => 'DESC', 'text' => $this->language->get('text_price_desc')],
            ['sort' => 'rating',  'order' => 'DESC', 'text' => $this->language->get('text_rating_desc')],
            ['sort' => 'rating',  'order' => 'ASC',  'text' => $this->language->get('text_rating_asc')],
        ];

        foreach ($sorts as $s) {
            $data['sort_options'][] = [
                'text'  => $s['text'],
                'value' => $s['sort'] . '-' . $s['order'],
                'href'  => $this->url->link($route, 'sort=' . $s['sort'] . '&order=' . $s['order'])
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
