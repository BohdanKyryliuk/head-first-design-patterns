<?php

namespace SimUDuck\ImplementationWithStrategy;

class Quack implements QuackBehavior
{

    public function quack(): void
    {
        echo "Quack";
    }
}