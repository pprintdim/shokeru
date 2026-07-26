<?php
class ControllerExtensionModulePartnerProgram extends Controller {
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

    public function index() {
        $this->load->model('tool/image');

        $data = [];

        $language_id = $this->config->get('config_language_id');

        // Заголовок і контент модуля
        $titles = $this->config->get('module_partner_program_title') ?? [];
        $contents = $this->config->get('module_partner_program_content') ?? [];

        $data['title']   = $this->parseBannerText($titles[$language_id] ?? '');
        $data['content'] = html_entity_decode($contents[$language_id] ?? '', ENT_QUOTES, 'UTF-8');

        // Кнопки (мультимовні)
        $buttons_config = $this->config->get('module_partner_program_buttons') ?? [];
        $data['buttons'] = [];

        if (!empty($buttons_config)) {
            $names = $buttons_config['name'][$language_id] ?? [];
            $links = $buttons_config['link'][$language_id] ?? [];

            foreach ($names as $key => $name) {
                $link = $links[$key] ?? '#';
                $data['buttons'][] = [
                    'name' => $name,
                    'href' => $link
                ];
            }
        }

        // Основне зображення
        $image_file = $this->config->get('module_partner_program_image') ?? '';
        if ($image_file && is_file(DIR_IMAGE . $image_file)) {
            $data['image'] = [
                'full'  => 'image/' . $image_file,
                'thumb' => $this->model_tool_image->resize($image_file, 600, 400)
            ];
        } else {
            $data['image'] = [
                'full'  => 'image/placeholder.png',
                'thumb' => $this->model_tool_image->resize('placeholder.png', 600, 400)
            ];
        }

        // Статус модуля
        $data['status'] = $this->config->get('module_partner_program_status') ?? 0;

        // Вивід Twig шаблону
        return $this->load->view('extension/module/partner_program', $data);
    }
}