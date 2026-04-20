<?php
class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}
		$language_id = (int)$this->config->get('config_language_id');

		if (is_array($this->document->getTitle())) {
		    $titles = $this->document->getTitle();
		    $data['title'] = $titles[$language_id] ?? '';
		} else {
		    $data['title'] = $this->document->getTitle();
		}

		if (is_array($this->document->getDescription())) {
		    $descriptions = $this->document->getDescription();
		    $data['description'] = $descriptions[$language_id] ?? '';
		} else {
		    $data['description'] = $this->document->getDescription();
		}



		$data['base'] = $server;
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['wishlist_total'] = $this->cart->getTotalWishlist();
		$data['cart_total']     = $this->cart->countProducts();


		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['latest'] = $this->url->link('product/latest');
		$data['shop'] = $this->url->link('product/shop');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['special'] = $this->url->link('product/special');
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		
		$data['menu'] = $this->load->controller('common/menu');
		$data['email'] = $this->config->get('config_email');
		$data['phones'] = [];

		$phones = [
		    $this->config->get('config_telephone'),
		    $this->config->get('config_fax'),
		];

		foreach ($phones as $phone) {
		    $phone = trim((string)$phone);
		    if ($phone === '') continue;

		    $data['phones'][] = [
		        'href'  => 'tel:' . preg_replace('/\D+/', '', $phone),
		        'label' => $phone,
		    ];
		}



		return $this->load->view('common/header', $data);
	}
}
