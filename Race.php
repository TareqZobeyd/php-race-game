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

}