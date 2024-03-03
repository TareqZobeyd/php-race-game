<?php

require_once 'RacingGame.php';

// Load vehicles data from JSON file
$vehiclesData = json_decode(file_get_contents('vehicles.json'), true);

$game = new RacingGame($vehiclesData);
$game->start();