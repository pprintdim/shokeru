<?php
class ControllerCheckoutShippingMethod extends Controller {
	public function index() {
		$this->load->language('checkout/checkout');

		if (isset($this->session->data['shipping_address'])) {
			// Shipping Methods
			$method_data = array();

			$this->load->model('setting/extension');

			$results = $this->model_setting_extension->getExtensions('shipping');

			foreach ($results as $result) {
				if ($this->config->get('shipping_' . $result['code'] . '_status')) {
					$this->load->model('extension/shipping/' . $result['code']);

					$quote = $this->{'model_extension_shipping_' . $result['code']}->getQuote($this->session->data['shipping_address']);

					if ($quote) {
						$method_data[$result['code']] = array(
							'title'      => $quote['title'],
							'quote'      => $quote['quote'],
							'sort_order' => $quote['sort_order'],
							'error'      => $quote['error']
						);
					}
				}
			}

			$sort_order = array();

			foreach ($method_data as $key => $value) {
				$sort_order[$key] = $value['sort_order'];
			}

			array_multisort($sort_order, SORT_ASC, $method_data);

			$this->session->data['shipping_methods'] = $method_data;
		}

		if (!isset($this->session->data['shipping_address'])) {
			$data['error_warning'] = '';
		} elseif (empty($this->session->data['shipping_methods'])) {
			$data['error_warning'] = sprintf($this->language->get('error_no_shipping'), $this->url->link('information/contact'));
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['shipping_methods'])) {
			$data['shipping_methods'] = $this->session->data['shipping_methods'];
		} else {
			$data['shipping_methods'] = array();
		}

		if (!isset($this->session->data['shipping_method']) && $data['shipping_methods']) {
			$this->session->data['shipping_method'] = $this->getDefaultShippingQuote($data['shipping_methods']);
		}

		if (isset($this->session->data['shipping_method']['code'])) {
			$data['code'] = $this->session->data['shipping_method']['code'];
		} else {
			$data['code'] = '';
		}

		if (isset($this->session->data['comment'])) {
			$data['comment'] = $this->session->data['comment'];
		} else {
			$data['comment'] = '';
		}

		if (isset($this->session->data['np_delivery'])) {
			$data['np_delivery'] = $this->session->data['np_delivery'];
		} else {
			$data['np_delivery'] = array(
				'type'              => 'np_branch',
				'city_ref'          => '',
				'city_name'         => '',
				'warehouse_ref'     => '',
				'warehouse_name'    => '',
				'street'            => '',
				'house'             => '',
				'courier_city'      => '',
				'courier_city_name' => '',
				'sc_city'           => '',
				'sc_address'        => ''
			);
		}
		
		$this->response->setOutput($this->load->view('checkout/shipping_method', $data));
	}

	public function save() {
		$this->load->language('checkout/checkout');

		$json = array();

		// Validate if shipping is required. If not the customer should not have reached this page.
		if (!$this->cart->hasShipping()) {
			$json['redirect'] = $this->url->link('checkout/checkout', '', true);
		}

		// Validate if shipping address has been set.
		if (!isset($this->session->data['shipping_address'])) {
			$json['redirect'] = $this->url->link('checkout/checkout', '', true);
		}

		// Validate cart has products and has stock.
		if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
			$json['redirect'] = $this->url->link('checkout/cart');
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
				$json['redirect'] = $this->url->link('checkout/cart');

				break;
			}
		}

		$shipping_quote = null;

		if (!empty($this->request->post['shipping_method'])) {
			$shipping = explode('.', $this->request->post['shipping_method']);

			if (isset($shipping[0]) && isset($shipping[1]) && isset($this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]])) {
				$shipping_quote = $this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]];
			}
		}

		if (!$shipping_quote && !empty($this->session->data['shipping_method']['code'])) {
			$shipping = explode('.', $this->session->data['shipping_method']['code']);

			if (isset($shipping[0]) && isset($shipping[1]) && isset($this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]])) {
				$shipping_quote = $this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]];
			}
		}

		if (!$shipping_quote && !empty($this->session->data['shipping_methods'])) {
			$shipping_quote = $this->getDefaultShippingQuote($this->session->data['shipping_methods']);
		}

		if (!$shipping_quote) {
			$json['error']['warning'] = $this->language->get('error_shipping');
		}

		$np_type = isset($this->request->post['np_delivery_type']) ? strip_tags($this->request->post['np_delivery_type']) : '';

		if (!$json && $np_type) {
			if ($np_type == 'np_branch') {
				if (empty($this->request->post['np_city_ref']) || empty($this->request->post['np_city_name'])) {
					$json['error']['warning'] = 'Оберіть місто для доставки Новою Поштою.';
				} elseif (empty($this->request->post['np_warehouse_ref']) || empty($this->request->post['np_warehouse_name'])) {
					$json['error']['warning'] = 'Оберіть відділення Нової Пошти.';
				}
			} elseif ($np_type == 'np_courier') {
				if (empty($this->request->post['np_courier_city_ref']) || empty($this->request->post['np_courier_city_name'])) {
					$json['error']['warning'] = 'Оберіть місто для кур\'єрської доставки Новою Поштою.';
				} elseif (empty($this->request->post['np_street'])) {
					$json['error']['warning'] = 'Вкажіть вулицю для кур\'єрської доставки.';
				} elseif (empty($this->request->post['np_house'])) {
					$json['error']['warning'] = 'Вкажіть будинок або квартиру для кур\'єрської доставки.';
				}
			} elseif ($np_type == 'store_courier') {
				if (empty($this->request->post['sc_city'])) {
					$json['error']['warning'] = 'Вкажіть місто для доставки кур\'єром магазину.';
				} elseif (empty($this->request->post['sc_address'])) {
					$json['error']['warning'] = 'Вкажіть адресу для доставки кур\'єром магазину.';
				}
			}
		}

		if (!$json) {
			$this->session->data['shipping_method'] = $shipping_quote;

			$this->session->data['comment'] = strip_tags($this->request->post['comment']);

			if (!empty($this->request->post['np_delivery_type'])) {
				$np = [
					'type'           => strip_tags($this->request->post['np_delivery_type']),
					'city_ref'       => isset($this->request->post['np_city_ref'])       ? strip_tags($this->request->post['np_city_ref'])       : '',
					'city_name'      => isset($this->request->post['np_city_name'])      ? strip_tags($this->request->post['np_city_name'])      : '',
					'warehouse_ref'  => isset($this->request->post['np_warehouse_ref'])  ? strip_tags($this->request->post['np_warehouse_ref'])  : '',
					'warehouse_name' => isset($this->request->post['np_warehouse_name']) ? strip_tags($this->request->post['np_warehouse_name']) : '',
					'street'         => isset($this->request->post['np_street'])         ? strip_tags($this->request->post['np_street'])         : '',
					'house'          => isset($this->request->post['np_house'])          ? strip_tags($this->request->post['np_house'])          : '',
					'courier_city'   => isset($this->request->post['np_courier_city_ref']) ? strip_tags($this->request->post['np_courier_city_ref']) : '',
					'courier_city_name' => isset($this->request->post['np_courier_city_name']) ? strip_tags($this->request->post['np_courier_city_name']) : '',
					'sc_city'        => isset($this->request->post['sc_city'])           ? strip_tags($this->request->post['sc_city'])           : '',
					'sc_address'     => isset($this->request->post['sc_address'])        ? strip_tags($this->request->post['sc_address'])        : '',
				];
				$this->session->data['np_delivery'] = $np;

				$lines = [];
				$typeLabels = [
					'np_branch'    => 'НП Відділення',
					'np_courier'   => 'НП Кур\'єр',
					'store_courier'=> 'Кур\'єр магазину',
					'other'        => 'Інша доставка',
				];
				$lines[] = isset($typeLabels[$np['type']]) ? $typeLabels[$np['type']] : $np['type'];
				if ($np['city_name'])      $lines[] = 'Місто: ' . $np['city_name'];
				if ($np['warehouse_name']) $lines[] = 'Відділення: ' . $np['warehouse_name'];
				if ($np['courier_city_name']) $lines[] = 'Місто: ' . $np['courier_city_name'];
				if ($np['street'])         $lines[] = 'Вул. ' . $np['street'] . ($np['house'] ? ', ' . $np['house'] : '');
				if ($np['sc_city'])        $lines[] = 'Місто: ' . $np['sc_city'];
				if ($np['sc_address'])     $lines[] = 'Адреса: ' . $np['sc_address'];

				$np_text = implode('; ', $lines);
				if ($np_text) {
					$this->session->data['comment'] = ($this->session->data['comment'] ? $this->session->data['comment'] . "\n" : '') . $np_text;
				}
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	private function getDefaultShippingQuote($shipping_methods) {
		foreach ($shipping_methods as $shipping_method) {
			if (!empty($shipping_method['quote']) && is_array($shipping_method['quote'])) {
				foreach ($shipping_method['quote'] as $quote) {
					return $quote;
				}
			}
		}

		return null;
	}
}
