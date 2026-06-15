<?php
class ControllerAccountAccount extends Controller {
	public function index() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/account', '', true);

			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->language('account/account');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		} 
		
		$this->load->model('account/customer');
		$customer_info = $this->model_account_customer->getCustomer($this->customer->getId());

		
		if (!empty($customer_info)) {
		    $this->load->model('account/customer_group');
		    $group_info = $this->model_account_customer_group->getCustomerGroup($customer_info['customer_group_id']);
		    if ($group_info) {
		        $data['role'] = $group_info['name'];
		    }
		}
		else {
			$data['role'] = '';
		}

		$data['discount'] = 0;
		if (!empty($group_info) && isset($group_info['discount'])) {
		    $data['discount'] = (float)$group_info['discount'];
		}
		$data['password'] = $this->load->controller('account/password');
		$data['edit'] = $this->load->controller('account/edit');
		$data['change_phone'] = $this->load->controller('account/change_phone');
		$data['credit_cards'] = array();

		$this->load->language('account/address');
		$this->load->model('account/address');

		$data['addresses'] = array();
		$data['text_address_empty'] = $this->language->get('text_empty');
		$data['button_new_address'] = $this->language->get('button_new_address');
		$data['button_edit'] = $this->language->get('button_edit');
		$data['button_delete'] = $this->language->get('button_delete');
		$data['text_confirm'] = $this->language->get('text_confirm');

		if ($data['button_new_address'] == 'button_new_address') {
			$data['button_new_address'] = 'Додати адресу';
		}

		if ($data['button_edit'] == 'button_edit') {
			$data['button_edit'] = 'Редагувати';
		}

		if ($data['button_delete'] == 'button_delete') {
			$data['button_delete'] = 'Видалити';
		}

		if ($data['text_confirm'] == 'text_confirm') {
			$data['text_confirm'] = 'Видалити адресу?';
		}

		$addresses = $this->model_account_address->getAddresses();

		foreach ($addresses as $address) {
			if ($address['address_format']) {
				$format = $address['address_format'];
			} else {
				$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
			}

			$find = array(
				'{firstname}',
				'{lastname}',
				'{company}',
				'{address_1}',
				'{address_2}',
				'{city}',
				'{postcode}',
				'{zone}',
				'{zone_code}',
				'{country}'
			);

			$replace = array(
				'firstname' => $address['firstname'],
				'lastname'  => $address['lastname'],
				'company'   => $address['company'],
				'address_1' => $address['address_1'],
				'address_2' => $address['address_2'],
				'city'      => $address['city'],
				'postcode'  => $address['postcode'],
				'zone'      => $address['zone'],
				'zone_code' => $address['zone_code'],
				'country'   => $address['country']
			);

			$formatted_address = str_replace(array("\r\n", "\r", "\n"), '<br>', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br>', trim(str_replace($find, $replace, $format))));

			$data['addresses'][] = array(
				'address_id' => $address['address_id'],
				'address'    => $formatted_address,
				'address_plain' => htmlspecialchars(trim(strip_tags($formatted_address)), ENT_QUOTES, 'UTF-8'),
				'update'     => $this->url->link('account/address/edit', 'address_id=' . $address['address_id'], true),
				'delete'     => $this->url->link('account/address/delete', 'address_id=' . $address['address_id'], true)
			);
		}

		$data['address_add'] = $this->url->link('account/address/add', '', true);

		$this->load->language('account/download');
		$this->load->model('account/download');

		$data['text_files_heading'] = $this->language->get('text_downloads');
		$data['text_empty'] = $this->language->get('text_empty');
		$data['downloads'] = array();

		$downloads = $this->model_account_download->getDownloads(0, 6);

		foreach ($downloads as $download) {
			if (file_exists(DIR_DOWNLOAD . $download['filename'])) {
				$size = filesize(DIR_DOWNLOAD . $download['filename']);
				$suffix = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
				$i = 0;

				while (($size / 1024) > 1) {
					$size = $size / 1024;
					$i++;
				}

				$data['downloads'][] = array(
					'date_added'  => date($this->language->get('date_format_short'), strtotime($download['date_added'])),
					'name'        => $download['name'],
					'description' => sprintf('%s · %s', date($this->language->get('date_format_short'), strtotime($download['date_added'])), round(substr($size, 0, strpos($size, '.') + 4), 2) . $suffix[$i]),
					'href'        => $this->url->link('account/download/download', 'download_id=' . $download['download_id'], true)
				);
			}
		}
		
		$files = glob(DIR_APPLICATION . 'controller/extension/credit_card/*.php');
		
		foreach ($files as $file) {
			$code = basename($file, '.php');
			
			if ($this->config->get('payment_' . $code . '_status') && $this->config->get('payment_' . $code . '_card')) {
				$this->load->language('extension/credit_card/' . $code, 'extension');

				$data['credit_cards'][] = array(
					'name' => $this->language->get('extension')->get('heading_title'),
					'href' => $this->url->link('extension/credit_card/' . $code, '', true)
				);
			}
		}
		
		$data['wishlist'] = $this->url->link('account/wishlist');
		$data['order'] = $this->url->link('account/order', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		if ($this->config->get('total_reward_status')) {
			$data['reward'] = $this->url->link('account/reward', '', true);
		} else {
			$data['reward'] = '';
		}		
		
		$data['return'] = $this->url->link('account/return', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);
		$data['recurring'] = $this->url->link('account/recurring', '', true);
		
		$this->load->model('account/customer');
		
		$affiliate_info = $this->model_account_customer->getAffiliate($this->customer->getId());
		
		if (!$affiliate_info) {	
			$data['affiliate'] = $this->url->link('account/affiliate/add', '', true);
		} else {
			$data['affiliate'] = $this->url->link('account/affiliate/edit', '', true);
		}
		
		if ($affiliate_info) {		
			$data['tracking'] = $this->url->link('account/tracking', '', true);
		} else {
			$data['tracking'] = '';
		}
		
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		
		$this->response->setOutput($this->load->view('account/account', $data));
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
}
