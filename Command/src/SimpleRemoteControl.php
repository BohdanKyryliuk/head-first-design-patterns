<?php

namespace Command;

use Command\Commands\Command;

class SimpleRemoteControl
{
    private Command $slot;

    /**
     * @param Command $command
     */
    public function setCommand(Command $command): void
    {
        $this->slot = $command;
    }

    public function buttonWasPressed(): void
    {
        $this->slot->execute();
    }
}
