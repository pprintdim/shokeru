<?php
/** Збір URL товарів із категорій у product_urls.csv (з пагінацією). */
class ProductUrlParser
{
    private array $cfg;
    private HttpClient $http;
    private Logger $log;

    public function __construct(array $cfg, HttpClient $http, Logger $log)
    {
        $this->cfg = $cfg; $this->http = $http; $this->log = $log;
    }

    /**
     * Зібрати URL товарів з однієї категорії.
     * Повертає [ ['product_url','category_name','status','error'], ... ]
     */
    public function parseCategory(string $categoryUrl, string $categoryName): array
    {
        $rows = [];
        $seen = [];
        $page = 1;
        $url  = $categoryUrl;

        while ($url) {
            try {
                $html = $this->http->get($url);
                $dom  = new Dom($html);

                $found = 0;
                foreach ($dom->nodes($this->cfg['selectors']['product_card']) as $card) {
                    // шукаємо посилання всередині картки
                    $a = (new DOMXPath($card->ownerDocument))
                        ->query($this->cfg['selectors']['card_link'], $card);
                    if (!$a || !$a->length) continue;
                    $purl = $this->abs(trim($a->item(0)->nodeValue));
                    if ($purl === '' || isset($seen[$purl])) continue;
                    $seen[$purl] = true;
                    $found++;
                    $rows[] = ['product_url' => $purl, 'category_name' => $categoryName, 'status' => 'new', 'error' => ''];
                }
                $this->log->info("  $categoryName стор.$page: знайдено $found товарів");

                $url = $this->nextPage($dom, $url);
                $page++;
            } catch (Throwable $e) {
                $this->log->error("URLs категорії $categoryName: " . $e->getMessage());
                $rows[] = ['product_url' => $url, 'category_name' => $categoryName, 'status' => 'failed', 'error' => $e->getMessage()];
                break;
            }
        }
        return $rows;
    }

    /** Знайти посилання на наступну сторінку пагінації, або null. */
    private function nextPage(Dom $dom, string $current): ?string
    {
        $best = null; $bestNum = 0;
        // поточний номер сторінки з URL (?page=N)
        $curNum = 1;
        if (preg_match('/[?&]page=(\d+)/', $current, $m)) $curNum = (int) $m[1];

        foreach ($dom->nodes($this->cfg['selectors']['pagination_links']) as $a) {
            $href = trim($a->nodeValue);
            if ($href === '' || preg_match('/page=\d+/', $href) === 0) continue;
            preg_match('/page=(\d+)/', $href, $m);
            $num = (int) ($m[1] ?? 0);
            if ($num > $curNum && $num > $bestNum) { $bestNum = $num; $best = $href; }
        }
        return $best ? $this->abs($best) : null;
    }

    private function abs(string $u): string
    {
        if ($u === '' || preg_match('#^https?://#', $u)) return $u;
        return rtrim($this->cfg['base_url'], '/') . '/' . ltrim($u, '/');
    }
}
