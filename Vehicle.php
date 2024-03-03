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

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    // Convert speed to a common unit (Km/h) for calculation
    public function getSpeedInKmPerHour()
    {
        if ($this->unit === 'Km/h') {
            return $this->maxSpeed;
        } elseif ($this->unit === 'knots') {
            // 1 knot = 1.852 Km/h
            return $this->maxSpeed * 1.852;
        } elseif ($this->unit === 'Kts') {
            // 1 Knot (Kts) = 1.852 Kilometer Per Hour (Km/h)
            return $this->maxSpeed * 1.852;
        }
    }

    public function calculateTime($distance)
    {
        $speedInKmPerHour = $this->getSpeedInKmPerHour();
        return round($distance / $speedInKmPerHour, 2);
    }

}