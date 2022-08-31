<?php


namespace Patters\Behavioral\Memento;


class BookReader
{
    private string $page;

    function __construct($page_in)
    {
        $this->setPage($page_in);
    }

    public function getPage(): string
    {
        return $this->page . "\n";
    }

    public function setPage($page_in)
    {
        $this->page = $page_in;
    }
}