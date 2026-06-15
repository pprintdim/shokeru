<?php
class ControllerCheckoutNovaposhta extends Controller {
    const NP_API_URL = 'https://api.novaposhta.ua/v2.0/json/';
    const CACHE_TTL = 3600;

    public function index() {
        $action = isset($this->request->get['action']) ? $this->request->get['action'] : '';
        $this->response->addHeader('Content-Type: application/json');

        if ($action === 'cities') {
            $this->searchCities();
        } elseif ($action === 'warehouses') {
            $this->getWarehouses();
        } else {
            $this->response->setOutput(json_encode([]));
        }
    }

    private function getApiKey() {
        return $this->config->get('shipping_novaposhta_api_key') ?: '';
    }

    private function searchCities() {
        $q = isset($this->request->get['q']) ? trim($this->request->get['q']) : '';

        if (strlen($q) < 2) {
            $this->response->setOutput(json_encode([]));
            return;
        }

        $cache_key = 'np.cities.' . md5(function_exists('mb_strtolower') ? mb_strtolower($q, 'UTF-8') : strtolower($q));
        $cached = $this->cache->get($cache_key);

        if ($cached !== false) {
            $this->response->setOutput(json_encode($cached));
            return;
        }

        $payload = json_encode([
            'apiKey'           => $this->getApiKey(),
            'modelName'        => 'Address',
            'calledMethod'     => 'searchSettlements',
            'methodProperties' => [
                'CityName' => $q,
                'Limit'    => 10,
                'Page'     => 1
            ]
        ]);

        $raw  = $this->httpPost(self::NP_API_URL, $payload);
        $data = json_decode($raw, true);

        $cities = [];
        if (!empty($data['data'][0]['Addresses'])) {
            foreach ($data['data'][0]['Addresses'] as $item) {
                $parts = explode(',', $item['Present']);
                $cities[] = [
                    'ref'    => $item['DeliveryCity'],
                    'name'   => trim($parts[0]),
                    'label'  => $item['Present']
                ];
            }
        }

        $this->cache->set($cache_key, $cities);
        $this->response->setOutput(json_encode($cities));
    }

    private function getWarehouses() {
        $city_ref = isset($this->request->get['city_ref']) ? trim($this->request->get['city_ref']) : '';
        $query = isset($this->request->get['q']) ? trim($this->request->get['q']) : '';
        $ref = isset($this->request->get['ref']) ? trim($this->request->get['ref']) : '';

        if (!$city_ref) {
            $this->response->setOutput(json_encode([]));
            return;
        }

        if ($query === '' && $ref === '') {
            $this->response->setOutput(json_encode([]));
            return;
        }

        $normalized_query = function_exists('mb_strtolower') ? mb_strtolower($query, 'UTF-8') : strtolower($query);
        $cache_key = 'np.warehouses.' . md5($city_ref . '|' . $normalized_query . '|' . $ref);
        $cached = $this->cache->get($cache_key);

        if ($cached !== false) {
            $this->response->setOutput(json_encode($cached));
            return;
        }

        $method_properties = [
            'CityRef'  => $city_ref,
            'Language' => 'UA'
        ];

        if ($query !== '') {
            $method_properties['FindByString'] = $query;
            $method_properties['Limit'] = 50;
            $method_properties['Page'] = 1;
        }

        if ($ref !== '') {
            $method_properties['Ref'] = $ref;
        }

        $payload = json_encode([
            'apiKey'           => $this->getApiKey(),
            'modelName'        => 'Address',
            'calledMethod'     => 'getWarehouses',
            'methodProperties' => $method_properties
        ]);

        $raw  = $this->httpPost(self::NP_API_URL, $payload);
        $data = json_decode($raw, true);

        $warehouses = [];
        if (!empty($data['data'])) {
            foreach ($data['data'] as $item) {
                $warehouses[] = [
                    'ref'  => $item['Ref'],
                    'name' => $item['Description']
                ];
            }
        }

        $this->cache->set($cache_key, $warehouses);
        $this->response->setOutput(json_encode($warehouses));
    }

    private function httpPost($url, $payload) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result ?: '{}';
    }
}
