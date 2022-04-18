<?php

namespace Command\Commands\Light;

use Command\Commands\Command;
use Command\Devices\Light;

class LightOnCommand implements Command
{

    public function __construct(private Light $light)
    {
    }

    public function execute()
    {
        $this->light->on();
    }
}
