<?php
class ModelSettingModule extends Model {

    public function getModule($module_id) {
        $query = $this->db->query(
            "SELECT * FROM " . DB_PREFIX . "module 
             WHERE module_id = '" . (int)$module_id . "'"
        );

        if ($query->row) {

            $setting = json_decode($query->row['setting'], true);

            // ✅ КЛЮЧОВИЙ РЯДОК
            $setting['module_id'] = (int)$query->row['module_id'];

            return $setting;
        }

        return [];
    }
}
