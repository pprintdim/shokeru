<?php
class ControllerExtensionModuleSpecialBanner extends Controller {
    private $error = [];

    public function index() {
        $this->load->language('extension/module/special_banner');
        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/module');
        $this->load->model('localisation/language');
        $this->load->model('tool/image');

        $data['languages'] = $this->model_localisation_language->getLanguages();

        $module_id = isset($this->request->get['module_id']) ? (int)$this->request->get['module_id'] : 0;

        $module_info = [];
        if ($module_id && $this->request->server['REQUEST_METHOD'] !== 'POST') {
            $module_info = (array)$this->model_setting_module->getModule($module_id);
        }

        // SAVE
        if ($this->request->server['REQUEST_METHOD'] === 'POST' && $this->validate()) {

            $save = (array)$this->request->post;

            if (!$module_id) {
                $this->model_setting_module->addModule('special_banner', $save);
            } else {
                $this->model_setting_module->editModule($module_id, $save);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect(
                $this->url->link(
                    'marketplace/extension',
                    'user_token=' . $this->session->data['user_token'] . '&type=module',
                    true
                )
            );
        }

        // errors
        $data['error_warning'] = $this->error['warning'] ?? '';
        $data['error_name']    = $this->error['name'] ?? [];

        // action / cancel
        $data['action'] = $this->url->link(
            'extension/module/special_banner',
            'user_token=' . $this->session->data['user_token'] . ($module_id ? '&module_id=' . $module_id : ''),
            true
        );

        $data['cancel'] = $this->url->link(
            'marketplace/extension',
            'user_token=' . $this->session->data['user_token'] . '&type=module',
            true
        );

        // ========= VALUES =========

        // NAME
        $data['name'] = $this->request->post['name'] ?? ($module_info['name'] ?? '');

        // TITLE
        $data['title'] = $this->request->post['title']
            ?? ($module_info['title'] ?? []);

        // DESCRIPTION
        $data['description'] = $this->request->post['description']
            ?? ($module_info['description'] ?? []);

        // IMAGE
        $data['image'] = $this->request->post['image']
            ?? ($module_info['image'] ?? '');

        if ($data['image'] && is_file(DIR_IMAGE . $data['image'])) {
            $data['thumb'] = $this->model_tool_image->resize($data['image'], 100, 100);
        } else {
            $data['thumb'] = $this->model_tool_image->resize('placeholder.png', 100, 100);
        }

        $data['placeholder'] = $this->model_tool_image->resize('placeholder.png', 100, 100);

        $data['status'] = $this->request->post['status']
            ?? ($module_info['status'] ?? 0);

        // common
        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/special_banner', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/special_banner')) {
            $this->error['warning'] = 'No permission';
        }

        if (isset($this->request->post['name'])) {
            if (utf8_strlen($this->request->post['name']) < 2) {
                $this->error['name'] = 'Min 2 chars';
            }
        }

        return !$this->error;
    }
}
