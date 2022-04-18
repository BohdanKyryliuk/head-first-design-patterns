<?php

namespace SimUDuck\ImplementationWithStrategy;

class MuteQuack implements QuackBehavior
{

    public function quack(): void
    {
        // do nothing, because can't quack
        echo "<< Silence >>";
    }
}