<?php
class ControllerAccountChangePhone extends Controller {

    public function index() {
        $this->load->language('account/change_phone');

        $data['heading_title'] = $this->language->get('text_heading');
        $data['text_descr']    = $this->language->get('text_descr');
        $data['text_new_phone']= $this->language->get('text_new_phone');
        $data['text_sms_code'] = $this->language->get('text_sms_code');
        $data['button_change'] = $this->language->get('button_change');
        $data['button_close']  = $this->language->get('button_close');

        return $this->load->view('account/change_phone', $data);
    }


    /* ======================================================
       ВІДПРАВКА SMS
    ====================================================== */
    public function smsSend() {
        $this->load->language('account/change_phone');

        $json = [];

        if ($this->request->server['REQUEST_METHOD'] != 'POST') {
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode([]));
            return;
        }

        /* --- cooldown --- */
        $cooldown  = 60;
        $last_send = $this->session->data['sms_last_send'] ?? 0;

        if (time() - $last_send < $cooldown) {
            $json['error'] = sprintf(
                $this->language->get('error_cooldown'),
                $cooldown - (time() - $last_send)
            );
        }

        /* --- daily limit --- */
        $day = date('Y-m-d');

        if (!isset($this->session->data['sms_daily']) || $this->session->data['sms_daily']['date'] != $day) {
            $this->session->data['sms_daily'] = ['date' => $day, 'count' => 0];
        }

        if (empty($json['error']) && $this->session->data['sms_daily']['count'] >= 5) {
            $json['error'] = $this->language->get('error_daily_limit');
        }

        /* --- телефон --- */
        $phone = preg_replace('/\D+/', '', $this->request->post['telephone'] ?? '');

        if ($phone && strpos($phone, '380') !== 0 && strpos($phone, '0') === 0) {
            $phone = '38' . $phone;
        }

        if (empty($json['error']) && (empty($phone) || strlen($phone) < 10)) {
            $json['error'] = $this->language->get('error_phone');
        }

        /* --- якщо все ок --- */
        if (empty($json['error'])) {

            $code = rand(100000, 999999);

            $this->session->data['sms_phone_change_phone'] = $phone;
            $this->session->data['sms_phone_change_code']  = $code;

            $token  = $this->config->get('config_turbo_sms_token');
            $sender = $this->config->get('config_turbo_sms_name');

            if (!$token) {
                $json['error'] = $this->language->get('error_token');
            } else {

                $payload = [
                    'recipients' => [$phone],
                    'sms'        => [
                        'sender' => $sender,
                        'text'   => sprintf($this->language->get('text_sms_message'), $code),
                    ],
                ];

                $ch = curl_init('https://api.turbosms.ua/message/send.json');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                    'Authorization: Bearer ' . $token,
                ]);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

                $response  = curl_exec($ch);
                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);

                if ($http_code == 200) {
                    $json['success'] = sprintf($this->language->get('text_code_success'), $phone);
                    $this->session->data['sms_last_send'] = time();
                    $this->session->data['sms_daily']['count']++;
                } else {
                    $json['error'] = $this->language->get('error_send');
                }
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }


    /* ======================================================
       ПЕРЕВІРКА КОДУ + ОНОВЛЕННЯ ТЕЛЕФОНУ
    ====================================================== */
    public function verifyCode() {
        $this->load->language('account/change_phone');

        $json = [];

        if ($this->request->server['REQUEST_METHOD'] != 'POST') {
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode([]));
            return;
        }

        if (!$this->customer->isLogged()) {
            $json['error'] = $this->language->get('error_not_logged');
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($json));
            return;
        }

        if (!isset($this->session->data['sms_attempts'])) {
            $this->session->data['sms_attempts'] = 0;
        }

        if ($this->session->data['sms_attempts'] >= 10) {
            $json['error'] = $this->language->get('error_attempts');
        }

        if (empty($json['error'])) {

            $code       = trim($this->request->post['code'] ?? '');
            $saved_code = $this->session->data['sms_phone_change_code']  ?? '';
            $phone      = $this->session->data['sms_phone_change_phone'] ?? '';

            if ($code && $saved_code && $phone && $code == $saved_code) {

                $this->db->query(
                    "UPDATE `" . DB_PREFIX . "customer` SET telephone = '" . $this->db->escape($phone) . "' WHERE customer_id = '" . (int)$this->customer->getId() . "'"
                );

                unset(
                    $this->session->data['sms_phone_change_code'],
                    $this->session->data['sms_phone_change_phone'],
                    $this->session->data['sms_attempts']
                );

                $json['success']  = $this->language->get('text_change_success');
                $json['redirect'] = $this->url->link('account/account', '', true);

            } else {
                $this->session->data['sms_attempts']++;
                $json['error'] = $this->language->get('error_code');
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
