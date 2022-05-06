<?php

namespace Aj\TestRingZero\Vehicles;

abstract class Vehicle
{
    public $extraMinsToReady = 0;
    
    abstract public function speed();
}
