<?php
class ControllerExtensionModuleHtmlRepeater extends Controller {
    private function parseBannerText($text) {

        // force string
        $text = (string)$text;

        // decode html
        $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');

        // wrap [ ... ] into <span>
        $text = preg_replace_callback(
            '/\[([^\]]+)\]/u',
            function ($m) {
                return '<span>' . trim($m[1]) . '</span>';
            },
            $text
        );

        // keep new lines
        return nl2br($text);
    }
    public function index($setting) {


        // 1️⃣ якщо прийшов зі Layout — ок
        if (!empty($setting['module_id'])) {
            $module_id = (int)$setting['module_id'];
        }
        // 2️⃣ fallback: вручну переданий
        elseif (!empty($setting['html_repeater_module_id'])) {
            $module_id = (int)$setting['html_repeater_module_id'];
        }
        else {
            return '';
        }



        $this->load->model('extension/module/html_repeater');

        $language_id = (int)$this->config->get('config_language_id');

        $items = $this->model_extension_module_html_repeater->getItems($module_id);

        if (empty($items)) {
            return '';
        }

        $data['items'] = [];

        foreach ($items as $item) {

            if (
                empty($item['meta']['status']) ||
                empty($item['lang'][$language_id])
            ) {
                continue;
            }

            $lang = $item['lang'][$language_id];

            $data['items'][] = [
                'title'      => $this->parseBannerText($lang['title']),
                'content'    => html_entity_decode($lang['content'], ENT_QUOTES, 'UTF-8'),
                'image'      => $item['meta']['image'] ?? '',
                'mob_image'  => $item['meta']['mob_image'] ?? '',
                'sort_order' => (int)($item['meta']['sort_order'] ?? 0),
            ];
        }

        if (!$data['items']) {
            return '';
        }

        // гарантований порядок
        usort($data['items'], function ($a, $b) {
            return $a['sort_order'] <=> $b['sort_order'];
        });

        return $this->load->view(
            'extension/module/html_repeater',
            $data
        );
    }
}
