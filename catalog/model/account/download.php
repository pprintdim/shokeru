<?php
class ModelAccountDownload extends Model {
	public function getDownload($download_id) {
		$this->ensureCustomerDownloadTable();

		$query = $this->db->query("SELECT d.filename, d.mask FROM " . DB_PREFIX . "customer_to_download c2d LEFT JOIN " . DB_PREFIX . "download d ON (c2d.download_id = d.download_id) WHERE c2d.customer_id = '" . (int)$this->customer->getId() . "' AND d.download_id = '" . (int)$download_id . "'");

		return $query->row;
	}

	public function getDownloads($start = 0, $limit = 20) {
		$this->ensureCustomerDownloadTable();

		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 20;
		}

		$query = $this->db->query("SELECT c2d.download_id, c2d.date_added, dd.name, d.filename FROM " . DB_PREFIX . "customer_to_download c2d LEFT JOIN " . DB_PREFIX . "download d ON (c2d.download_id = d.download_id) LEFT JOIN " . DB_PREFIX . "download_description dd ON (d.download_id = dd.download_id) WHERE c2d.customer_id = '" . (int)$this->customer->getId() . "' AND dd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY c2d.date_added DESC LIMIT " . (int)$start . "," . (int)$limit);

		return $query->rows;
	}

	public function getTotalDownloads() {
		$this->ensureCustomerDownloadTable();

		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer_to_download WHERE customer_id = '" . (int)$this->customer->getId() . "'");

		return $query->row['total'];
	}

	private function ensureCustomerDownloadTable() {
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "customer_to_download` (`customer_id` int(11) NOT NULL, `download_id` int(11) NOT NULL, `date_added` datetime NOT NULL, PRIMARY KEY (`customer_id`,`download_id`), KEY `download_id` (`download_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8");
	}
}
