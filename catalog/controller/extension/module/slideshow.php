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

            if (!empty($result['image']) && is_file(DIR_IMAGE . $result['image'])) {

                $data['banners'][] = [
                    'title'       => $this->parseBannerText($result['title']),
                    'link'        => $result['link'],

                    // textarea (parsed)
                    'description' => $this->parseBannerText($result['description']),

                    'images' => [
                        // no resize for desktop
                        'desktop' => 'image/' . $result['image'],

                        // tablet resize
                        'tablet' => $this->model_tool_image->resize(
                            $result['image'],
                            (int)$setting['width'],
                            (int)$setting['height']
                        ),

                        // mobile fallback
                        'mob_image' => (!empty($result['image_mob']) && is_file(DIR_IMAGE . $result['image_mob']))
                            ? 'image/' . $result['image_mob']
                            : 'image/' . $result['image'],
                    ]
                ];
            }
        }

        $data['module'] = $module++;

        return $this->load->view('extension/module/slideshow', $data);
    }
}
