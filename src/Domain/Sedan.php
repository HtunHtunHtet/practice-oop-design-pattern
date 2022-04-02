<?php

namespace Domain;

final class Sedan extends AbstractCar implements TypeAware, CarAware
{
    public function type(): string
    {
        return 'Sedan';
    }
}
