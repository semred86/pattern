<?php


namespace Patters\Structural\Bridge;


class CPPLanguage implements ILanguage
{

    public function build()
    {
        echo "compil c++ to beenary\n";
    }

    public function execute()
    {
        echo "execute file\n";
    }
}