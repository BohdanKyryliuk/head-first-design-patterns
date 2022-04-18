<?php

namespace Command;

use Command\Commands\Light\LightOnCommand;
use Command\Devices\GarageDoor;
use Command\Devices\Light;
use Command\Commands\GarageDoor\GarageDoorOpenCommand;

class RemoteControlTest
{
    public static function main(): void
    {
        $remote = new SimpleRemoteControl();
        $light = new Light();
        $garageDoor = new GarageDoor();
        $lightOnCommand = new LightOnCommand($light);
        $garageDoorOpenCommand = new GarageDoorOpenCommand($garageDoor);

        $remote->setCommand($lightOnCommand);
        $remote->buttonWasPressed();
        $remote->setCommand($garageDoorOpenCommand);
        $remote->buttonWasPressed();
    }
}
