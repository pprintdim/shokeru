<?php
class ControllerExtensionPost extends Controller {

    public function index() {
        $this->load->language('extension/blog');
        $this->load->model('extension/blog');
        $this->load->model('extension/blogcategory');
        $this->load->model('tool/image');

        $post_id = isset($this->request->get['post_id']) ? (int)$this->request->get['post_id'] : 0;

        $post_info = $post_id ? $this->model_extension_blog->getblog($post_id) : false;

        if (!$post_info) {
            // 404
            $this->document->setTitle($this->language->get('text_not_found'));
            $data['heading_title'] = $this->language->get('text_not_found');
            $data['text_error'] = $this->language->get('text_not_found');
            $data['button_continue'] = $this->language->get('button_continue');
            $data['continue'] = $this->url->link('extension/blog');
            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');
            $this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');
            $this->response->setOutput($this->load->view('error/not_found', $data));
            return;
        }

        $this->model_extension_blog->updateViewed($post_id);

        $this->document->setTitle($post_info['meta_title'] ?: $post_info['name']);
        if ($post_info['meta_description']) {
            $this->document->setDescription($post_info['meta_description']);
        }
        $this->document->addStyle('catalog/view/css/post.css?v=20260711d');
        $this->document->addStyle('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
        $this->document->addScript('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');

        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/blog')
        );
        $data['breadcrumbs'][] = array(
            'text' => $post_info['name'],
            'href' => $this->url->link('extension/post', 'post_id=' . $post_id)
        );

        // категорія (eyebrow)
        $categories = $this->model_extension_blog->getPostCategories($post_id);
        $data['category'] = $categories ? $categories[0]['name'] : '';

        $data['heading_title'] = $post_info['name'];
        $data['description']   = html_entity_decode($post_info['description'], ENT_QUOTES, 'UTF-8');
        $data['author']        = $post_info['username'] ?: ($post_info['author'] ?? '');
        $data['author_letter'] = $data['author'] !== '' ? mb_strtoupper(mb_substr($data['author'], 0, 1, 'UTF-8'), 'UTF-8') : '';

        // дата — локалізована
        $ts = strtotime($post_info['date']);
        if (class_exists('IntlDateFormatter')) {
            $fmt = new IntlDateFormatter($this->language->get('code') ?: 'uk-UA', IntlDateFormatter::LONG, IntlDateFormatter::NONE, null, null, 'd MMMM y');
            $data['date'] = $fmt->format($ts);
        } else {
            $data['date'] = date('d.m.Y', $ts);
        }

        $data['date_iso'] = date('Y-m-d', $ts);
        $words = str_word_count(strip_tags($data['description']));
        $data['read_min'] = max(1, (int)ceil($words / 180));

        $data['image'] = ($post_info['image'] && is_file(DIR_IMAGE . $post_info['image']))
            ? $this->model_tool_image->resize($post_info['image'], 1920, 900)
            : '';

        // мовні тексти
        $data['text_home']      = $this->language->get('text_home');
        $data['text_blog']      = $this->language->get('heading_title');
        $data['blog_href']      = $this->url->link('extension/blog');
        $data['text_min_read']  = $this->language->get('text_min_read');
        $data['text_toc']       = $this->language->get('text_toc');
        $data['text_products']  = $this->language->get('text_products');
        $data['text_related']   = $this->language->get('text_related');
        $data['text_all_posts'] = $this->language->get('text_all_posts');
        $data['text_read_more'] = $this->language->get('text_read_more');
        $data['button_cart']    = $this->language->get('button_cart');
        $data['button_more']    = $this->language->get('button_more');
        $data['text_added']     = $this->language->get('text_added');

        // товари статті (за бажанням — блок показується лише коли є)
        $data['products'] = array();
        $product_related = $this->model_extension_blog->getProductRelated($post_id);

        foreach ($product_related as $product_info) {
            if (!$product_info) { continue; }

            $thumb = $product_info['image']
                ? $this->model_tool_image->resize($product_info['image'], 500, 500)
                : $this->model_tool_image->resize('placeholder.png', 500, 500);

            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }

            if (!is_null($product_info['special']) && (float)$product_info['special'] >= 0) {
                $special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $special = false;
            }

            $data['products'][] = array(
                'product_id' => $product_info['product_id'],
                'thumb'      => $thumb,
                'name'       => $product_info['name'],
                'price'      => $price,
                'special'    => $special,
                'minimum'    => $product_info['minimum'] > 0 ? $product_info['minimum'] : 1,
                'href'       => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
            );
        }

        // схожі статті: пов'язані, добиті останніми
        $data['related'] = array();
        $added = array($post_id => true);

        foreach ($this->model_extension_blog->getPostRelated($post_id) as $rel) {
            if (!$rel || isset($added[$rel['post_id']])) { continue; }
            $added[$rel['post_id']] = true;
            $data['related'][] = $this->prepareCard($rel);
        }

        if (count($data['related']) < 3) {
            $latest = $this->model_extension_blog->getblogs(array('sort' => 'p.date', 'order' => 'DESC', 'start' => 0, 'limit' => 6));
            foreach ($latest as $rel) {
                if (count($data['related']) >= 3) { break; }
                if (isset($added[$rel['post_id']])) { continue; }
                $added[$rel['post_id']] = true;
                $data['related'][] = $this->prepareCard($rel);
            }
        }

        $data['column_left']    = $this->load->controller('common/column_left');
        $data['column_right']   = $this->load->controller('common/column_right');
        $data['content_top']    = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer']         = $this->load->controller('common/footer');
        $data['header']         = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('extension/post', $data));
    }

    private function prepareCard($result) {
        $image = ($result['image'] && is_file(DIR_IMAGE . $result['image']))
            ? $this->model_tool_image->resize($result['image'], 800, 500)
            : '';

        $categories = $this->model_extension_blog->getPostCategories($result['post_id']);

        $words = str_word_count(strip_tags(html_entity_decode($result['description'] ?? '', ENT_QUOTES, 'UTF-8')));

        return array(
            'name'     => $result['name'],
            'category' => $categories ? $categories[0]['name'] : '',
            'date'     => date('d.m.Y', strtotime($result['date'])),
            'read_min' => max(1, (int)ceil($words / 180)),
            'image'    => $image,
            'href'     => $this->url->link('extension/post', 'post_id=' . $result['post_id'])
        );
    }
}
