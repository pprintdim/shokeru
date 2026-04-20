<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		$sale_lines = $this->config->get('config_sale_line');

		// беремо рядки для поточної мови
		$sale_line = isset($sale_lines[$this->config->get('config_language_id')]) 
		    ? $sale_lines[$this->config->get('config_language_id')] 
		    : '';

		// розбиваємо по рядках, обрізаємо пробіли і видаляємо порожні
		$data['sale_line'] = array_filter(array_map('trim', explode("\n", $sale_line)));

			
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
