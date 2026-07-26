<?php
class ControllerCommonAjaxSearch extends Controller {

	public function search() {
		$json = array(
			'products'       => array(),
			'categories'     => array(),
			'brands'         => array(),
			'total_products' => 0,
			'search_url'     => '',
		);

		if (empty($this->request->get['q'])) {
			return $this->sendJson($json);
		}

		$search  = trim((string)$this->request->get['q']);
		$lang_id = (int)$this->config->get('config_language_id');
		$store_id = (int)$this->config->get('config_store_id');

		$this->load->model('tool/image');
		$this->load->model('catalog/product');

		$json['search_url'] = html_entity_decode($this->url->link('product/search', 'search=' . urlencode($search), true), ENT_QUOTES, 'UTF-8');

		$e = $this->db->escape($search);

		$from_where = "
			FROM " . DB_PREFIX . "product p
			LEFT JOIN " . DB_PREFIX . "product_description pd ON p.product_id = pd.product_id
			LEFT JOIN " . DB_PREFIX . "product_to_category pc ON p.product_id = pc.product_id
			LEFT JOIN " . DB_PREFIX . "category_description cd ON cd.category_id = pc.category_id
			LEFT JOIN " . DB_PREFIX . "manufacturer m ON m.manufacturer_id = p.manufacturer_id
			LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON p.product_id = p2s.product_id
			WHERE pd.language_id = " . $lang_id . "
			  AND p.status = 1 AND p.date_available <= NOW() AND p2s.store_id = " . $store_id . "
			  AND (pd.name LIKE '%" . $e . "%' OR pd.description LIKE '%" . $e . "%' OR m.name LIKE '%" . $e . "%' OR cd.name LIKE '%" . $e . "%')";

		$ids = array_column($this->db->query("SELECT DISTINCT p.product_id" . $from_where . " LIMIT 20")->rows, 'product_id');
		$json['total_products'] = (int)$this->db->query("SELECT COUNT(DISTINCT p.product_id) AS total" . $from_where)->row['total'];

		foreach (array_slice($ids, 0, 8) as $pid) {
			$product = $this->model_catalog_product->getProduct($pid);
			if (!$product) continue;

			$price = $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			$special = !empty($product['special'])
				? $this->currency->format($this->tax->calculate($product['special'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'])
				: '';

			$json['products'][] = array(
				'name'         => html_entity_decode($product['name'], ENT_QUOTES, 'UTF-8'),
				'manufacturer' => html_entity_decode((string)$product['manufacturer'], ENT_QUOTES, 'UTF-8'),
				'price'        => $price,
				'special'      => $special,
				'image'        => $this->model_tool_image->resize($product['image'] ?: 'placeholder.png', 80, 80),
				'href'         => $this->url->link('product/product', 'product_id=' . (int)$pid),
			);
		}

		if ($ids) {
			$in = implode(',', array_map('intval', $ids));

			foreach ($this->db->query("SELECT DISTINCT c.category_id, cd.name FROM " . DB_PREFIX . "product_to_category pc JOIN " . DB_PREFIX . "category c ON c.category_id = pc.category_id AND c.status = 1 JOIN " . DB_PREFIX . "category_description cd ON cd.category_id = c.category_id WHERE pc.product_id IN (" . $in . ") AND cd.language_id = " . $lang_id . " ORDER BY cd.name LIMIT 8")->rows as $c) {
				$json['categories'][] = array(
					'name' => html_entity_decode($c['name'], ENT_QUOTES, 'UTF-8'),
					'href' => $this->url->link('product/category', 'path=' . (int)$c['category_id']),
				);
			}
		}

		$brand_cond = "m.name LIKE '%" . $e . "%'";
		if ($ids) {
			$brand_cond .= " OR m.manufacturer_id IN (SELECT DISTINCT manufacturer_id FROM " . DB_PREFIX . "product WHERE product_id IN (" . implode(',', array_map('intval', $ids)) . ") AND manufacturer_id > 0)";
		}

		foreach ($this->db->query("SELECT DISTINCT m.manufacturer_id, m.name FROM " . DB_PREFIX . "manufacturer m WHERE " . $brand_cond . " ORDER BY m.name LIMIT 6")->rows as $b) {
			$json['brands'][] = array(
				'name' => html_entity_decode($b['name'], ENT_QUOTES, 'UTF-8'),
				'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . (int)$b['manufacturer_id']),
			);
		}

		return $this->sendJson($json);
	}

	private function sendJson(array $json): void {
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
