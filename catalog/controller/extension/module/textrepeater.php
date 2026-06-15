<?php
class ControllerExtensionModuleTextrepeater extends Controller {
    public function index() {
        $setting = $this->config->get('module_textrepeater');

        if (!is_array($setting) || empty($setting['status'])) {
            return '';
        }

        $language_id = (int)$this->config->get('config_language_id');

        $data['content'] = isset($setting['content'][$language_id]['html']) ? html_entity_decode($setting['content'][$language_id]['html'], ENT_QUOTES, 'UTF-8') : '';
        $data['items'] = array();

        if (!empty($setting['items']) && is_array($setting['items'])) {
            $items = $setting['items'];

            usort($items, function($a, $b) {
                $a_sort = isset($a['sort_order']) ? (int)$a['sort_order'] : 0;
                $b_sort = isset($b['sort_order']) ? (int)$b['sort_order'] : 0;

                return $a_sort - $b_sort;
            });

            foreach ($items as $item) {
                if (isset($item['status']) && !(int)$item['status']) {
                    continue;
                }

                $localized = isset($item[$language_id]) ? $item[$language_id] : array();

                $data['items'][] = array(
                    'title'    => isset($localized['title']) ? $localized['title'] : '',
                    'text'     => isset($localized['text']) ? html_entity_decode($localized['text'], ENT_QUOTES, 'UTF-8') : '',
                    'btn_text' => isset($localized['btn_text']) ? $localized['btn_text'] : '',
                    'btn_link' => isset($item['btn_link']) ? $item['btn_link'] : ''
                );
            }
        }

        if (!$data['content'] && !$data['items']) {
            return '';
        }

        return $this->load->view('extension/module/textrepeater', $data);
    }
}
