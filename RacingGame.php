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

}