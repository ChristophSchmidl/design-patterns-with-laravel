<?php


namespace App\Patterns\AbstractFactory;


class IndustrialLaboratory extends Laboratory
{

    public function batchesPerMonth()
    {
        return 8;
    }
}