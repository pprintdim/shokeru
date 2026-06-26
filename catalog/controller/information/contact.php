<?php
class ControllerInformationContact extends Controller {
	private $error = array();
	private function getLangText($value, $language_id) {

	    // якщо мультимовне поле
	    if (is_array($value) && isset($value[$language_id])) {
	        $value = $value[$language_id];
	    }

	    // гарантуємо string
	    $value = (string)$value;

	    // decode html
	    $value = html_entity_decode($value, ENT_QUOTES, 'UTF-8');

	    // зберігаємо переноси рядків
	    return nl2br($value);
	}
	public function index() {
		$this->load->language('information/contact');

		$this->document->setTitle($this->language->get('heading_title'));

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$mail = new Mail($this->config->get('config_mail_engine'));
			$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
			$mail->smtp_username = $this->config->get('config_mail_smtp_username');
			$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
			$mail->smtp_port = $this->config->get('config_mail_smtp_port');
			$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');
			$mail->setTo($this->config->get('config_email'));
			$mail->setFrom($this->config->get('config_email'));
			$mail->setReplyTo($this->request->post['email']);
			$mail->setSender(html_entity_decode($this->request->post['name'], ENT_QUOTES, 'UTF-8'));
			$mail->setSubject(html_entity_decode(sprintf($this->language->get('email_subject'), $this->request->post['name']), ENT_QUOTES, 'UTF-8'));
			$mail->setText(
				$this->language->get('entry_name') . ': ' . $this->request->post['name'] . "\n" .
				$this->language->get('entry_telephone') . ': ' . $this->request->post['telephone'] . "\n" .
				$this->language->get('entry_email') . ': ' . $this->request->post['email'] . "\n\n" .
				$this->request->post['enquiry']
			);
			$mail->send();

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('information/contact'));
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('information/contact')
		);

		$data['button_submit'] = $this->language->get('button_submit');
		$data['action'] = $this->url->link('information/contact');
		$data['success'] = '';

		$data['store'] = $this->config->get('config_name');

		$data['geocode'] = $this->config->get('config_geocode');
		$data['geocode_hl'] = $this->config->get('config_language');
		$data['email'] = $this->config->get('config_email');
		$data['facebook'] = $this->config->get('config_facebook');
		$data['instagram'] = $this->config->get('config_instagram');

		$text_keys = array(
			'text_location',
			'text_address',
			'text_telephone',
			'text_open',
			'text_email_note',
			'text_working_days',
			'text_messengers',
			'text_social_note',
			'text_write_us',
			'text_write_us_note',
			'text_privacy_note',
			'text_socials',
			'text_faq_title',
			'text_faq_note',
			'text_faq_delivery',
			'text_faq_delivery_answer',
			'text_faq_warranty',
			'text_faq_warranty_answer',
			'text_faq_payment',
			'text_faq_payment_answer',
			'text_cta_title',
			'text_cta_note',
			'text_call',
			'entry_name',
			'entry_email',
			'entry_telephone',
			'entry_enquiry'
		);

		foreach ($text_keys as $key) {
			$data[$key] = $this->language->get($key);
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = strip_tags($this->session->data['success']);
			unset($this->session->data['success']);
		}

		$data['error_warning'] = '';
		$data['error_name'] = $this->error['name'] ?? '';
		$data['error_email'] = $this->error['email'] ?? '';
		$data['error_telephone'] = $this->error['telephone'] ?? '';
		$data['error_enquiry'] = $this->error['enquiry'] ?? '';
		$data['error_captcha'] = $this->error['captcha'] ?? '';

		if ($data['error_name'] || $data['error_email'] || $data['error_telephone'] || $data['error_enquiry'] || $data['error_captcha']) {
			$data['error_warning'] = $this->language->get('error_warning');
		}

		$data['name'] = $this->request->post['name'] ?? '';
		$data['telephone'] = $this->request->post['telephone'] ?? '';
		$data['email_value'] = $this->request->post['email'] ?? '';
		$data['enquiry'] = $this->request->post['enquiry'] ?? '';

		$language_id = (int)$this->config->get('config_language_id');

		$data['address'] = $this->getLangText(
		    $this->config->get('config_address'),
		    $language_id
		);

		$data['open'] = $this->getLangText(
		    $this->config->get('config_open'),
		    $language_id
		);

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

		
		$data['locations'] = array();

		$this->load->model('localisation/location');
		$this->load->model('tool/image');

		foreach((array)$this->config->get('config_location') as $location_id) {
			$location_info = $this->model_localisation_location->getLocation($location_id);

			if ($location_info) {
				if ($location_info['image']) {
					$image = $this->model_tool_image->resize($location_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_location_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_location_height'));
				} else {
					$image = false;
				}

				$data['locations'][] = array(
					'location_id' => $location_info['location_id'],
					'name'        => $location_info['name'],
					'address'     => nl2br($location_info['address']),
					'geocode'     => $location_info['geocode'],
					'telephone'   => $location_info['telephone'],
					'fax'         => $location_info['fax'],
					'image'       => $image,
					'open'        => nl2br($location_info['open']),
					'comment'     => $location_info['comment']
				);
			}
		}

		if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('contact', (array)$this->config->get('config_captcha_page'))) {
			$data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'), $this->error);
		} else {
			$data['captcha'] = '';
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/contact', $data));
	}

	protected function validate() {
		if ((utf8_strlen(trim($this->request->post['name'] ?? '')) < 3) || (utf8_strlen(trim($this->request->post['name'] ?? '')) > 32)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if (!filter_var($this->request->post['email'] ?? '', FILTER_VALIDATE_EMAIL)) {
			$this->error['email'] = $this->language->get('error_email');
		}

		$telephone = preg_replace('/\D+/', '', $this->request->post['telephone'] ?? '');

		if (utf8_strlen($telephone) < 10 || utf8_strlen($telephone) > 15) {
			$this->error['telephone'] = $this->language->get('error_telephone');
		}

		if ((utf8_strlen(trim($this->request->post['enquiry'] ?? '')) < 10) || (utf8_strlen(trim($this->request->post['enquiry'] ?? '')) > 3000)) {
			$this->error['enquiry'] = $this->language->get('error_enquiry');
		}

		if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('contact', (array)$this->config->get('config_captcha_page'))) {
			$captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

			if ($captcha) {
				$this->error['captcha'] = $captcha;
			}
		}

		return !$this->error;
	}
}
