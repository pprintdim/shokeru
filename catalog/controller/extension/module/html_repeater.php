<?php
class ControllerExtensionModuleHtmlRepeater extends Controller {
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


        // 1️⃣ якщо прийшов зі Layout — ок
        if (!empty($setting['module_id'])) {
            $module_id = (int)$setting['module_id'];
        }
        // 2️⃣ fallback: вручну переданий
        elseif (!empty($setting['html_repeater_module_id'])) {
            $module_id = (int)$setting['html_repeater_module_id'];
        }
        else {
            return '';
        }



        $this->load->model('extension/module/html_repeater');

        $language_id = (int)$this->config->get('config_language_id');

        $items = $this->model_extension_module_html_repeater->getItems($module_id);

        if (empty($items)) {
            return '';
        }

        $this->load->model('tool/image');

        $data['items'] = [];

        foreach ($items as $item) {

            if (
                empty($item['meta']['status']) ||
                empty($item['lang'][$language_id])
            ) {
                continue;
            }

            $lang = $item['lang'][$language_id];

            // посилання слайда: повний URL (http…) або шлях категорії (напр. "4" чи "20_4")
            $link_raw = trim((string)($item['meta']['link'] ?? ''));
            if ($link_raw === '') {
                $link = '';
            } elseif (preg_match('~^https?://~i', $link_raw)) {
                $link = $link_raw;
            } else {
                $path = preg_replace('~^path=~i', '', $link_raw);
                $link = $this->url->link('product/category', 'path=' . $path, true);
            }

            $data['items'][] = [
                'title'      => $this->parseBannerText($lang['title']),
                'content'    => html_entity_decode($lang['content'], ENT_QUOTES, 'UTF-8'),
                'image'      => !empty($item['meta']['image']) ? $this->model_tool_image->webp($item['meta']['image']) : '',
                'mob_image'  => !empty($item['meta']['mob_image']) ? $this->model_tool_image->webp($item['meta']['mob_image']) : '',
                'link'       => $link,
                'sort_order' => (int)($item['meta']['sort_order'] ?? 0),
            ];
        }

        if (!$data['items']) {
            return '';
        }

        // swiper потрібен для слайдера safemode (на сторінках без bestseller/product його інакше нема)
        $this->document->addStyle('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
        $this->document->addScript('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');

        // гарантований порядок
        usort($data['items'], function ($a, $b) {
            return $a['sort_order'] <=> $b['sort_order'];
        });

        return $this->load->view(
            'extension/module/html_repeater',
            $data
        );
    }
}
