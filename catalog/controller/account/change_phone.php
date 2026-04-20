<?php
class ControllerAccountChangePhone extends Controller {

    public function index() {
        $this->load->language('account/sms_form');

        $data['heading_title'] = $this->language->get('text_heading');
        return $this->load->view('account/change_phone', $data);
    }


    /* ======================================================
       ВІДПРАВКА SMS
    ====================================================== */
    public function smsSend() {
        $this->load->language('account/sms_form');

        $json = [];

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {

            /* --- cooldown --- */
            $last_send = $this->session->data['sms_last_send'] ?? 0;
            $cooldown = 60;

            if (time() - $last_send < $cooldown) {
                $json['error'] = sprintf(
                    $this->language->get('error_cooldown'),
                    ($cooldown - (time() - $last_send))
                );
            }

            /* --- daily limit --- */
            $limit_total = 5;
            $day = date('Y-m-d');

            if (!isset($this->session->data['sms_daily']) || $this->session->data['sms_daily']['date'] != $day) {
                $this->session->data['sms_daily'] = ['date' => $day, 'count' => 0];
            }

            if (empty($json['error']) && $this->session->data['sms_daily']['count'] >= $limit_total) {
                $json['error'] = $this->language->get('error_daily_limit');
            }

            /* --- телефон --- */
            $phone = preg_replace('/\D+/', '', $this->request->post['telephone'] ?? '');

            if (strpos($phone, '380') !== 0 && strpos($phone, '0') === 0) {
                $phone = '38' . $phone;
            }

            if (empty($json['error']) && (empty($phone) || strlen($phone) < 10)) {
                $json['error'] = $this->language->get('error_phone');
            }

            /* --- якщо все ок --- */
            if (empty($json['error'])) {

                $code = rand(100000, 999999);

                $this->session->data['sms_login_phone'] = $phone;
                $this->session->data['sms_login_code']  = $code;

                $token  = $this->config->get('config_turbo_sms_token');
                $sender = $this->config->get('config_turbo_sms_name');

                if (!$token) {
                    $json['error'] = $this->language->get('error_token');
                } else {

                    $request = [
                        "recipients" => [$phone],
                        "sms" => [
                            "sender" => $sender,
                            "text"   => sprintf($this->language->get('text_sms_message'), $code)
                        ]
                    ];

                    $ch = curl_init('https://api.turbosms.ua/message/send.json');
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, [
                        "Content-Type: application/json",
                        "Authorization: Bearer $token"
                    ]);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($request));

                    $response = curl_exec($ch);
                    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                    curl_close($ch);

                    if ($http_code == 200) {
                        $json['success'] = sprintf($this->language->get('text_code_success'), $phone ?? '•(•••) ••• •• 23');
                        $this->session->data['sms_last_send'] = time();
                        $this->session->data['sms_daily']['count']++;
                    } else {
                        $json['error'] = $this->language->get('error_send');
                    }
                }
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }


    /* ======================================================
       ПЕРЕВІРКА КОДУ
    ====================================================== */
    public function verifyCode() {
        $this->load->language('account/sms_form');

        $json = [];

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {

            if (!isset($this->session->data['sms_attempts'])) {
                $this->session->data['sms_attempts'] = 0;
            }

            if ($this->session->data['sms_attempts'] >= 10) {
                $json['error'] = $this->language->get('error_attempts');
            }

            $code       = $this->request->post['code'] ?? '';
            $saved_code = $this->session->data['sms_login_code'] ?? '';
            $phone      = $this->session->data['sms_login_phone'] ?? '';

            if (empty($json['error'])) {

                if ($code && $saved_code && $phone && $code == $saved_code) {

                    unset($this->session->data['sms_attempts']);

                    $this->load->model('account/sms_form');

                    if (isset($this->event)) {
                        $this->event->unregister('post.customer.add', 'mail/register');
                        $this->event->unregister('post.customer.editPassword', 'mail/register');
                    }

                    $customer = $this->model_account_sms_form->getCustomerByPhone($phone);

                    if ($customer) {
                        $this->model_account_sms_form->loginByPhoneForce($phone);
                        $json['success'] = $this->language->get('text_login_success');
                    } else {
                        $data = [
                            'firstname' => 'User ' . time(),
                            'lastname'  => '',
                            'email'     => 'user_' . $phone . '@example.com',
                            'telephone' => $phone,
                            'password'  => $code,
                            'customer_group_id' => 3
                        ];

                        $this->model_account_sms_form->addCustomer($data);
                        $this->model_account_sms_form->loginByPhoneForce($phone);

                        $json['success'] = $this->language->get('text_register_success');
                    }

                    unset($this->session->data['sms_login_code']);
                    unset($this->session->data['sms_login_phone']);

                    $json['redirect'] = $this->url->link('account/account', '', true);

                } else {
                    $this->session->data['sms_attempts']++;
                    $json['error'] = $this->language->get('error_code');
                }
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
