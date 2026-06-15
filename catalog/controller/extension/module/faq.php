<?php
class ControllerExtensionModuleFaq extends Controller {
    public function index($setting) {
        if (empty($setting['status'])) {
            return '';
        }

        $language_id = (int)$this->config->get('config_language_id');
        $data['heading'] = isset($setting['heading'][$language_id]) ? $setting['heading'][$language_id] : '';
        $data['heading_accent'] = isset($setting['heading_accent'][$language_id]) ? $setting['heading_accent'][$language_id] : '';
        $data['items'] = array();

        if (!empty($setting['items']) && is_array($setting['items'])) {
            foreach ($setting['items'] as $item) {
                if (isset($item['status']) && !$item['status']) {
                    continue;
                }

                $data['items'][] = array(
                    'question' => isset($item['question'][$language_id]) ? $item['question'][$language_id] : '',
                    'content' => isset($item['content'][$language_id]) ? html_entity_decode($item['content'][$language_id], ENT_QUOTES, 'UTF-8') : '',
                    'sort_order' => isset($item['sort_order']) ? (int)$item['sort_order'] : 0
                );
            }
        }

        usort($data['items'], function($a, $b) {
            return $a['sort_order'] <=> $b['sort_order'];
        });

        if (!$data['items']) {
            return '';
        }

        return $this->load->view('extension/module/faq', $data);
    }
}
