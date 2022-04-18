<?php

namespace SimUDuck\ImplementationWithInterface;

class MallardDuck extends Duck implements Flyable, Quackable
{

    public function display()
    {
        echo 'looks like a mallard';
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