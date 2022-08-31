<?php


namespace Patters\Structural\Facade;


class Facade
{
    protected A $a;
    protected B $b;

    /**
     * Facade constructor.
     * @param A $a
     * @param B $b
     */
    public function __construct(A $a = null, B $b = null)
    {
        $this->a = $a ?: new A();
        $this->b = $b ?: new B();
    }

    public function goAndSay()
    {
        $this->a->go();
        $this->b->sey();
    }
    public function sayAndGo()
    {
        $this->b->sey();
        $this->a->go();
    }


}