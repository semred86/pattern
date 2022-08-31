<?php


namespace Patters\Behavioral\Strategy;


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

    public function doIt()
    {
        $this->action->doTi();
    }
}