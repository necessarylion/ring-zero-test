<?php

namespace Aj\TestRingZero\Vehicles;

class Boat extends Vehicle
{
    public $extraMinsToReady = 15;

    public $name = 'boat';

    public function speed()
    {
        return 50;
    }
}
