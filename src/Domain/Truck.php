<?php

declare(strict_types=1);

namespace Domain;

final class Truck extends AbstractCar implements TypeAware, CarAware
{
    public function type(): string
    {
        return 'Truck';
    }
}
