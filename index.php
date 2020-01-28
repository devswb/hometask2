<?php

declare(strict_types=1);


use discriminantCalc\DiscriminantCalc;

require_once __DIR__ . '/discriminantCalc/DiscriminantCalc.php';
require_once __DIR__ . '/vendor/autoload.php';

$discriminantCalc = new DiscriminantCalc(5, 25, 15);
$discriminantCalc->discriminant();
$discriminantCalc->Result();