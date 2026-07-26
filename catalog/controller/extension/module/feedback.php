<?php
class ControllerExtensionModuleFeedback extends Controller {

    public function index($setting = []) {
        $this->load->language('extension/module/feedback');

        // ========= Заголовок з модуля =========
        $heading_title = '';
        if (isset($setting['name']) && is_array($setting['name'])) {
            $language_id = (int)$this->config->get('config_language_id');
            $heading_title = $setting['name'][$language_id] ?? reset($setting['name']);
        } elseif (isset($setting['name'])) {
            $heading_title = $setting['name'];
        }
        $data['heading_title'] = $heading_title;


        $json = [];

        // Якщо форма надіслана методом POST
        if ($this->request->server['REQUEST_METHOD'] == 'POST') {

            $name    = trim($this->request->post['name'] ?? '');
            $email   = trim($this->request->post['email'] ?? '');
            $telephone = trim($this->request->post['telephone'] ?? '');
            $message = trim($this->request->post['message'] ?? '');

            // ==========================
            // Валідація
            // ==========================
            if (utf8_strlen($name) < 1 || utf8_strlen($name) > 64) {
                $json['error']['name'] = $this->language->get('error_name');
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $json['error']['email'] = $this->language->get('error_email');
            }

            if (utf8_strlen($telephone) < 6 || utf8_strlen($telephone) > 32) {
                $json['error']['telephone'] = $this->language->get('error_telephone');
            }

            if (utf8_strlen($message) < 5 || utf8_strlen($message) > 500) {
                $json['error']['message'] = $this->language->get('error_message');
            }

            // ==========================
            // Якщо помилок немає, надсилаємо лист
            // ==========================
            if (!$json) {
                $mail = new Mail($this->config->get('config_mail_engine'));
                $mail->parameter = $this->config->get('config_mail_parameter');
                $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
                $mail->smtp_username = $this->config->get('config_mail_smtp_username');
                $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
                $mail->smtp_port     = $this->config->get('config_mail_smtp_port');
                $mail->smtp_timeout  = $this->config->get('config_mail_smtp_timeout');

                $mail->setTo($this->config->get('config_email'));
                $mail->setFrom($email);
                $mail->setSender(html_entity_decode($name, ENT_QUOTES, 'UTF-8'));
                $mail->setSubject(sprintf($this->language->get('email_subject'), html_entity_decode($name, ENT_QUOTES, 'UTF-8')));
                $mail->setText("Имя: $name\nEmail: $email\nТелефон: $telephone\n\nСообщение:\n$message");
                $mail->send();

                $json['success'] = $this->language->get('text_success');
            }

            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($json));
            return;
        }

        // ==========================
        // Відображення форми
        // ==========================
        $data['action'] = $this->url->link('extension/module/feedback', '', true);

        $data['name'] = $this->customer->getFirstName() ?? '';
        $data['email'] = $this->customer->getEmail() ?? '';
        $data['telephone'] = $this->customer->getTelephone() ?? '';
        $data['message'] = '';

        $this->response->setOutput($this->load->view('extension/module/feedback', $data));
    }
}
