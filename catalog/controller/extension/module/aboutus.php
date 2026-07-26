<?php
class ControllerExtensionModuleAboutus extends Controller {
    public function index() {
        $setting = $this->config->get('module_aboutus');

        if (!is_array($setting) || empty($setting['status'])) {
            return '';
        }

        $language_id = (int)$this->config->get('config_language_id');

        $data['content'] = isset($setting['content'][$language_id]['content']) ? html_entity_decode($setting['content'][$language_id]['content'], ENT_QUOTES, 'UTF-8') : '';

        // короткий лід = перший абзац опису (решта — у попапі)
        $data['lead'] = '';
        if ($data['content'] && preg_match('/<p[^>]*>(.*?)<\/p>/is', $data['content'], $m)) {
            $data['lead'] = trim(strip_tags($m[1]));
        }

        // відео hero (шляхи відносно image/, з медіатеки)
        $srv = (!empty($this->request->server['HTTPS'])) ? $this->config->get('config_ssl') : $this->config->get('config_url');
        $data['base'] = $srv;
        $data['catalog_href'] = $this->url->link('product/shop');

        // заголовок hero — з бекенду (той самий, що був у pageBlockTop): "Про <span>назва</span>"
        $this->load->language('information/about');
        $data['hero_title'] = sprintf($this->language->get('text_about_page_title'), $this->config->get('config_name'));
        $data['text_about'] = $this->language->get('text_about') ?: 'Про нас';
        $mk = function($p) use ($srv) { $p = trim((string)$p); if ($p === '') return ''; if (preg_match('~^https?://~i', $p)) return $p; if (strpos($p, 'videos/') === 0) return $srv . ltrim($p, '/'); return $srv . 'image/' . ltrim($p, '/'); };
        $data['video']     = $mk(isset($setting['video']) ? $setting['video'] : '');
        $data['video_mob'] = $mk(isset($setting['video_mob']) ? $setting['video_mob'] : '');
        $data['poster']    = $mk(isset($setting['poster']) ? $setting['poster'] : '');

        $data['stats'] = array();
        $data['cards'] = array();

        if (!empty($setting['stats']) && is_array($setting['stats'])) {
            foreach ($setting['stats'] as $stat) {
                $localized = isset($stat[$language_id]) ? $stat[$language_id] : array();

                $raw_value = isset($localized['value']) ? $localized['value'] : '';
                $suffix = '';

                if (preg_match('/^(.*?)\[(.+?)\](.*)$/', $raw_value, $matches)) {
                    $raw_value = trim($matches[1] . $matches[3]);
                    $suffix = $matches[2];
                }

                $data['stats'][] = array(
                    'value'  => $raw_value,
                    'suffix' => $suffix,
                    'label'  => isset($localized['label']) ? $localized['label'] : ''
                );
            }
        }

        if (!empty($setting['cards']) && is_array($setting['cards'])) {
            foreach ($setting['cards'] as $card) {
                $localized = isset($card[$language_id]) ? $card[$language_id] : array();

                $data['cards'][] = array(
                    'title'  => isset($localized['title']) ? $localized['title'] : '',
                    'accent' => isset($localized['accent']) ? $localized['accent'] : '',
                    'link'   => isset($card['link']) ? $card['link'] : '#'
                );
            }
        }

        return $this->load->view('extension/module/aboutus', $data);
    }
}
