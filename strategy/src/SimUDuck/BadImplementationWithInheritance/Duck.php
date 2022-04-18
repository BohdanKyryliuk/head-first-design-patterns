<?php

namespace SimUDuck\BadImplementationWithInheritance;

abstract class Duck
{
    public function quack()
    {
        echo 'quack quack';
    }

    public function swim()
    {
        echo 'swim';
    }

    abstract public function display();

    public function fly()
    {
        echo 'fly';
    }
}