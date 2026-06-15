<?php
class ControllerInformationAbout extends Controller {
	public function index() {
		$this->load->language('information/information');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$default_title = 'Про нас';

		$this->document->setTitle($default_title);

		$data['breadcrumbs'][] = array(
			'text' => $default_title,
			'href' => $this->url->link('information/about', '', true)
		);

		$data['heading_title'] = $default_title;
		$data['description'] = '';

		$about_domain_name = parse_url($this->config->get('config_url'), PHP_URL_HOST);

		if (!$about_domain_name) {
			$about_domain_name = parse_url(HTTP_SERVER, PHP_URL_HOST);
		}

		if (!$about_domain_name) {
			$about_domain_name = $this->config->get('config_name');
		}

		$data['about_domain_name'] = preg_replace('/^www\./i', '', (string)$about_domain_name);
		$data['about_page_title'] = sprintf($this->language->get('text_about_page_title'), $data['about_domain_name']);
		$data['text_about_page_descr'] = $this->language->get('text_about_page_descr');

		if ($this->config->get('config_about_image') && is_file(DIR_IMAGE . $this->config->get('config_about_image'))) {
			$server = $this->request->server['HTTPS'] ? $this->config->get('config_ssl') : $this->config->get('config_url');
			$data['about_image'] = $server . 'image/' . $this->config->get('config_about_image');
		} else {
			$data['about_image'] = '';
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/about', $data));
	}
}
