<?php

namespace Diablo;

class KnifeBehavior implements WeaponBehavior
{

    public function useWeapon(): void
    {
        echo 'Strike by knife';
    }
}