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


use cli\Table;


// Load vehicles data from JSON file
$vehiclesData = json_decode(file_get_contents('vehicles.json'), true);

// Initialize CLI prompts and outputs
cli\line("Welcome to the Racing Game!");

// Display vehicle selection menu
$choices = [];
foreach ($vehiclesData as $index => $vehicle) {
    $choices[] = $vehicle['name'];
}

$selectedVehicleIndex1 = cli\menu($choices, false, $title = "Player 1, choose your vehicle");
$selectedVehicleIndex2 = cli\menu($choices, false, $title = "Player 2, choose your vehicle");

// Create vehicles objects based on player selections
$player1VehicleData = $vehiclesData[$selectedVehicleIndex1];
$player2VehicleData = $vehiclesData[$selectedVehicleIndex2];

$player1Vehicle = new Vehicle($player1VehicleData['name'], $player1VehicleData['maxSpeed'], $player1VehicleData['unit']);
$player2Vehicle = new Vehicle($player2VehicleData['name'], $player2VehicleData['maxSpeed'], $player2VehicleData['unit']);

// Start the game
$race = new Race($player1Vehicle, $player2Vehicle);
$distance = 1000; // for example
[$player1Time, $player2Time] = $race->start($distance);

// Declare the winner
if ($player1Time < $player2Time) {
    $winner = "Player 1";
} elseif ($player1Time > $player2Time) {
    $winner = "Player 2";
} else {
    $winner = "It's a tie!";
}

// Display race results
$table = new Table();
$table->setHeaders(['Player', 'Vehicle', 'Speed', 'Time Taken']); // Include 'Speed' column
$table->addRow(['Player 1', $player1Vehicle->getName(), $player1Vehicle->getMaxSpeed()
    . ' ' . $player1Vehicle->getUnit(), $player1Time . ' seconds']);
$table->addRow(['Player 2', $player2Vehicle->getName(), $player2Vehicle->getMaxSpeed()
    . ' ' . $player2Vehicle->getUnit(), $player2Time . ' seconds']);
$table->display();

cli\line("Winner: $winner");