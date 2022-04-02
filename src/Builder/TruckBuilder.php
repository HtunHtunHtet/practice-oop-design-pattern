<?php

namespace Builder;

use Domain\AbstractCar;
use Domain\Truck;

final class TruckBuilder implements BuilderInterface
{
    private Truck $truck;

    public function addDoors(): void
    {
        $this->truck->setNumOfWheels(2);
    }

    public function addWheels(): void
    {
        $this->truck->setNumOfWheels(10);
    }

    public function addTransmissionType(): void
    {
       $this->truck->setNumOfDoors(2);
    }

    public function addColor(): void
    {
        $this->truck->setColor('white');
    }

    public function createCar(): void
    {
        $this->truck = new Truck();
    }

    public function getCar():AbstractCar
    {
        return $this->truck;
    }
}
