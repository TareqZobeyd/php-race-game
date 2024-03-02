<?php

class vehicle
{

    private $name;
    private $speed;

    public function __construct($name, $speed)
    {
        $this->name = $name;
        $this->speed = $speed;
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