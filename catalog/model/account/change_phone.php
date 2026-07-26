<?php
class ModelAccountChangePhone extends Model {
	public function addCustomer($data) {
	    // Використовуємо групу з даних або стандартну
	    $customer_group_id = isset($data['customer_group_id']) ? (int)$data['customer_group_id'] : (int)$this->config->get('config_customer_group_id');

	    $this->load->model('account/customer_group');
	    $customer_group_info = $this->model_account_customer_group->getCustomerGroup($customer_group_id);

	    // Генеруємо соль і хеш пароля
	    $salt = token(9);
	    $password = isset($data['password']) ? $data['password'] : '';
	    $hashed_password = sha1($salt . sha1($salt . sha1($password)));

	    // Додаємо користувача
	    $this->db->query("INSERT INTO " . DB_PREFIX . "customer SET 
	        customer_group_id = '" . $customer_group_id . "',
	        store_id = '" . (int)$this->config->get('config_store_id') . "',
	        language_id = '" . (int)$this->config->get('config_language_id') . "',
	        firstname = '" . $this->db->escape($data['firstname']) . "',
	        lastname = '" . $this->db->escape($data['lastname']) . "',
	        email = '" . $this->db->escape($data['email']) . "',
	        telephone = '" . $this->db->escape($data['telephone']) . "',
	        custom_field = '" . $this->db->escape(isset($data['custom_field']['account']) ? json_encode($data['custom_field']['account']) : '') . "',
	        salt = '" . $this->db->escape($salt) . "',
	        password = '" . $this->db->escape($hashed_password) . "',
	        newsletter = '" . (isset($data['newsletter']) ? (int)$data['newsletter'] : 0) . "',
	        ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "',
	        status = '" . (int)!$customer_group_info['approval'] . "',
	        date_added = NOW()"
	    );

	    $customer_id = $this->db->getLastId();

	    // Якщо потрібне підтвердження нових користувачів
	    if ($customer_group_info['approval']) {
	        $this->db->query("INSERT INTO `" . DB_PREFIX . "customer_approval` SET customer_id = '" . (int)$customer_id . "', type = 'customer', date_added = NOW()");
	    }

	    return $customer_id;
	}

	public function loginByPhoneForce($telephone) {
	    $customer = $this->getCustomerByPhone($telephone);

	    if ($customer) {
	        // Встановлюємо сесію напряму
	        $this->session->data['customer_id'] = $customer['customer_id'];
	        $this->customer->isLogged(); // щоб сесія ініціалізувалась
	        return true;
	    }

	    return false;
	}


    public function getCustomerByEmail($email) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE email = '" . $this->db->escape($email) . "'");
        return $query->row;
    }

	
	public function getCustomerByPhone($telephone) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE telephone = '" . $this->db->escape($telephone) . "'");
		return $query->row;
	}
}
