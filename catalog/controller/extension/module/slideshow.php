<?php
class ControllerExtensionModuleSlideshow extends Controller {

    private function parseBannerText($text) {

        // force string
        $text = (string)$text;

        // decode html
        $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');

        // wrap [ ... ] into <span>
        $text = preg_replace_callback(
            '/\[([^\]]+)\]/u',
            function ($m) {
                return '<span>' . trim($m[1]) . '</span>';
            },
            $text
        );

        // keep new lines
        return nl2br($text);
    }

    public function index($setting) {
        static $module = 0;

        $this->load->model('design/banner');
        $this->load->model('tool/image');

        $data['banners'] = [];

        if (empty($setting['banner_id'])) {
            return '';
        }

        $results = $this->model_design_banner->getBanner($setting['banner_id']);

        foreach ($results as $result) {

            $type = !empty($result['type']) ? $result['type'] : 'image';

            if ($type === 'video') {
                // потрібне відео ПК
                if (empty($result['video']) || !is_file(DIR_IMAGE . $result['video'])) {
                    continue;
                }

                $desktop = 'image/' . $result['video'];
                $mob     = (!empty($result['mob_video']) && is_file(DIR_IMAGE . $result['mob_video']))
                    ? 'image/' . $result['mob_video']
                    : $desktop; // фолбек на десктопне відео

                // постери (картинки) — поки відео вантажиться
                $poster     = (!empty($result['image']) && is_file(DIR_IMAGE . $result['image'])) ? 'image/' . $result['image'] : '';
                $mob_poster = (!empty($result['mob_image']) && is_file(DIR_IMAGE . $result['mob_image'])) ? 'image/' . $result['mob_image'] : $poster;

                $data['banners'][] = [
                    'title'        => $this->parseBannerText($result['title']),
                    'link'         => $result['link'],
                    'description'  => $this->parseBannerText($result['description']),
                    'is_video'     => true,
                    'is_video_mob' => true,
                    'poster'       => $poster,
                    'mob_poster'   => $mob_poster,
                    'images' => [
                        'desktop'   => $desktop,
                        'tablet'    => $desktop,
                        'mob_image' => $mob,
                    ],
                ];
            } else {
                // картинка
                if (empty($result['image']) || !is_file(DIR_IMAGE . $result['image'])) {
                    continue;
                }

                $has_mob = !empty($result['mob_image']) && is_file(DIR_IMAGE . $result['mob_image']);
                $mob_src = $has_mob ? $result['mob_image'] : $result['image'];

                $data['banners'][] = [
                    'title'        => $this->parseBannerText($result['title']),
                    'link'         => $result['link'],
                    'description'  => $this->parseBannerText($result['description']),
                    'is_video'     => false,
                    'is_video_mob' => false,
                    'poster'       => '',
                    'mob_poster'   => '',
                    'images' => [
                        'desktop'   => 'image/' . $result['image'],
                        'tablet'    => $this->model_tool_image->resize($result['image'], (int)$setting['width'], (int)$setting['height']),
                        'mob_image' => 'image/' . $mob_src,
                    ],
                ];
            }
        }

        $data['module'] = $module++;

        return $this->load->view('extension/module/slideshow', $data);
    }
}
