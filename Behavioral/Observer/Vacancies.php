<?php


namespace Patters\Behavioral\Observer;


class Vacancies implements Observable
{
    private array $vacancies;
    private \SplObjectStorage $subscribers;

    /**
     * Vacancies constructor.
     */
    public function __construct()
    {
        $this->vacancies = [];
        $this->subscribers = new \SplObjectStorage();
    }

    public function addVacancy(string $vacancy)
    {
        $this->vacancies[] = $vacancy;
        $this->notifyObservers();
    }

    public function removeVacancy(string $vacancy)
    {
        unset($this->vacancies[array_search($vacancy, $this->vacancies)]);
        $this->notifyObservers();
    }

    public function addObserver(Observer $observer)
    {
        $this->subscribers->attach($observer);
    }

    public function removeObserver(Observer $observer)
    {
        $this->subscribers->detach($observer);
    }

    public function notifyObservers()
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->handleEvent($this->vacancies);
        }
    }
}