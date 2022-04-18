<?php

namespace SimUDuck\ImplementationWithInterface;

abstract class Duck
{

    public function swim()
    {
        echo 'swim';
    }

    abstract public function display();
}