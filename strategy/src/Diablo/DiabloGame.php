<?php

namespace Diablo;

class DiabloGame
{
    public function main()
    {
        $queen = new Queen();
        $queen->fight();
        echo PHP_EOL;

        $king = new King();
        $king->fight();
        echo PHP_EOL;

        $knight = new Knight();
        $knight->fight();
        echo PHP_EOL;
        $knight->setWeapon(new SwordBehavior());
        $knight->fight();
        echo PHP_EOL;

        $troll = new Troll();
        $troll->fight();
        echo PHP_EOL;
    }
}