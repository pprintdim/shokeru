<?php
class ControllerExtensionModuleSaletextline extends Controller {
    public function index($setting) {

        $language_id = (int)$this->config->get('config_language_id');

        $setting = !empty($setting['setting']) ? $setting['setting'] : $setting;

        if (empty($setting['status'])) {
            return '';
        }

        $language_id = (int)$this->config->get('config_language_id');
        $raw = isset($setting['content'][$language_id]['items']) ? $setting['content'][$language_id]['items'] : '';

        $items = array_values(array_filter(array_map('trim', explode("\n", $raw))));
        if (!$items) {
            return '';
        }

        return $this->load->view('extension/module/saletextline', array('items' => $items));
    }

    private function getModuleSetting($module_id) {
        $this->load->model('setting/module');
        $info = $this->model_setting_module->getModule($module_id);

        return !empty($info['setting']) ? $info['setting'] : array();
    }
}
