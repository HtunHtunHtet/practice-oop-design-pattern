<?php

declare(strict_types=1);

use Factory\CarFactory;
use Factory\Sedan;

require __DIR__ . '/../vendor/autoload.php';

/** @var Sedan $sedan */
$sedan = (new CarFactory())->makeCar('sedan');
$sedan->setColor('white');
$sedan->setNumOfDoors(4);
$sedan->setTransmission('auto');
$sedan->setNumbOfWheels(4);


var_dump($sedan);
