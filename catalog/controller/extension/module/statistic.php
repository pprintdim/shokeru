<?php
class ControllerExtensionModuleStatistic extends Controller {
    private function parseBannerText($text) {
        $text = (string)$text;
        $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');

        // [ ... ] → <span> ... </span> (зсередини назовні, підтримує вкладені)
        while (preg_match('/\[[^\[\]]*\]/u', $text)) {
            $text = preg_replace_callback(
                '/\[([^\[\]]*)\]/u',
                function ($m) {
                    return '<span>' . trim($m[1]) . '</span>';
                },
                $text
            );
        }

        return $text;
    }

    public function index($setting) {
        $language_id = (int)$this->config->get('config_language_id');

        // статус (на випадок прямого виклику)
        if (array_key_exists('status', $setting) && !$setting['status']) {
            return '';
        }

        $data['title']       = '';
        $data['description'] = '';

        // about__content — з прив'язаного html-модуля (код "html")
        if (!empty($setting['html_id'])) {
            $this->load->model('setting/module');

            $module = $this->model_setting_module->getModule((int)$setting['html_id']);

            if (!empty($module['module_description'][$language_id])) {
                $desc = $module['module_description'][$language_id];
                $data['title']       = html_entity_decode($desc['title'] ?? '', ENT_QUOTES, 'UTF-8');
                $data['description'] = html_entity_decode($desc['description'] ?? '', ENT_QUOTES, 'UTF-8');
            }
        }

        // about__block — 4 показники з blocks[1..4][language_id]
        $data['blocks'] = [];

        foreach (($setting['blocks'] ?? []) as $block) {
            $text = trim((string)($block[$language_id] ?? ''));

            if ($text === '') {
                continue;
            }

            $data['blocks'][] = $this->parseBannerText($text);
        }

        return $this->load->view('extension/module/statistic', $data);
    }
}
