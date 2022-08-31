<?php


namespace Patters\Behavioral\State;


class Developer
{
    private Action $action;

    /**
     * @param Action $action
     */
    public function setAction(Action $action): void
    {
        $this->action = $action;
    }

    public function changeAction()
    {
        if ($this->action instanceof Coding) {
            $this->setAction(new Sleeping());
        } elseif ($this->action instanceof Sleeping) {
            $this->setAction(new Coding());
        }
    }

    public function doIt()
    {
        $this->action->doTi();
    }
}