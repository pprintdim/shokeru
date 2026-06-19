<?php
/** Запис змін ціни у price_history.csv. */
class PriceHistory
{
    public const COLUMNS = ['product_url', 'product_name', 'old_price', 'new_price', 'currency', 'changed_at'];

    private string $path;
    private array $rows;

    public function __construct(string $path)
    {
        $this->path = $path;
        $this->rows = CsvHelper::read($path);
    }

    /**
     * Зафіксувати зміну ціни, якщо вона відрізняється.
     * $prevPrice — попередня ціна (з products.csv), $newPrice — щойно спарсена.
     */
    public function record(string $url, string $name, string $prevPrice, string $newPrice, string $currency): bool
    {
        $prev = (string) (int) $prevPrice;
        $new  = (string) (int) $newPrice;
        if ($new === '' || $new === '0') return false;          // нема нової ціни
        if ($prev === $new) return false;                        // не змінилась
        if ($prev === '' || $prev === '0') return false;         // перший збір — не вважаємо зміною

        $this->rows[] = [
            'product_url' => $url,
            'product_name' => $name,
            'old_price'   => $prevPrice,
            'new_price'   => $newPrice,
            'currency'    => $currency,
            'changed_at'  => date('Y-m-d H:i:s'),
        ];
        return true;
    }

    public function save(): void
    {
        CsvHelper::write($this->path, $this->rows, self::COLUMNS);
    }
}
