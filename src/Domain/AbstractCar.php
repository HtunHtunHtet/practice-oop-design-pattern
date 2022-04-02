<?php

declare(strict_types=1);

namespace Domain;

abstract class AbstractCar
{
    private int $numOfWheels;

    private int $numOfDoors;

    private string $color;

    private string $transmission;

    public function getNumOfWheels(): int
    {
        return $this->numOfWheels;
    }

    public function setNumOfWheels(int $numOfWheels): void
    {
        $this->numOfWheels = $numOfWheels;
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
