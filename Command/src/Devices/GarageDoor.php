<?php

namespace Command\Devices;

class GarageDoor
{
    public function up()
    {
        echo 'Garage Door is opening!'.PHP_EOL;
    }

    public function down()
    {
        echo 'Garage Door is closing!'.PHP_EOL;
    }

    public function stop()
    {
        echo 'Garage Door is stopped!'.PHP_EOL;
    }

    public function lightOn()
    {
        echo 'Light is on in Garage!'.PHP_EOL;
    }

    public function lightOff()
    {
        echo 'Light is off in Garage!'.PHP_EOL;
    }
}
