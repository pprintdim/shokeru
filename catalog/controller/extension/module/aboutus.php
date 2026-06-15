<?php
class ControllerExtensionModuleAboutus extends Controller {
    public function index() {
        $setting = $this->config->get('module_aboutus');

        if (!is_array($setting) || empty($setting['status'])) {
            return '';
        }

        $language_id = (int)$this->config->get('config_language_id');

        $data['content'] = isset($setting['content'][$language_id]['content']) ? html_entity_decode($setting['content'][$language_id]['content'], ENT_QUOTES, 'UTF-8') : '';
        $data['stats'] = array();
        $data['cards'] = array();

        if (!empty($setting['stats']) && is_array($setting['stats'])) {
            foreach ($setting['stats'] as $stat) {
                $localized = isset($stat[$language_id]) ? $stat[$language_id] : array();

                $raw_value = isset($localized['value']) ? $localized['value'] : '';
                $suffix = '';

                if (preg_match('/^(.*?)\[(.+?)\](.*)$/', $raw_value, $matches)) {
                    $raw_value = trim($matches[1] . $matches[3]);
                    $suffix = $matches[2];
                }

                $data['stats'][] = array(
                    'value'  => $raw_value,
                    'suffix' => $suffix,
                    'label'  => isset($localized['label']) ? $localized['label'] : ''
                );
            }
        }

        if (!empty($setting['cards']) && is_array($setting['cards'])) {
            foreach ($setting['cards'] as $card) {
                $localized = isset($card[$language_id]) ? $card[$language_id] : array();

                $data['cards'][] = array(
                    'title'  => isset($localized['title']) ? $localized['title'] : '',
                    'accent' => isset($localized['accent']) ? $localized['accent'] : '',
                    'link'   => isset($card['link']) ? $card['link'] : '#'
                );
            }
        }

        return $this->load->view('extension/module/aboutus', $data);
    }
}
