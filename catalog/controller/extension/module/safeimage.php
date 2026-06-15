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
        if (!empty($setting['images']) && is_array($setting['images'])) {
            foreach ($setting['images'] as $image) {
                if ($image && is_file(DIR_IMAGE . $image)) {
                    $data['images'][] = $this->model_tool_image->resize($image, 800, 600);
                }
            }
        }

        if (!$data['images'] && !$data['name'] && !$data['title_accent'] && !$data['description']) {
            return '';
        }

        return $this->load->view('extension/module/safeimage', $data);
    }
}