<?php

namespace Domain;

use Domain\Interfaces\CarAware;
use Domain\Interfaces\TypeAware;

final class Sedan extends AbstractCar implements TypeAware, CarAware
{
    public function type(): string
    {
        return 'Sedan';
    }
}
