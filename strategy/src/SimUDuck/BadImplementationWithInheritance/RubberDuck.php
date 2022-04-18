<?php

namespace SimUDuck\BadImplementationWithInheritance;

class RubberDuck extends Duck
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