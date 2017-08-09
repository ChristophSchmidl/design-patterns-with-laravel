<?php


namespace App\Patterns\AbstractFactory;


class Gustavo
{
    protected $cook;

    public function __construct(Cook $cook)
    {
        $this->cook = $cook;
    }

    public function sellDrugs()
    {
        print "Your cook produced $" . $this->cook->calculateWorth() . ' worth of Meth.' . PHP_EOL;
    }
}