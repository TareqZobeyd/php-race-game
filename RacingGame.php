<?php

require_once 'Vehicle.php';
require_once 'Race.php';
require_once './php-cli-tools/lib/cli/cli.php';
require_once './php-cli-tools/lib/cli/streams.php';
require_once './php-cli-tools/lib/cli/colors.php';
require_once './php-cli-tools/lib/cli/Table.php';
require_once './php-cli-tools/lib/cli/Shell.php';
require_once './php-cli-tools/lib/cli/table/Renderer.php';
require_once './php-cli-tools/lib/cli/table/Ascii.php';
class RacingGame
{

    private $vehicles;

    public function __construct(array $vehicles)
    {
        $this->vehicles = $vehicles;
    }

    public function start()
    {
        cli\line("Welcome to the Racing Game!");

        $choices = array_column($this->vehicles, 'name');
        $selectedVehicleIndex1 = cli\menu($choices, false, "Player 1, choose your vehicle");
        $selectedVehicleIndex2 = cli\menu($choices, false, "Player 2, choose your vehicle");

        $player1VehicleData = $this->vehicles[$selectedVehicleIndex1];
        $player2VehicleData = $this->vehicles[$selectedVehicleIndex2];

        $player1Vehicle = new Vehicle($player1VehicleData['name'], $player1VehicleData['maxSpeed'], $player1VehicleData['unit']);
        $player2Vehicle = new Vehicle($player2VehicleData['name'], $player2VehicleData['maxSpeed'], $player2VehicleData['unit']);

        $race = new Race($player1Vehicle, $player2Vehicle);
        $distance = 1000; // for example
        [$player1Time, $player2Time] = $race->start($distance);

        if ($player1Time < $player2Time) {
            $winner = "Player 1";
        } elseif ($player1Time > $player2Time) {
            $winner = "Player 2";
        } else {
            $winner = "It's a tie!";
        }

        $table = new Table();
        $table->setHeaders(['Player', 'Vehicle', 'Speed', 'Time Taken']);
        $table->addRow(['Player 1', $player1Vehicle->getName(), $player1Vehicle->getMaxSpeed()
            . ' ' . $player1Vehicle->getUnit(), $player1Time . ' seconds']);
        $table->addRow(['Player 2', $player2Vehicle->getName(), $player2Vehicle->getMaxSpeed()
            . ' ' . $player2Vehicle->getUnit(), $player2Time . ' seconds']);
        $table->display();

        cli\line("Winner: $winner");
    }
}