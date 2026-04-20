<?php
class ControllerCommonUserPopup extends Controller {

    public function index() {
        // Завантажуємо мову
        $this->load->language('common/user_popup');

        $data['name'] = $this->config->get('config_name');

        $checkout_id = $this->config->get('config_checkout_id');
        $account_id  = $this->config->get('config_account_id');

        $link1 = '';
        $link2 = '';

        $this->load->model('catalog/information');

        if ($checkout_id) {
            $info = $this->model_catalog_information->getInformation($checkout_id);

            if ($info) {
                $link1 = '<a href="' . $this->url->link(
                    'information/information/agree',
                    'information_id=' . $checkout_id,
                    true
                ) . '" class="agree">' . $info['title'] . '</a>';
            }
        }

        if ($account_id) {
            $info = $this->model_catalog_information->getInformation($account_id);

            if ($info) {
                $link2 = '<a href="' . $this->url->link(
                    'information/information/agree',
                    'information_id=' . $account_id,
                    true
                ) . '" class="agree">' . $info['title'] . '</a>';
            }
        }

        if ($link1 || $link2) {
            $data['text_agree'] = sprintf(
                $this->language->get('text_agree'),
                $link1,
                $link2
            );
        } else {
            $data['text_agree'] = '';
        }

        $server = $this->request->server['HTTPS'] ? $this->config->get('config_ssl') : $this->config->get('config_url');

        $data['logo'] = is_file(DIR_IMAGE . $this->config->get('config_logo')) 
            ? $server . 'image/' . $this->config->get('config_logo') 
            : '';

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

        return $this->load->view('common/user_popup', $data);
    }

    public function register() {
        $this->load->language('common/user_popup');
        $json = [];

        if ($this->customer->isLogged()) {
            $json['error'] = $this->language->get('error_logged');
        }

        $this->load->model('account/customer');

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            $firstname = trim($this->request->post['firstname'] ?? '');
            $lastname  = trim($this->request->post['lastname'] ?? '');
            $email     = trim($this->request->post['email'] ?? '');
            $telephone = trim($this->request->post['telephone'] ?? '');
            $password  = $this->request->post['password'] ?? '';
            $accept   = $this->request->post['accept'] ?? '';
            $agree     = !empty($this->request->post['agree']);


            if (utf8_strlen($firstname) < 1 || utf8_strlen($firstname) > 32) {
                $json['error']['firstname'] = $this->language->get('error_firstname');
            }

            if (utf8_strlen($lastname) < 1 || utf8_strlen($lastname) > 32) {
                $json['error']['lastname'] = $this->language->get('error_lastname');
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $json['error']['email'] = $this->language->get('error_email_invalid');
            } elseif ($this->model_account_customer->getTotalCustomersByEmail($email)) {
                $json['error']['email'] = $this->language->get('error_email_exists');
            }

            if (utf8_strlen($telephone) < 10 || utf8_strlen($telephone) > 32) {
                $json['error']['telephone'] = $this->language->get('error_telephone');
            }

            if (utf8_strlen($password) < 4 || utf8_strlen($password) > 20) {
                $json['error']['password'] = $this->language->get('error_password');
            }

            if ($password != $accept) {
                $json['error']['accept'] = $this->language->get('error_confirm');
            }

            if (!$agree) {
                $json['error']['agree'] = $this->language->get('error_agree');
            }

            if (!$json) {
                
                $this->model_account_customer->addCustomer([
                    'firstname' => $firstname,
                    'lastname'  => $lastname,
                    'email'     => $email,
                    'telephone' => $telephone,
                    'password'  => $password,
                    'newsletter'=> 0,
                ]);

                $this->customer->login($email, $password);

                $json['success'] = $this->language->get('text_success');
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }



    public function login() {
        $this->load->language('common/user_popup');
        $this->load->model('account/customer');
        $json = [];

        // Якщо користувач вже залогінений
        if ($this->customer->isLogged()) {
            $json['error'] = $this->language->get('error_logged');
        }

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            $email    = trim($this->request->post['email']);
            $password = $this->request->post['password'];

            // Перевірка на порожні поля
            if (!$email || !$password) {
                $json['error'] = $this->language->get('error_login');
            }

            if (!$json) {
                // Перевірка кількості невдалих спроб
                $login_info = $this->model_account_customer->getLoginAttempts($email);

                if ($login_info && $login_info['total'] >= 5) { // можна змінити ліміт
                    $json['error'] = $this->language->get('error_attempts');
                } else {
                    if (!$this->customer->login($email, $password)) {
                        $this->model_account_customer->addLoginAttempt($email);
                        $json['error'] = $this->language->get('error_login');
                    } else {
                        $this->model_account_customer->deleteLoginAttempts($email);
                        $json['success'] = true; // просто успішний статус
                        $json['redirect'] = $this->url->link('account/account', '', true); // URL редіректу
                    }

                }
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }


}
