<?php
/**
 * Простий HTTP-клієнт на cURL.
 * - ставить User-Agent і cookie з конфіга
 * - повторює запит при 429 / мережевій помилці
 * - робить паузу між запитами
 */
class HttpClient
{
    private array $cfg;
    private $log;

    public function __construct(array $cfg, Logger $log)
    {
        $this->cfg = $cfg;
        $this->log = $log;
    }

    /**
     * Завантажити сторінку. Повертає HTML або кидає Exception.
     */
    public function get(string $url): string
    {
        $attempt = 0;
        do {
            $attempt++;
            [$body, $code, $err] = $this->request($url);

            if ($code === 200 && $body !== '') {
                $this->sleep();
                return $body;
            }

            $this->log->warn("GET $url → HTTP $code" . ($err ? " ($err)" : '') . " [спроба $attempt]");

            // 429 / 5xx / мережа — чекаємо й пробуємо ще
            if ($attempt < $this->cfg['max_retries'] && ($code === 429 || $code >= 500 || $code === 0)) {
                sleep($this->cfg['retry_wait'] * $attempt);
                continue;
            }
            break;
        } while ($attempt < $this->cfg['max_retries']);

        throw new RuntimeException("Не вдалося завантажити $url (HTTP $code" . ($err ? ", $err" : '') . ')');
    }

    private function request(string $url): array
    {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS      => 5,
            CURLOPT_TIMEOUT        => $this->cfg['timeout'],
            CURLOPT_CONNECTTIMEOUT => 15,
            CURLOPT_ENCODING       => '',           // приймати gzip
            CURLOPT_USERAGENT      => $this->cfg['user_agent'],
            CURLOPT_HTTPHEADER     => [
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
                'Accept-Language: uk-UA,uk;q=0.9,ru;q=0.8,en;q=0.7',
            ],
        ]);
        if (!empty($this->cfg['cookie'])) {
            curl_setopt($ch, CURLOPT_COOKIE, $this->cfg['cookie']);
        }
        $body = curl_exec($ch);
        $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $err  = curl_error($ch);
        curl_close($ch);
        return [$body === false ? '' : $body, $code, $err];
    }

    private function sleep(): void
    {
        $d = (float) $this->cfg['delay'];
        if ($d > 0) usleep((int) ($d * 1_000_000));
    }
}
