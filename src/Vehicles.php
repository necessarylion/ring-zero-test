<?php

namespace Aj\TestRingZero;

use Aj\TestRingZero\Vehicles\Vehicle;

class Vehicles
{
    /**
     * vehicle list
     *
     * @var array
     */
    private $list = [];

    /**
     * add vehicle to the list
     *
     * @param Vehicle $vehicle
     * @return void
     */
    public function addVehicle(Vehicle $vehicle)
    {
        $this->list[] = $vehicle;
    }

    /**
     * get list of vehicle added
     *
     * @return array<Vehicle>
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * calculate and print duration for each vehicle
     *
     * @param integer $distance
     * @return void
     */
    public function printDurationForEachVehicle(int $distance)
    {
        echo 'Duration of each vehicle to reach destination' . PHP_EOL;
        foreach ($this->list as $vehicle) {
            $duration = ($distance/$vehicle->speed())
                + ($vehicle->extraMinsToReady/60);
            echo sprintf('%s : %s', $vehicle->name, $duration).PHP_EOL;
        }
    }
}
