<?php

namespace Diablo;

abstract class Character
{
    protected WeaponBehavior $weapon;

    abstract public function fight();

    public function setWeapon(WeaponBehavior $weapon)
    {
        $this->weapon = $weapon;
    }
}
