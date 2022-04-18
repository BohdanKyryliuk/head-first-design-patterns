<?php

namespace SimUDuck\ImplementationWithStrategy;

class FlyNoWay implements FlyBehavior
{

    public function fly(): void
    {
        echo "I can't fly";
    }
}