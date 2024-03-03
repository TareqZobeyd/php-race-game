<?php

class vehicle
{

    private $name;
    private $maxSpeed;
    private $unit;

    public function __construct($name, $maxSpeed, $unit)
    {
        $this->name = $name;
        $this->maxSpeed = $maxSpeed;
        $this->unit = $unit;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function calculateTime($distance)
    {
        return round($distance / $this->speed, 2);
    }

}