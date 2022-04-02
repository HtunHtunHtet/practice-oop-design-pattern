<?php

namespace Factory;

class Truck extends AbstractCar implements TypeAware, CarAware
{
    public function type(): string
    {
        return 'Truck';
    }
}
