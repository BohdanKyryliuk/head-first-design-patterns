<?php

namespace SimUDuck\ImplementationWithInterface;

class RedheadDuck extends Duck implements Flyable, Quackable
{

    public function display()
    {
        echo 'looks like a redhead';
    }

    public function fly()
    {
        echo 'fly';
    }

    public function quack()
    {
        echo 'quack quack';
    }
}