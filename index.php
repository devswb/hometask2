<?php

declare(strict_types=1);

use devswb\hometask2\discriminantCalc\DiscriminantCalc;
use devswb\hometask2\discriminantCalc\car\Car;
use devswb\hometask2\discriminantCalc\car2\Car as CarAlias;

require_once __DIR__ . '/vendor/autoload.php';

(new Car())->go();

(new CarAlias())->go();

$discriminantCalc = new DiscriminantCalc(5, 25, 15);
$discriminantCalc->discriminant();
$discriminantCalc->Result();