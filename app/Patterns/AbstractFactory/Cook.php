<?php


namespace App\Patterns\AbstractFactory;


abstract class Cook
{
    abstract public function createLaboratory();
    abstract public function createMeth();

    public function calculateWorth()
    {
        $batches = $this->createLaboratory()->batchesPerMonth();
        $purity = $this->createMeth()->purity();
        $moneyPerBatch = 1000000;

        return $batches * $purity * $moneyPerBatch;
    }
}