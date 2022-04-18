<?php

namespace Diablo;

class Knight extends Character
{

    public function __construct()
    {
        $this->weapon = new BowAndArrowBehavior();
    }

    public function fight()
    {
        $this->weapon->useWeapon();
    }
}