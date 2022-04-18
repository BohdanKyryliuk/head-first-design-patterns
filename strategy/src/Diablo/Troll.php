<?php

namespace Diablo;

class Troll extends Character
{

    public function __construct()
    {
        $this->weapon = new AxeBehavior();
    }

    public function fight()
    {
        $this->weapon->useWeapon();
    }
}