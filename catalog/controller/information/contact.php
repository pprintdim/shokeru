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

		$data['store'] = $this->config->get('config_name');

		$data['geocode'] = $this->config->get('config_geocode');
		$data['geocode_hl'] = $this->config->get('config_language');
		$data['email'] = $this->config->get('config_email');
		$data['facebook'] = $this->config->get('config_facebook');
		$data['instagram'] = $this->config->get('config_instagram');

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


		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/contact', $data));
	}
}
