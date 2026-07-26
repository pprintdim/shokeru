<?php
class ControllerExtensionAnalyticsCustomScripts extends Controller {
    public function index($data = []) {
        if (!(int)$this->config->get('module_custom_scripts_status')) {
            return '';
        }

        $position = $data['position'] ?? ($this->request->get['position'] ?? 'head');
        $items    = $this->config->get('module_custom_scripts_items') ?: [];

        $output = '';
        foreach ($items as $item) {
            if (empty($item['code'])) continue;
            if (($item['position'] ?? 'head') !== $position) continue;
            $output .= html_entity_decode(trim($item['code'], '"\''), ENT_QUOTES, 'UTF-8') . "\n";
        }
        return $output;
    }
}
