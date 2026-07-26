<?php
/** Хелпер для парсингу HTML через DOMXPath (з правильним UTF-8). */
class Dom
{
    private DOMXPath $x;
    public DOMDocument $doc;

    public function __construct(string $html)
    {
        $this->doc = new DOMDocument();
        // префікс змушує DOMDocument читати як UTF-8
        @$this->doc->loadHTML('<?xml encoding="utf-8">' . $html);
        $this->x = new DOMXPath($this->doc);
    }

    /** Текст першого збігу. */
    public function text(string $q): string
    {
        $n = $this->x->query($q);
        return $n && $n->length ? trim(preg_replace('/\s+/', ' ', $n->item(0)->textContent)) : '';
    }

    /** Значення атрибута/нода першого збігу (для @href, @content тощо). */
    public function attr(string $q): string
    {
        $n = $this->x->query($q);
        return $n && $n->length ? trim($n->item(0)->nodeValue) : '';
    }

    /** Чи є хоч один збіг. */
    public function has(string $q): bool
    {
        $n = $this->x->query($q);
        return $n && $n->length > 0;
    }

    /** Сирий доступ до DOMNodeList. */
    public function nodes(string $q): DOMNodeList
    {
        return $this->x->query($q);
    }
}
