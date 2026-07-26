<?php
class ControllerExtensionModuleOneVideo extends Controller {
    public function index($setting) {

        // Якщо немає iframe — не показуємо блок
        if (empty($setting['frame'])) {
            return;
        }

        // Дані для Twig
        $data['iframe'] = html_entity_decode($setting['frame']) ?? '';

        // Вивід шаблону
        return $this->load->view('extension/module/one_video', $data);
    }
}
