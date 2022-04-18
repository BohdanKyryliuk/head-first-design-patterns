<?php

namespace Diablo;

class BowAndArrowBehavior implements WeaponBehavior
{

    public function useWeapon(): void
    {
        echo 'Shot by bow and arrow';
    }
}