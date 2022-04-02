<?php

declare(strict_types=1);


use Builder\Builder;
use Builder\SedanBuilder;
use Builder\TruckBuilder;

require __DIR__ . '/../vendor/autoload.php';

$truckBuilder = new TruckBuilder();
$truck = (new Builder())->build($truckBuilder);
var_dump($truck);

$sedanBuilder = new SedanBuilder();
$sedan = (new Builder())->build($sedanBuilder);
var_dump($sedan);


