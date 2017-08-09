<?php


namespace App\Patterns\AbstractFactory;


class Pinkman extends Cook
{

    public function createLaboratory()
    {
        return new BasementLaboratory();
    }

    public function createMeth()
    {
        echo "Making some fat stacks, Bitch!\n";
        return new ChillyP();
    }
}