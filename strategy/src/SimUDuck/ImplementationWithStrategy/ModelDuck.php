<?php

namespace SimUDuck\ImplementationWithStrategy;

class ModelDuck extends Duck
{

    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        echo "I'm a model duck";
    }
}