<?php

namespace Diablo;

class SwordBehavior implements WeaponBehavior
{

    public function useWeapon(): void
    {
        echo 'Strike by sword';
    }
}