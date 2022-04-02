<?php

declare(strict_types=1);

namespace Domain;

use Domain\Interfaces\CarAware;
use Domain\Interfaces\TypeAware;

final class Truck extends AbstractCar implements TypeAware, CarAware
{
    public function type(): string
    {
        return 'Truck';
    }
}
