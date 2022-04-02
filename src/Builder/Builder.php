<?php

namespace Builder;

use Domain\AbstractCar;

class Builder
{
    public function build(BuilderInterface $builder): AbstractCar
    {
        $builder->createCar();
        $builder->addDoors();
        $builder->addWheels();
        $builder->addTransmissionType();
        $builder->addColor();

        return $builder->getCar();
    }

}
