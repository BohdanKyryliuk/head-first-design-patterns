<?php

namespace Diablo;

class AxeBehavior implements WeaponBehavior
{

    public function useWeapon(): void
    {
        echo 'Strike by axe';
    }
}