<?php

declare(strict_types=1);

namespace Factory;

abstract class AbstractCar
{
    private int $numbOfWheels;

    private int $numOfDoors;

    private string $color;

    private string $transmission;

    public function getNumbOfWheels(): int
    {
        return $this->numbOfWheels;
    }

    public function setNumbOfWheels(int $numbOfWheels): void
    {
        $this->numbOfWheels = $numbOfWheels;
    }

    public function getNumOfDoors(): int
    {
        return $this->numOfDoors;
    }

    public function setNumOfDoors(int $numOfDoors): void
    {
        $this->numOfDoors = $numOfDoors;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNumOfDoor(): int
    {
        return $this->numOfDoor;
    }

    public function setNumOfDoor(int $numOfDoor): void
    {
        $this->numOfDoor = $numOfDoor;
    }

    public function getTransmission(): string
    {
        return $this->transmission;
    }

    public function setTransmission(string $transmission): void
    {
        $this->transmission = $transmission;
    }
}
