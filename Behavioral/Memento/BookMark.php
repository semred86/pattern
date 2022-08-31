<?php


namespace Patters\Behavioral\Memento;

/*
 * Caretaker
 */

class BookMark
{
    private string $page;

    function __construct(BookReader $bookReader)
    {
        $this->setPage($bookReader);
    }

    public function getPage(BookReader $bookReader)
    {
        $bookReader->setPage($this->page);
    }

    public function setPage(BookReader $bookReader)
    {
        $this->page = $bookReader->getPage();
    }
}