<?php


namespace Patters\Structural\Bridge;


abstract class Programmer
{
    protected ILanguage $language;

    /**
     * Programmer constructor.
     * @param ILanguage $language
     */
    public function __construct(ILanguage $language)
    {
        $this->language = $language;
    }

    public function doWork()
    {
        $this->language->build();
        $this->language->execute();
    }

    abstract public function earnMoney();

}