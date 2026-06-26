<?php
class ControllerCommonSearch extends Controller {
	public function index() {
		$this->load->language('common/search');

		$data['text_search'] = $this->language->get('text_search');

		if (isset($this->request->get['search'])) {
			$data['search'] = $this->request->get['search'];
		} else {
			$data['search'] = '';
		}

		$data['action'] = $this->url->link('product/search', '', true);

		// Розумний AJAX-пошук
		$data['ajax_url']          = $this->url->link('common/ajax_search/search', '', true);
		$data['text_products']     = $this->language->get('text_products');
		$data['text_categories']   = $this->language->get('text_categories');
		$data['text_brands']       = $this->language->get('text_brands');
		$data['text_show_all']     = $this->language->get('text_show_all');
		$data['text_search_empty'] = $this->language->get('text_search_empty');

		return $this->load->view('common/search', $data);
	}
}