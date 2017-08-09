<?php


namespace App\Patterns\AbstractFactory;


class Heisenberg extends Cook
{

    public function createLaboratory()
    {
        return new IndustrialLaboratory();
    }

    public function createMeth()
    {
        echo "SAY MY NAME.\n";
        return new BlueSky();
    }
}