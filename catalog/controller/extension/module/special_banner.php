<?php
class ControllerExtensionModuleSpecialBanner extends Controller {
    public function index($setting) {
        if (empty($setting['status'])) {
            return;
        }

        $this->load->model('tool/image');

        $language_id = (int)$this->config->get('config_language_id');

        // ---- репітер: збираємо увімкнені банери ----
        $banners = array();

        if (!empty($setting['banners']) && is_array($setting['banners'])) {
            foreach ($setting['banners'] as $banner) {
                if (empty($banner['status'])) {
                    continue;
                }

                $title = trim((string)($banner['title'][$language_id] ?? ''));
                $descr = trim((string)($banner['description'][$language_id] ?? ''));

                if ($title === '' && $descr === '') {
                    continue;
                }

                $banners[] = $banner;
            }
        }

        // ---- зворотна сумісність зі старим форматом (один банер) ----
        if (!$banners && (!empty($setting['title']) || !empty($setting['image']))) {
            $banners[] = array(
                'title'       => $setting['title'] ?? array(),
                'description' => $setting['description'] ?? array(),
                'image'       => $setting['image'] ?? '',
            );
        }

        if (!$banners) {
            return;
        }

        // ---- випадковий банер при кожному завантаженні ----
        $banner = $banners[array_rand($banners)];

        $data['title']       = (string)($banner['title'][$language_id] ?? '');
        $data['description'] = html_entity_decode((string)($banner['description'][$language_id] ?? ''), ENT_QUOTES, 'UTF-8');

        $image = $banner['image'] ?? '';

        $data['image'] = ($image && is_file(DIR_IMAGE . $image))
            ? 'image/' . $image
            : 'image/placeholder.png';

        return $this->load->view('extension/module/special_banner', $data);
    }
}
