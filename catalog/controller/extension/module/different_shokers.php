<?php
class ControllerExtensionModuleDifferentShokers extends Controller {

    public function index() {
        $this->load->model('tool/image');
        $status = $this->config->get('module_different_shokers_status');

        if (!$status) {
            return;
        }

        $language_id = $this->config->get('config_language_id');

        // Отримуємо конфігурацію модуля
        $title = $this->config->get('module_different_shokers_title') ?? [];
        $content = $this->config->get('module_different_shokers_content') ?? [];
        $repeater = $this->config->get('module_different_shokers_repeater') ?? [];
        $image = $this->config->get('module_different_shokers_image') ?? '';
        // Заголовок і контент (мультимовні)
        $data['title']   = $title[$language_id] ?? '';
        $data['content'] = html_entity_decode($content[$language_id] ?? '', ENT_QUOTES, 'UTF-8');

        // Repeater (мультимовні елементи)
        $items = isset($repeater[$language_id]) && is_array($repeater[$language_id]) ? $repeater[$language_id] : [];
        $data['items'] = [];
        foreach ($items as $item) {
            $item_title = isset($item['title']) ? $item['title'] : '';
            $item_desc  = isset($item['description']) ? html_entity_decode($item['description'], ENT_QUOTES, 'UTF-8') : '';
            $data['items'][] = [
                'title'   => $item_title,
                'content' => $item_desc,
            ];
        }

        // Основне зображення
        if (!empty($image) && is_file(DIR_IMAGE . $image)) {
            $data['image'] = [
                'full'  => 'image/' . $image,
                'thumb' => $this->model_tool_image->resize($image, 600, 400)
            ];
        } else {
            $data['image'] = [
                'full'  => 'image/placeholder.png',
                'thumb' => $this->model_tool_image->resize('placeholder.png', 600, 400)
            ];
        }

        // Статус модуля
        $data['status'] = $status;

        // Завантажуємо Twig шаблон
        return $this->load->view('extension/module/different_shokers', $data);
    }
}