<?php

namespace Aj\TestRingZero\Vehicles;

class Bike extends Vehicle
{
    public $name = 'bike';
    
    public function speed()
    {
        return 100;
    }
}
