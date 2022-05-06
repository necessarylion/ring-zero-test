<?php

include "./vendor/autoload.php";

use Aj\TestRingZero\Vehicles;
use Aj\TestRingZero\Vehicles\Bike;
use Aj\TestRingZero\Vehicles\Boat;
use Aj\TestRingZero\Vehicles\SportCar;
use Aj\TestRingZero\Vehicles\Truck;
use Aj\TestRingZero\Vehicles\Vehicle;

$distance = 350;

// custom new vehicle
class Flight extends Vehicle
{
    public $name = 'Flight';

    public $extraMinsToReady = '60';

    public function speed()
    {
        return 350;
    }
}

$vehicles = new Vehicles();
$vehicles->addVehicle(new SportCar);
$vehicles->addVehicle(new Truck);
$vehicles->addVehicle(new Bike);
$vehicles->addVehicle(new Boat);
$vehicles->addVehicle(new Flight);

print_r($vehicles->printDurationForEachVehicle($distance));


function transformedArray($array)
{
    $newArray = [];
    $totalZeros = count(array_filter($array, function ($val) {
        return $val == 0;
    }));

    $half = round($totalZeros/2, 0);

    $noZeroArray = array_filter($array, function ($val) {
        return $val != 0;
    });

    $newArray = $noZeroArray;

    for ($i = 0; $i< $totalZeros; $i++) {
        if ($i < $half) {
            array_unshift($newArray, 0);
        } else {
            array_push($newArray, 0);
        }
    }

    return $newArray;
}

echo PHP_EOL;

echo 'Test 1 :'. (transformedArray([3,5,6,0,7,0,1]) == [0,3,5,6,7,1,0] ? 'passed' : 'failed');

echo PHP_EOL;

echo 'Test 2 :'. (transformedArray([5,0,0,6,0,8]) == [0,0,5,6,8,0] ? 'passed' : 'failed');

echo PHP_EOL;

echo 'Test 3 :'. (transformedArray([1,2,3,0,0,0,0]) == [0,0,1,2,3,0,0] ? 'passed' : 'failed');

echo PHP_EOL;

echo 'Test 4 :'. (transformedArray([1,2,3]) == [1,2,3] ? 'passed' : 'failed');

echo PHP_EOL;
