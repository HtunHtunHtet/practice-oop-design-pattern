<?php

namespace Factory;

use Domain\Interfaces\CarAware;
use Domain\Sedan;
use Domain\Truck;

class CarFactory
{
    public function makeCar(string $type): ?CarAware
    {
      if ('truck' === $type) {
          return new Truck();
      }

      if ('sedan' === $type) {
          return new Sedan();
      }

      return null;
    }
}
