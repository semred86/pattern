<?php


namespace Patters\Behavioral\Strategy;


class Sleeping implements Action
{

    public function doTi()
    {
        print "sleeping...";
    }
}