<?php
class ModelCatalogFilter extends Model {
    public function getAllFilters() {
        $language_id = (int)$this->config->get('config_language_id');

        $query = $this->db->query("
            SELECT 
                fg.filter_group_id, 
                f.filter_id, 
                f.sort_order AS filter_sort_order, 
                fgd.name AS group_name, 
                fd.name AS filter_name
            FROM " . DB_PREFIX . "filter f
            LEFT JOIN " . DB_PREFIX . "filter_description fd 
                ON (f.filter_id = fd.filter_id AND fd.language_id = " . $language_id . ")
            LEFT JOIN " . DB_PREFIX . "filter_group fg 
                ON (f.filter_group_id = fg.filter_group_id)
            LEFT JOIN " . DB_PREFIX . "filter_group_description fgd 
                ON (fg.filter_group_id = fgd.filter_group_id AND fgd.language_id = " . $language_id . ")
            ORDER BY fg.sort_order, f.sort_order
        ");

        $groups = [];

        foreach ($query->rows as $row) {
            $group_id = $row['filter_group_id'];

            // Якщо групи ще немає в масиві
            if (!isset($groups[$group_id])) {
                $groups[$group_id] = [
                    'filter_group_id' => $group_id,
                    'name' => $row['group_name'],
                    'filter' => []
                ];
            }

            // Перевіряємо, чи вже доданий цей фільтр
            $exists = false;
            foreach ($groups[$group_id]['filter'] as $f) {
                if ($f['filter_id'] == $row['filter_id']) {
                    $exists = true;
                    break;
                }
            }

            if (!$exists) {
                $groups[$group_id]['filter'][] = [
                    'filter_id' => $row['filter_id'],
                    'name' => $row['filter_name']
                ];
            }
        }

        return array_values($groups);
    }
    public function getFilter($filter_id) {
        $language_id = (int)$this->config->get('config_language_id');
        $query = $this->db->query("
            SELECT f.filter_id, fd.name
            FROM " . DB_PREFIX . "filter f
            LEFT JOIN " . DB_PREFIX . "filter_description fd 
              ON (f.filter_id = fd.filter_id AND fd.language_id = " . $language_id . ")
            WHERE f.filter_id = " . (int)$filter_id . "
        ");
        return $query->row;
    }

}