<?php
class ControllerInformationPaymentDelivery extends Controller {
	public function index() {
		$this->load->language('information/payment_delivery');

		$this->document->setTitle($this->language->get('heading_title'));
		$this->document->setDescription($this->language->get('meta_description'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('information/payment_delivery', '', true)
		);

		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_intro'] = $this->language->get('text_intro');
		$data['text_payment'] = $this->language->get('text_payment');
		$data['text_delivery'] = $this->language->get('text_delivery');
		$data['payment_methods'] = $this->language->get('payment_methods');
		$data['delivery_methods'] = $this->language->get('delivery_methods');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/payment_delivery', $data));
	}
}
