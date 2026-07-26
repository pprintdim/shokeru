<?php
class ControllerExtensionModuleInfoblock extends Controller {
	public function index($setting) {
		$lang_id = (int)$this->config->get('config_language_id');

		if (!isset($setting['module_description'][$lang_id])) {
			return '';
		}

		$data['heading_title'] = html_entity_decode($setting['module_description'][$lang_id]['title'], ENT_QUOTES, 'UTF-8');
		$data['html']          = html_entity_decode($setting['module_description'][$lang_id]['description'], ENT_QUOTES, 'UTF-8');

		if (trim($data['heading_title']) === '' && trim($data['html']) === '') {
			return '';
		}

		return $this->load->view('extension/module/infoblock', $data);
	}
}
