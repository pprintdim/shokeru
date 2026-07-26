<?php
class ControllerExtensionModuleRecentlyviewed extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/recentlyviewed');
		$this->load->model('catalog/product');
		$this->load->model('tool/image');

		$limit = (int)($setting['limit'] ?? 0);
		if ($limit <= 0) {
			$limit = 10;
		}

		$route = isset($this->request->get['route']) ? (string)$this->request->get['route'] : '';

		/* ---- 1. Переглянуті (сесія) ---- */
		$recently_viewed = (isset($this->session->data['recently_viewed']) && is_array($this->session->data['recently_viewed']))
			? array_values(array_unique(array_map('intval', $this->session->data['recently_viewed'])))
			: array();

		$pool = array(); // впорядковані унікальні id
		$seen = array();

		foreach ($recently_viewed as $pid) {
			if (!isset($seen[$pid])) { $seen[$pid] = true; $pool[] = $pid; }
			if (count($pool) >= $limit) { break; }
		}

		/* ---- 2. Related від перших переглянутих ---- */
		if (count($pool) < $limit) {
			foreach (array_slice($recently_viewed, 0, 3) as $pid) {
				foreach ($this->model_catalog_product->getProductRelated($pid) as $rel) {
					$rid = (int)$rel['product_id'];
					if (!isset($seen[$rid])) { $seen[$rid] = true; $pool[] = $rid; }
					if (count($pool) >= $limit) { break 2; }
				}
			}
		}

		/* ---- 3. Свіжі товари поточного контексту ---- */
		if (count($pool) < $limit) {
			$fresh = array();

			if ($route == 'product/category' && !empty($this->request->get['path'])) {
				$parts = explode('_', (string)$this->request->get['path']);
				$category_id = (int)array_pop($parts);

				$fresh = $this->model_catalog_product->getProducts(array(
					'filter_category_id'  => $category_id,
					'filter_sub_category' => true,
					'sort'                => 'p.date_added',
					'order'               => 'DESC',
					'start'               => 0,
					'limit'               => $limit + 5
				));
			} elseif ($route == 'product/special') {
				$fresh = $this->model_catalog_product->getProductSpecials(array(
					'sort'  => 'p.sort_order',
					'order' => 'ASC',
					'start' => 0,
					'limit' => $limit + 5
				));
			} else {
				// новинки та решта сторінок — останні додані
				$fresh = $this->model_catalog_product->getProducts(array(
					'sort'  => 'p.date_added',
					'order' => 'DESC',
					'start' => 0,
					'limit' => $limit + 5
				));
			}

			foreach ($fresh as $row) {
				$rid = (int)$row['product_id'];
				if (!isset($seen[$rid])) { $seen[$rid] = true; $pool[] = $rid; }
				if (count($pool) >= $limit) { break; }
			}
		}

		if (!$pool) {
			return '';
		}

		$width  = (int)$this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width');
		$height = (int)$this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height');
		if (!$width)  { $width = 300; }
		if (!$height) { $height = 300; }

		$data['products'] = array();

		foreach ($pool as $pid) {
			$product_info = $this->model_catalog_product->getProduct($pid);

			if (!$product_info || !$product_info['status']) {
				continue;
			}

			$thumb = $product_info['image']
				? $this->model_tool_image->resize($product_info['image'], $width, $height)
				: $this->model_tool_image->resize('placeholder.png', $width, $height);

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$price = false;
			}

			if (!is_null($product_info['special']) && (float)$product_info['special'] >= 0) {
				$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$special = false;
			}

			$data['products'][] = array(
				'product_id' => $product_info['product_id'],
				'thumb'      => $thumb,
				'name'       => $product_info['name'],
				'price'      => $price,
				'special'    => $special,
				'minimum'    => $product_info['minimum'] ? $product_info['minimum'] : 1,
				'href'       => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
			);
		}

		if (!$data['products']) {
			return '';
		}

		$data['heading_title'] = $this->language->get('heading_title');
		$data['button_cart']   = $this->language->get('button_cart');
		$data['button_more']   = $this->language->get('button_more');
		$data['text_added']    = $this->language->get('text_added');

		$this->document->addStyle('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
		$this->document->addScript('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');

		return $this->load->view('extension/module/recentlyviewed', $data);
	}
}
