<?php
class ControllerExtensionModuleSafeimage extends Controller {
    public function index($setting) {
        $language_id = (int)$this->config->get('config_language_id');

        $setting = !empty($setting['setting']) ? $setting['setting'] : $setting;

        $content = !empty($setting['content'][$language_id]) ? $setting['content'][$language_id] : array();

        $data['name'] = !empty($content['name']) ? $content['name'] : '';
        $data['title_accent'] = !empty($content['title_accent']) ? $content['title_accent'] : '';
        $data['description'] = !empty($content['description']) ? html_entity_decode($content['description'], ENT_QUOTES, 'UTF-8') : '';
        
        $data['images'] = array();
        $this->load->model('tool/image');
        $links = (!empty($setting['links']) && is_array($setting['links'])) ? $setting['links'] : array();
        if (!empty($setting['images']) && is_array($setting['images'])) {
            foreach ($setting['images'] as $i => $image) {
                if ($image && is_file(DIR_IMAGE . $image)) {
                    $pid = isset($links[$i]) ? (int)$links[$i] : 0;
                    $data['images'][] = array(
                        'src'  => $this->model_tool_image->resize($image, 800, 600),
                        'href' => $pid ? $this->url->link('product/product', 'product_id=' . $pid) : '',
                    );
                }
            }
        }

        if (!$data['images'] && !$data['name'] && !$data['title_accent'] && !$data['description']) {
            return '';
        }

        // swiper потрібен для слайдера safeImage (інакше слайди лишаються opacity:0)
        $this->document->addStyle('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
        $this->document->addScript('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');

        return $this->load->view('extension/module/safeimage', $data);
    }
}