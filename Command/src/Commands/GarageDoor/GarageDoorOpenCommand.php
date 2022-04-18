<?php

namespace Command\Commands\GarageDoor;

use Command\Commands\Command;
use Command\Devices\GarageDoor;

class GarageDoorOpenCommand implements Command
{

    public function __construct(private GarageDoor $garageDoor)
    {
    }

    public function execute()
    {
        $this->garageDoor->up();
    }
}
