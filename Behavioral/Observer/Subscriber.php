<?php


namespace Patters\Behavioral\Observer;


class Subscriber implements Observer
{
    public string $name;

    /**
     * Subscriber constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function handleEvent(array $events)
    {
        echo "Hello $this->name, here is some vacancies:\n";
        foreach ($events as $event) {
            echo "- $event\n";
        }
        echo "============================\n\n";
    }
}