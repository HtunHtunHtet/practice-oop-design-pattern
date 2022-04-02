<?php

namespace Builder;

use Domain\AbstractCar;
use Domain\Sedan;

class SedanBuilder implements BuilderInterface
{
    private Sedan $sedan;

    public function addDoors(): void
    {
        $this->sedan->setNumOfDoors(4);
    }

    public function addWheels(): void
    {
       $this->sedan->setNumOfWheels(4);
    }

    public function addTransmissionType(): void
    {
       $this->sedan->setTransmission('auto');
    }

    public function addColor(): void
    {
       $this->sedan->setColor('brown');
    }

    public function createCar(): void
    {
        $this->sedan = new Sedan();
    }

    public function getCar(): AbstractCar
    {
       return $this->sedan;
    }
}
