<?php
class ControllerExtensionBlog extends Controller {

    public function index() {
        $this->load->language('extension/blog');
        $this->load->model('extension/blog');
        $this->load->model('extension/blogcategory');
        $this->load->model('tool/image');

        $this->document->setTitle($this->language->get('heading_title') . ' — ' . $this->config->get('config_name'));
        $this->document->addStyle('catalog/view/css/post.css?v=20260711d');

        $bpath = isset($this->request->get['bpath']) ? (int)$this->request->get['bpath'] : 0;
        $page  = isset($this->request->get['page']) ? max(1, (int)$this->request->get['page']) : 1;
        $limit = 9;

        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/blog')
        );

        $data['heading_title'] = $this->language->get('heading_title');
        $data['text_lead']     = $this->language->get('text_lead');
        $data['text_all']      = $this->language->get('text_all');
        $data['text_read_more']= $this->language->get('text_read_more');
        $data['text_min_read'] = $this->language->get('text_min_read');
        $data['text_empty']    = $this->language->get('text_empty');

        // категорії (chips)
        $data['categories'] = array();
        $categories = $this->model_extension_blogcategory->getBlogCategories(0);

        foreach ($categories as $category) {
            $data['categories'][] = array(
                'name'   => $category['name'],
                'href'   => $this->url->link('extension/blog', 'bpath=' . $category['blog_category_id']),
                'active' => ($bpath == $category['blog_category_id'])
            );
        }

        $data['all_href']   = $this->url->link('extension/blog');
        $data['all_active'] = !$bpath;

        // якщо відкрита категорія — meta з неї
        if ($bpath) {
            $category_info = $this->model_extension_blogcategory->getblog_category($bpath);
            if ($category_info) {
                if ($category_info['meta_title']) {
                    $this->document->setTitle($category_info['meta_title']);
                }
                if ($category_info['meta_description']) {
                    $this->document->setDescription($category_info['meta_description']);
                }
                $data['breadcrumbs'][] = array(
                    'text' => $category_info['name'],
                    'href' => $this->url->link('extension/blog', 'bpath=' . $bpath)
                );
            }
        } else {
            $this->document->setDescription($this->language->get('meta_description'));
        }

        $filter_data = array(
            'filter_blog_category_id'  => $bpath,
            'filter_sub_blog_category' => $bpath ? true : false,
            'sort'  => 'p.date',
            'order' => 'DESC',
            'start' => ($page - 1) * $limit,
            'limit'                    => $limit
        );

        $total   = $this->model_extension_blog->getTotalblogs($filter_data);
        $results = $this->model_extension_blog->getblogs($filter_data);

        $data['posts'] = array();

        foreach ($results as $result) {
            $data['posts'][] = $this->preparePost($result);
        }

        // пагінація
        $total_pages = (int)ceil($total / $limit);
        $data['pages'] = array();

        if ($total_pages > 1) {
            for ($i = 1; $i <= $total_pages; $i++) {
                $data['pages'][] = array(
                    'text'   => $i,
                    'href'   => $this->url->link('extension/blog', ($bpath ? 'bpath=' . $bpath . '&' : '') . ($i > 1 ? 'page=' . $i : '')),
                    'active' => ($i == $page)
                );
            }
        }

        $data['column_left']    = $this->load->controller('common/column_left');
        $data['column_right']   = $this->load->controller('common/column_right');
        $data['content_top']    = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer']         = $this->load->controller('common/footer');
        $data['header']         = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('extension/blog', $data));
    }

    private function preparePost($result) {
        $image = ($result['image'] && is_file(DIR_IMAGE . $result['image']))
            ? $this->model_tool_image->resize($result['image'], 800, 500)
            : '';

        $categories = $this->model_extension_blog->getPostCategories($result['post_id']);
        $category_name = $categories ? $categories[0]['name'] : '';

        $words = str_word_count(strip_tags(html_entity_decode($result['description'] ?? '', ENT_QUOTES, 'UTF-8')));
        $read_min = max(1, (int)ceil($words / 180));

        return array(
            'post_id'  => $result['post_id'],
            'name'     => $result['name'],
            'excerpt'  => trim(html_entity_decode($result['short_description'] ?? '', ENT_QUOTES, 'UTF-8')),
            'category' => $category_name,
            'author'   => $result['username'] ?? ($result['author'] ?? ''),
            'date'     => date('d.m.Y', strtotime($result['date'])),
            'read_min' => $read_min,
            'image'    => $image,
            'href'     => $this->url->link('extension/post', 'post_id=' . $result['post_id'])
        );
    }
}
