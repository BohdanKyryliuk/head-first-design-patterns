<?php

namespace SimUDuck\ImplementationWithStrategy;

class FlyWithWings implements FlyBehavior
{

    public function fly(): void
    {
        echo "I'm flying!";
    }
}