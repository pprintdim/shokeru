<?php
class ControllerExtensionModuleBenefits extends Controller {
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
        $this->load->model('tool/image');

        $data = [];

        $language_id = $this->config->get('config_language_id');

        // Заголовок та опис модуля
        $content_settings = $setting['benefits_content'][$language_id] ?? [];
        $data['title'] = $this->parseBannerText($content_settings['title'] ?? '');
        $data['description'] = html_entity_decode($content_settings['description'] ?? '', ENT_QUOTES, 'UTF-8');

        // Пункти Benefits
        $items = $setting['benefits'][$language_id] ?? [];
        $data['items'] = [];
        $num = 0;
        foreach ($items as $item) {
            $num ++;
            $data['items'][] = [
                'title'      => $item['title'] ?? '',
                'descr'      => html_entity_decode($item['description'] ?? '', ENT_QUOTES, 'UTF-8'),
                'order'      => sprintf('%02d', $num)
            ];
        }

        // Додатковий контент модуля (якщо є)
        $data['content'] = [];
        if (!empty($content_settings['items']) && is_array($content_settings['items'])) {
            foreach ($content_settings['items'] as $item) {
                if (!is_array($item) || empty($item['image'])) continue;
                $data['content'][] = [
                    'content'    => html_entity_decode($item['content'] ?? '', ENT_QUOTES, 'UTF-8'),
                    'full_thumb' => 'image/' . $item['image'],
                    'thumb'      => $this->model_tool_image->resize($item['image'], 600, 400),
                ];
            }
        }

        // Статус модуля
        $data['status'] = $setting['status'] ?? 1;

        return $this->load->view('extension/module/benefits', $data);
    }
}