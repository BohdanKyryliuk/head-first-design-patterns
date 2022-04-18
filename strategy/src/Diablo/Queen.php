<?php

namespace Diablo;

class Queen extends Character
{

    public function __construct()
    {
        $this->weapon = new KnifeBehavior();
    }

    public function fight()
    {
        $this->weapon->useWeapon();
    }
}