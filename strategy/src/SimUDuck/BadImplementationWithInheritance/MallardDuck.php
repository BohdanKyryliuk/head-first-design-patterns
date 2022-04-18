<?php

namespace SimUDuck\BadImplementationWithInheritance;

class MallardDuck extends Duck
{

    public function display()
    {
        echo 'looks like a mallard';
    }
}