<?php

class Race
{

    private $player1Vehicle;
    private $player2Vehicle;

    public function __construct($player1Vehicle, $player2Vehicle)
    {
        $this->player1Vehicle = $player1Vehicle;
        $this->player2Vehicle = $player2Vehicle;
    }

    public function start($distance)
    {
        $player1Time = $this->player1Vehicle->calculateTime($distance);
        $player2Time = $this->player2Vehicle->calculateTime($distance);

        return [$player1Time, $player2Time];
    }
}