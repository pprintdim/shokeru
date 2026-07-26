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

		$data['heading_title']    = $this->language->get('heading_title');
		$data['text_intro']       = $this->language->get('text_intro');
		$data['text_payment']     = $this->language->get('text_payment');
		$data['text_delivery']    = $this->language->get('text_delivery');
		$data['payment_methods']  = $this->language->get('payment_methods');
		$data['delivery_methods'] = $this->language->get('delivery_methods');

		// нові секції (нового дизайну)
		$data['text_free_badge']   = $this->language->get('text_free_badge');
		$data['text_payment_sub']  = $this->language->get('text_payment_sub');
		$data['text_delivery_sub'] = $this->language->get('text_delivery_sub');
		$data['text_steps_title']  = $this->language->get('text_steps_title');
		$data['text_steps_sub']    = $this->language->get('text_steps_sub');
		$data['steps']             = $this->language->get('steps');
		$data['text_info_title']   = $this->language->get('text_info_title');
		$data['text_info_text']    = $this->language->get('text_info_text');
		$data['text_faq_title']    = $this->language->get('text_faq_title');
		$data['faqs']              = $this->language->get('faqs');
		$data['text_cta_title']    = $this->language->get('text_cta_title');
		$data['text_cta_text']     = $this->language->get('text_cta_text');
		$data['telephone']         = $this->config->get('config_telephone');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/payment_delivery', $data));
	}
}
