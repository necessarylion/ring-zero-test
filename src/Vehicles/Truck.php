<?php

namespace Aj\TestRingZero\Vehicles;

class Truck extends Vehicle
{
    public $name = 'truck';

    public function speed()
    {
        return 60;
    }
}
