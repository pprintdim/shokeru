<?php
/**
 * Робота з CSV (читання/запис/оновлення без дублів).
 * Формат: UTF-8 з BOM (щоб коректно відкривалось в Excel).
 */
class CsvHelper
{
    /** Прочитати CSV у масив асоціативних рядків (за шапкою). */
    public static function read(string $path): array
    {
        if (!is_file($path)) return [];
        $rows = [];
        $h = fopen($path, 'r');
        $header = self::fgetcsv($h);
        if ($header === false) { fclose($h); return []; }
        $header[0] = preg_replace('/^\xEF\xBB\xBF/', '', $header[0]); // зняти BOM
        while (($r = self::fgetcsv($h)) !== false) {
            if (count($r) === 1 && $r[0] === null) continue;
            $rows[] = array_combine($header, array_pad($r, count($header), ''));
        }
        fclose($h);
        return $rows;
    }

    /** Записати масив асоціативних рядків у CSV (перезапис). */
    public static function write(string $path, array $rows, array $columns = []): void
    {
        if (!$columns && $rows) $columns = array_keys($rows[0]);
        $h = fopen($path, 'w');
        fwrite($h, "\xEF\xBB\xBF"); // BOM
        self::fputcsv($h, $columns);
        foreach ($rows as $r) {
            $line = [];
            foreach ($columns as $c) $line[] = $r[$c] ?? '';
            self::fputcsv($h, $line);
        }
        fclose($h);
    }

    /**
     * Upsert: оновити рядок за ключем або додати новий. Працює з масивом у пам'яті.
     * Повертає оновлений масив рядків.
     */
    public static function upsert(array $rows, array $newRow, string $keyCol): array
    {
        foreach ($rows as $i => $r) {
            if (($r[$keyCol] ?? null) === ($newRow[$keyCol] ?? null)) {
                $rows[$i] = $newRow;
                return $rows;
            }
        }
        $rows[] = $newRow;
        return $rows;
    }

    /** Зробити мапу [ключ => рядок] для швидкого пошуку. */
    public static function indexBy(array $rows, string $keyCol): array
    {
        $map = [];
        foreach ($rows as $r) $map[$r[$keyCol] ?? ''] = $r;
        return $map;
    }

    // Обгортки fgetcsv/fputcsv з явним escape (PHP 8.1+ вимагає, інакше deprecation)
    private static function fgetcsv($h) { return fgetcsv($h, 0, ',', '"', '\\'); }
    private static function fputcsv($h, array $r): void { fputcsv($h, $r, ',', '"', '\\'); }
}
