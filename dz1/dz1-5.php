<?php

// ДЗ-1 Задание #5

$bmw = [
    'model' => '',
    'speed' => '',
    'doors' => '',
    'year' => '',
];

$bmw['model'] = 'X5';
$bmw['speed'] = '120';
$bmw['doors'] = '5';
$bmw['year'] = '2015';

$toyota = [
    'model' => '',
    'speed' => '',
    'doors' => '',
    'year' => '',
];

$toyota['model'] = 'RAW4';
$toyota['speed'] = '160';
$toyota['doors'] = '4';
$toyota['year'] = '2011';

$opel = [
    'model' => '',
    'speed' => '',
    'doors' => '',
    'year' => '',
];

$opel['model'] = 'Astra';
$opel['speed'] = '100';
$opel['doors'] = '2';
$opel['year'] = '2020';

$cars = [
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel,
];

foreach ( $cars as $carName => $car ) {
    echo 'CAR ' . $carName . '<br>';
    echo $car['model'] . ' ' . $car['speed'] . ' ' . $car['doors'] . ' ' . $car['year'] . '<br>';
    echo '<br>';
}