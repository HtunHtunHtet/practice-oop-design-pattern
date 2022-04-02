<?php

namespace Factory;

class Sedan extends AbstractCar implements TypeAware, CarAware
{
    public function type(): string
    {
        return 'Sedan';
    }
}
