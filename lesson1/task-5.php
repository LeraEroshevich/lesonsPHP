<?php
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015
];

$toyota = [
    'model' => 'Picnic',
    'speed' => 130,
    'doors' => 4,
    'year' => 2001
];

$opel = [
    'model' => 'Astra',
    'speed' => 110,
    'doors' => 5,
    'year' => 2010
];

$cars = [
    'BMW' => $bmw,
    'Toyota' => $toyota,
    'Opel' => $opel
];

foreach ($cars as $brand => $car) {
    echo "CAR: $brand\n";
    echo "Model: " . $car['model'] . "<br>";
    echo "Speed: " . $car['speed'] . "<br>";
    echo "Doors: " . $car['doors'] . "<br>";
    echo "Year: " . $car['year'] . "<br>";
}
