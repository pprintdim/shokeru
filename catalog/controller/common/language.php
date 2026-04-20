<?php
class ControllerCommonLanguage extends Controller {

    public function index() {

        $this->load->model('localisation/language');

        $current = $this->session->data['language'] ?? '';

        $data['current'] = '';
        $data['languages'] = [];

        foreach ($this->model_localisation_language->getLanguages() as $lang) {

            if (!$lang['status']) {
                continue;
            }

            if ($lang['code'] === $current) {
                $data['current'] = $lang;
            } else {
                $data['languages'][] = $lang;
            }
        }

        return $this->load->view('common/language', $data);
    }

    public function set() {
        if (!empty($this->request->get['code'])) {
            $this->session->data['language'] = $this->request->get['code'];
        }

        $this->response->redirect(
            $this->request->server['HTTP_REFERER'] ?? $this->url->link('common/home')
        );
    }
}
