<?php
class ControllerAccountPassword extends Controller {
    public function index() {
	    if (!$this->customer->isLogged()) {
	        $this->session->data['redirect'] = $this->url->link('account/password', '', true);
	        $this->response->redirect($this->url->link('account/login', '', true));
	    }

	    $this->load->language('account/password');

	    $data['heading_title']      = $this->language->get('heading_title');
	    $data['entry_old_password'] = $this->language->get('entry_old_password');
	    $data['entry_password']     = $this->language->get('entry_password');
	    $data['entry_confirm']      = $this->language->get('entry_confirm');
	    $data['text_success']       = $this->language->get('text_success');
	    $data['error_confirm']      = $this->language->get('error_confirm');
	    $data['button_close']       = $this->language->get('button_close') ?: 'Закрити';

	    // поточний пароль (розшифрований) — автозаповнення поля старого пароля власнику
	    require_once(DIR_SYSTEM . 'library/passvault.php');
	    $q = $this->db->query("SELECT password_enc FROM `" . DB_PREFIX . "customer` WHERE customer_id = '" . (int)$this->customer->getId() . "'");
	    $data['current_password'] = $q->num_rows ? PassVault::dec($q->row['password_enc'], (string)$this->config->get('config_encryption')) : '';

	    return $this->load->view('account/password', $data);
	}


    public function changePassword() {
        $json = [];

        if (!$this->customer->isLogged()) {
            $json['error'] = 'Користувач не авторизований';
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($json));
            return;
        }

        $this->load->language('account/password');
        $this->load->model('account/customer');

        $old_password = $this->request->post['old_password'] ?? '';
        $new_password = $this->request->post['password'] ?? '';
        $confirm      = $this->request->post['confirm'] ?? '';

        $customer_info = $this->model_account_customer->getCustomer($this->customer->getId());

        // Перевірка старого пароля
        $hashed_old = sha1($customer_info['salt'] . sha1($customer_info['salt'] . sha1($old_password)));
        if ($hashed_old !== $customer_info['password']) {
            $json['error']['old_password'] = $this->language->get('error_old_password') ?? 'Старий пароль невірний';
        }

        // Перевірка нового пароля
        if (utf8_strlen($new_password) < 4 || utf8_strlen($new_password) > 40) {
            $json['error']['password'] = $this->language->get('error_password') ?? 'Пароль має бути від 4 до 40 символів';
        }

        // Підтвердження пароля
        if ($new_password !== $confirm) {
            $json['error']['confirm'] = $this->language->get('error_confirm') ?? 'Паролі не співпадають';
        }

        // Якщо немає помилок — оновлюємо пароль
        if (empty($json['error'])) {
            $this->model_account_customer->editPassword($this->customer->getEmail(), $new_password);

            // зберегти оборотно для показу власнику
            require_once(DIR_SYSTEM . 'library/passvault.php');
            $enc = PassVault::enc($new_password, (string)$this->config->get('config_encryption'));
            $this->db->query("UPDATE `" . DB_PREFIX . "customer` SET password_enc = '" . $this->db->escape($enc) . "' WHERE customer_id = '" . (int)$this->customer->getId() . "'");

            $json['success'] = $this->language->get('text_success') ?? 'Пароль успішно змінено';
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
