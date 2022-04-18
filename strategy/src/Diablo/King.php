<?php

namespace Diablo;

class King extends Character
{

    public function __construct()
    {
        $this->weapon = new SwordBehavior();
    }

    public function fight()
    {
        $this->weapon->useWeapon();
    }
}