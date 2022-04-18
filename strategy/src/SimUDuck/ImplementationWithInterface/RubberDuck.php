<?php

namespace SimUDuck\ImplementationWithInterface;

class RubberDuck extends Duck implements Quackable
{
    public function quack()
    {
        echo 'Squeak';
    }

    public function display()
    {
        echo 'looks like rubber duck';
    }
}