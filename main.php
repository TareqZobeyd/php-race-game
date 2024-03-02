<?php

require_once 'Vehicle.php';
require_once 'Race.php';
require_once './php-cli-tools/lib/cli/cli.php';

// Load vehicles data from JSON file
$vehiclesData = json_decode(file_get_contents('vehicles.json'), true);

// Initialize CLI prompts and outputs
cli\line("Welcome to the Racing Game!");

// Display vehicle selection menu
$choices = [];
foreach ($vehiclesData as $index => $vehicle) {
    $choices[] = $vehicle['name'];
}

$selectedVehicleIndex1 = cli\menu($choices, false, "Player 1, choose your vehicle:");
$selectedVehicleIndex2 = cli\menu($choices, false, "Player 2, choose your vehicle:");


