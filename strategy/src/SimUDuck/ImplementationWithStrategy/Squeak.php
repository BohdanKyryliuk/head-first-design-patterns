<?php

namespace SimUDuck\ImplementationWithStrategy;

class Squeak implements QuackBehavior
{

    public function quack(): void
    {
        // rubber ducks squeak
        echo "Squeak";
    }
}