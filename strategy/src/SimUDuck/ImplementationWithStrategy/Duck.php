<?php

namespace SimUDuck\ImplementationWithStrategy;

abstract class Duck
{
    public FlyBehavior $flyBehavior;
    public QuackBehavior $quackBehavior;

    public function swim()
    {
        echo 'All ducks float, even decoys!';
    }

    abstract public function display();

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }
}
