<?php

declare(strict_types=1);

use Domain\Kindle;

require __DIR__ . '/../vendor/autoload.php';

$kindle = new Kindle();
$adapter = new Adapter\EbookAdapter($kindle);
$adapter->open();
$adapter->turnPage();
var_dump($adapter->getPage());

