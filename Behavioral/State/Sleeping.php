<?php


namespace Patters\Behavioral\State;


class Sleeping implements Action
{

    public function doTi()
    {
        print "sleeping...";
    }
}