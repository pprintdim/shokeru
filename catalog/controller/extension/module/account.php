<?php
class ControllerExtensionModuleAccount extends Controller {
    public function index() {
        $this->load->language('extension/module/account');

        // Посилання на сторінки акаунта
        $links = [
            'register'    => 'account/register',
            'login'       => 'account/login',
            'logout'      => 'account/logout',
            'forgotten'   => 'account/forgotten',
            'account'     => 'account/account',
            'edit'        => 'account/edit',
            'password'    => 'account/password',
            'address'     => 'account/address',
            'wishlist'    => 'account/wishlist',
            'order'       => 'account/order',
            'download'    => 'account/download',
            'reward'      => 'account/reward',
            'return'      => 'account/return',
            'transaction' => 'account/transaction',
            'newsletter'  => 'account/newsletter',
            'recurring'   => 'account/recurring',
        ];

        $data['logged'] = $this->customer->isLogged();
        $data['links'] = [];

        // Визначаємо активну сторінку
        $current_route = $this->request->get['route'] ?? '';

        foreach ($links as $key => $route) {
            $url = $this->url->link($route, '', true);
            $data['links'][$key] = [
                'href' => $url,
                'active' => ($current_route === $route) ? ' active' : ''
            ];
        }

        // ==============================
        // Автар та email користувача
        // ==============================
        if ($data['logged']) {
            $this->load->model('account/customer');

            $customer_id = $this->customer->getId();
            $customer_info = $this->model_account_customer->getCustomer($customer_id);

            $data['email'] = $customer_info['email'] ?? '';
            $data['avatar'] = $customer_info['avatar'] ?? ''; // поле avatar із бази
        } else {
            $data['email'] = '';
            $data['avatar'] = '';
        }

        return $this->load->view('extension/module/account', $data);
    }
}
