<?php
class ControllerCheckoutCheckout extends Controller {
	private function isValidPhone($value) {
		$digits = preg_replace('/\D+/', '', (string)$value);

		return utf8_strlen($digits) >= 10 && utf8_strlen($digits) <= 15;
	}

	public function index() {
		// Validate cart has products and has stock.
		if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
			$this->response->redirect($this->url->link('checkout/cart'));
		}

		// Validate minimum quantity requirements.
		$products = $this->cart->getProducts();

		foreach ($products as $product) {
			$product_total = 0;

			foreach ($products as $product_2) {
				if ($product_2['product_id'] == $product['product_id']) {
					$product_total += $product_2['quantity'];
				}
			}

			if ($product['minimum'] > $product_total) {
				$this->response->redirect($this->url->link('checkout/cart'));
			}
		}

		$this->load->language('checkout/checkout');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js');
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');
		$this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');

		// Required by klarna
		if ($this->config->get('payment_klarna_account') || $this->config->get('payment_klarna_invoice')) {
			$this->document->addScript('http://cdn.klarna.com/public/kitt/toc/v1.0/js/klarna.terms.min.js');
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_cart'),
			'href' => $this->url->link('checkout/cart')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('checkout/checkout', '', true)
		);

		$data['text_checkout_option'] = 'Інформація про замовлення';
		$data['text_checkout_account'] = 'Інформація про замовлення';
		$data['text_checkout_payment_address'] = 'Інформація про замовлення';
		$data['text_checkout_shipping_address'] = 'Інформація про замовлення';
		$data['text_checkout_shipping_method'] = 'Інформація про замовлення';
		$data['text_checkout_payment_method'] = 'Спосіб оплати';
		$data['text_checkout_confirm'] = 'Контактні дані отримувача замовлення';

		if (isset($this->session->data['error'])) {
			$data['error_warning'] = $this->session->data['error'];
			unset($this->session->data['error']);
		} else {
			$data['error_warning'] = '';
		}

		$data['logged'] = $this->customer->isLogged();

		if (isset($this->session->data['account'])) {
			$data['account'] = $this->session->data['account'];
		} else {
			$data['account'] = '';
		}

		$data['shipping_required'] = $this->cart->hasShipping();

		// Order summary for themed checkout layout
		$this->load->model('setting/extension');
		$this->load->model('tool/image');

		$totals = array();
		$taxes = $this->cart->getTaxes();
		$total = 0;

		$total_data = array(
			'totals' => &$totals,
			'taxes'  => &$taxes,
			'total'  => &$total
		);

		if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
			$sort_order = array();
			$results = $this->model_setting_extension->getExtensions('total');

			foreach ($results as $key => $value) {
				$sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
			}

			array_multisort($sort_order, SORT_ASC, $results);

			foreach ($results as $result) {
				if ($this->config->get('total_' . $result['code'] . '_status')) {
					$this->load->model('extension/total/' . $result['code']);
					$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
				}
			}

			$sort_order = array();

			foreach ($totals as $key => $value) {
				$sort_order[$key] = $value['sort_order'];
			}

			array_multisort($sort_order, SORT_ASC, $totals);
		}

		$data['checkout_products'] = array();
		$data['checkout_total_quantity'] = 0;

		foreach ($products as $product) {
			$data['checkout_total_quantity'] += (int)$product['quantity'];

			if ($product['image']) {
				$image = $this->model_tool_image->resize($product['image'], 96, 96);
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', 96, 96);
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$unit_price = $this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax'));
				$price = $this->currency->format($unit_price, $this->session->data['currency']);
				$product_total = $this->currency->format($unit_price * $product['quantity'], $this->session->data['currency']);
			} else {
				$price = false;
				$product_total = false;
			}

			$data['checkout_products'][] = array(
				'product_id' => $product['product_id'],
				'name'       => $product['name'],
				'thumb'      => $image,
				'quantity'   => $product['quantity'],
				'price'      => $price,
				'total'      => $product_total,
				'href'       => $this->url->link('product/product', 'product_id=' . $product['product_id'])
			);
		}

		$data['checkout_totals'] = array();
		$data['checkout_total'] = '';

		foreach ($totals as $index => $total_row) {
			$formatted_total = $this->currency->format($total_row['value'], $this->session->data['currency']);

			$data['checkout_totals'][] = array(
				'title' => $total_row['title'],
				'text'  => $formatted_total
			);

			if ($index === count($totals) - 1) {
				$data['checkout_total'] = $formatted_total;
			}
		}

		$data['text_order_details'] = 'Інформація про замовлення';
		$data['text_checkout_submit'] = 'Оформити замовлення';
		$data['text_checkout_go_confirm'] = 'Перейти до підтвердження';
		$data['cart_link'] = $this->url->link('checkout/cart');
		$data['delivery_summary'] = '';
		$data['recipient_data'] = isset($this->session->data['recipient_data']) ? $this->session->data['recipient_data'] : array(
			'type' => 'me',
			'firstname' => '',
			'lastname' => '',
			'patronymic' => '',
			'telephone' => ''
		);
		$data['checkout_option_html'] = '';
		$data['payment_address_html'] = '';
		$data['shipping_address_html'] = '';
		$data['shipping_method_html'] = '';
		$data['payment_method_html'] = '';
		$data['checkout_confirm_html'] = '';
		$data['shipping_method_pending_html'] = '<div class="checkout-step-placeholder"><p class="checkout-pane__descr">Заповніть адресу доставки, щоб побачити доступні способи доставки.</p></div>';
		$data['payment_method_pending_html'] = '<div class="checkout-step-placeholder"><p class="checkout-pane__descr">Заповніть контактні дані та доставку, щоб побачити доступні способи оплати.</p></div>';

		if (!$data['logged'] && empty($data['account'])) {
			$data['account'] = 'register';
			$this->session->data['account'] = 'register';
		}

		if (!$data['logged']) {
			$data['checkout_option_html'] = $this->load->controller('checkout/login');
			$data['payment_address_html'] = $this->load->controller($data['account'] == 'guest' ? 'checkout/guest' : 'checkout/register');
		} else {
			$this->load->model('account/address');

			if (!isset($this->session->data['payment_address']) && $this->customer->getAddressId()) {
				$this->session->data['payment_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
			}

			if ($data['shipping_required'] && !isset($this->session->data['shipping_address']) && $this->customer->getAddressId()) {
				$this->session->data['shipping_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
			}

			$data['payment_address_html'] = $this->load->controller('checkout/payment_address');
		}

		if ($data['shipping_required']) {
			if (!$data['logged'] && $data['account'] == 'guest') {
				$data['shipping_address_html'] = $this->load->controller('checkout/guest_shipping');
			} else {
				$data['shipping_address_html'] = $this->load->controller('checkout/shipping_address');
			}

			$data['shipping_method_html'] = $this->load->controller('checkout/shipping_method');
		}

		$data['payment_method_html'] = $this->load->controller('checkout/payment_method');

		// checkout/confirm loads via AJAX on submit only (prevents duplicate orders on page refresh)

		if (!empty($this->session->data['np_delivery'])) {
			$np = $this->session->data['np_delivery'];
			$labels = array(
				'np_branch'     => 'Самовивіз з відділення Нової Пошти',
				'np_courier'    => 'Кур\'єром Нової Пошти',
				'store_courier' => 'Кур\'єром магазину',
				'other'         => 'Інша служба доставки'
			);
			$parts = array();
			$parts[] = isset($labels[$np['type']]) ? $labels[$np['type']] : '';
			if (!empty($np['city_name'])) {
				$parts[] = $np['city_name'];
			}
			if (!empty($np['warehouse_name'])) {
				$parts[] = $np['warehouse_name'];
			}
			if (!empty($np['courier_city_name'])) {
				$parts[] = $np['courier_city_name'];
			}
			if (!empty($np['street'])) {
				$parts[] = trim($np['street'] . (!empty($np['house']) ? ', ' . $np['house'] : ''));
			}
			if (!empty($np['sc_city'])) {
				$parts[] = $np['sc_city'];
			}
			if (!empty($np['sc_address'])) {
				$parts[] = $np['sc_address'];
			}
			$data['delivery_summary'] = implode(' - ', array_filter($parts));
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('checkout/checkout', $data));
	}

	public function country() {
		$json = array();

		$this->load->model('localisation/country');

		$country_info = $this->model_localisation_country->getCountry($this->request->get['country_id']);

		if ($country_info) {
			$this->load->model('localisation/zone');

			$json = array(
				'country_id'        => $country_info['country_id'],
				'name'              => $country_info['name'],
				'iso_code_2'        => $country_info['iso_code_2'],
				'iso_code_3'        => $country_info['iso_code_3'],
				'address_format'    => $country_info['address_format'],
				'postcode_required' => $country_info['postcode_required'],
				'zone'              => $this->model_localisation_zone->getZonesByCountryId($this->request->get['country_id']),
				'status'            => $country_info['status']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function customfield() {
		$json = array();

		$this->load->model('account/custom_field');

		// Customer Group
		if (isset($this->request->get['customer_group_id']) && is_array($this->config->get('config_customer_group_display')) && in_array($this->request->get['customer_group_id'], $this->config->get('config_customer_group_display'))) {
			$customer_group_id = $this->request->get['customer_group_id'];
		} else {
			$customer_group_id = $this->config->get('config_customer_group_id');
		}

		$custom_fields = $this->model_account_custom_field->getCustomFields($customer_group_id);

		foreach ($custom_fields as $custom_field) {
			$json[] = array(
				'custom_field_id' => $custom_field['custom_field_id'],
				'required'        => $custom_field['required']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function saveRecipient() {
		$this->load->language('checkout/checkout');

		$json = array();
		$type = isset($this->request->post['recipient_type']) ? $this->request->post['recipient_type'] : 'me';

		$data = array(
			'type' => $type === 'me' ? 'me' : 'other',
			'firstname' => isset($this->request->post['recipient_firstname']) ? trim($this->request->post['recipient_firstname']) : '',
			'lastname' => isset($this->request->post['recipient_lastname']) ? trim($this->request->post['recipient_lastname']) : '',
			'patronymic' => isset($this->request->post['recipient_patronymic']) ? trim($this->request->post['recipient_patronymic']) : '',
			'telephone' => isset($this->request->post['recipient_telephone']) ? trim($this->request->post['recipient_telephone']) : ''
		);

		if ($data['type'] === 'other') {
			if (utf8_strlen($data['firstname']) < 1 || utf8_strlen($data['firstname']) > 32) {
				$json['error']['recipient_firstname'] = 'Вкажіть ім\'я отримувача.';
			}

			if (utf8_strlen($data['lastname']) < 1 || utf8_strlen($data['lastname']) > 32) {
				$json['error']['recipient_lastname'] = 'Вкажіть прізвище отримувача.';
			}

			if (!$this->isValidPhone($data['telephone'])) {
				$json['error']['recipient_telephone'] = 'Вкажіть телефон отримувача.';
			}
		}

		if (!$json) {
			$this->session->data['recipient_data'] = $data;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
