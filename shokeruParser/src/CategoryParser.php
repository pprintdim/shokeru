<?php
/** Збір категорій у categories.csv. */
class CategoryParser
{
    private array $cfg;
    private HttpClient $http;
    private Logger $log;

    public function __construct(array $cfg, HttpClient $http, Logger $log)
    {
        $this->cfg = $cfg; $this->http = $http; $this->log = $log;
    }

    /** Повертає масив рядків: [category_name, category_url, status, error]. */
    public function parse(): array
    {
        return $this->cfg['category_source'] === 'sitemap'
            ? $this->fromSitemap()
            : $this->fromMenu();
    }

    private function fromMenu(): array
    {
        $rows = [];
        try {
            $html = $this->http->get($this->cfg['base_url']);
            $dom  = new Dom($html);
            $seen = [];
            foreach ($dom->nodes($this->cfg['selectors']['menu_links']) as $a) {
                $href = trim($a->getAttribute('href'));
                $name = trim(preg_replace('/\s+/', ' ', $a->textContent));
                if ($href === '' || $name === '') continue;
                $url = $this->abs($href);
                if (isset($seen[$url])) continue;
                $seen[$url] = true;
                $rows[] = ['category_name' => $name, 'category_url' => $url, 'status' => 'ok', 'error' => ''];
            }
            $this->log->info('Категорій з меню: ' . count($rows));
        } catch (Throwable $e) {
            $this->log->error('Категорії (меню): ' . $e->getMessage());
            $rows[] = ['category_name' => '', 'category_url' => $this->cfg['base_url'], 'status' => 'failed', 'error' => $e->getMessage()];
        }
        return $rows;
    }

    private function fromSitemap(): array
    {
        $rows = [];
        try {
            $xml = $this->http->get($this->cfg['sitemap_url']);
            preg_match_all('#<loc>([^<]+)</loc>#', $xml, $m);
            foreach ($m[1] as $loc) {
                // категорії = URL, що закінчуються на /
                if (!str_ends_with($loc, '/')) continue;
                $name = trim(str_replace($this->cfg['base_url'], '', $loc), '/');
                $rows[] = ['category_name' => $name, 'category_url' => $loc, 'status' => 'ok', 'error' => ''];
            }
            $this->log->info('Категорій із sitemap: ' . count($rows));
        } catch (Throwable $e) {
            $this->log->error('Категорії (sitemap): ' . $e->getMessage());
        }
        return $rows;
    }

    private function abs(string $u): string
    {
        if ($u === '' || preg_match('#^https?://#', $u)) return $u;
        return rtrim($this->cfg['base_url'], '/') . '/' . ltrim($u, '/');
    }
}
