<?php
class ModelExtensionModuleHtmlRepeater extends Model {

    public function getItems(int $module_id): array {

        if ($module_id <= 0) {
            return [];
        }

        $query = $this->db->query("
            SELECT *
            FROM `" . DB_PREFIX . "html_repeater`
            WHERE module_id = " . (int)$module_id . "
            ORDER BY sort_order ASC, item_id ASC
        ");

        $items = [];

        foreach ($query->rows as $row) {

            $item_id = (int)$row['item_id'];
            $lang_id = (int)$row['language_id'];

            if (!isset($items[$item_id])) {
                $items[$item_id] = [
                    'meta' => [
                        'sort_order' => (int)$row['sort_order'],
                        'status'     => (int)$row['status'],
                        'image'      => $row['image'],
                        'mob_image'  => $row['mob_image'],
                    ],
                    'lang' => []
                ];
            }

            $items[$item_id]['lang'][$lang_id] = [
                'title'   => $row['title'],
                'content' => $row['content'],
            ];
        }

        return $items;
    }
}