<?php

namespace SimUDuck\BadImplementationWithInheritance;

class DecoyDuck extends Duck
{

    public function quack()
    {
        // do nothing
    }

    public function fly()
    {
        // do nothing
    }

    public function display()
    {
        echo 'looks like decoy duck';
    }
}