<?php

declare(strict_types=1);

namespace Builder;

use Domain\AbstractCar;

interface BuilderInterface
{
    public function addDoors(): void;

    public function addWheels(): void;

    public function addTransmissionType(): void;

    public function addColor(): void;

    public function createCar(): void;

    public function getCar(): AbstractCar;

}
