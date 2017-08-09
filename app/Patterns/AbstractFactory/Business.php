<?php


namespace App\Patterns\AbstractFactory;


class Business
{

    public function run()
    {
        $cooks = collect([
            'Heisenberg' => new Heisenberg,
            'Pinkman' => new Pinkman
        ]);

        $gustavo = new Gustavo($cooks->random());
        $gustavo->sellDrugs();
    }
}