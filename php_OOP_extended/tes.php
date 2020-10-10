<?php

class Cycle
{
    private $color;
    private $speed;
    protected $variant="Variant Cycle";


    public function __construct($color, $speed)
    {
        $this->color=$color;
        $this->speed=$speed;
    }

    public function canRide()
    {
        echo "This Cycle Can Ride, This Cycle have color {$this->color} and have speed {$this->speed}km/hour.\n";
    }
}



class ElectricCycle extends Cycle
{
     public function resourcePower()
     {
         echo "This Cycle have batteries for power";
         echo $this->variant;
     }
}

$mini_scooter=new ElectricCycle("Red","2");

$mini_scooter->canRide();

$mini_scooter->resourcePower();

// echo phpinfo();