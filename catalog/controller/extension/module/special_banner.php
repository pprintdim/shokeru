<?php
class ControllerExtensionModuleSpecialBanner extends Controller {
    public function index($setting) {
        $this->load->model('tool/image');
        $this->load->model('localisation/language');

        // мультимовні дані
        $language_id = (int)$this->config->get('config_language_id');

        $data['title'] = $setting['title'][$language_id] ?? '';
        $data['description'] = html_entity_decode($setting['description'][$language_id], ENT_QUOTES, 'UTF-8');

        // картинка
        if (!empty($setting['image']) && is_file(DIR_IMAGE . $setting['image'])) {
            $data['image'] = 'image/' . $setting['image'];
        } else {
            $data['image'] = 'image/placeholder.png';
        }



        if (!$setting['status']) {
            return;
        }

        return $this->load->view('extension/module/special_banner', $data);
    }
}
