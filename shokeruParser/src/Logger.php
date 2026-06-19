<?php
/** Простий логер у файл + у консоль. */
class Logger
{
    private string $file;
    public function __construct(string $file) { $this->file = $file; }

    public function info(string $m): void  { $this->write('INFO',  $m); }
    public function warn(string $m): void  { $this->write('WARN',  $m); }
    public function error(string $m): void { $this->write('ERROR', $m); }

    private function write(string $lvl, string $m): void
    {
        $line = '[' . date('Y-m-d H:i:s') . "] [$lvl] $m";
        echo $line . PHP_EOL;
        @file_put_contents($this->file, $line . PHP_EOL, FILE_APPEND);
    }
}
