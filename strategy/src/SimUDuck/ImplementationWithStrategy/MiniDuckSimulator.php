<?php

namespace SimUDuck\ImplementationWithStrategy;

class MiniDuckSimulator
{
    public function main()
    {
        $mallard = new MallardDuck();
        $mallard->performQuack();
        echo PHP_EOL;
        $mallard->performFly();
        echo PHP_EOL;

        $model = new ModelDuck();
        $model->performFly();
        echo PHP_EOL;
        $model->setFlyBehavior(new FlyRocketPowered());
        $model->performFly();
    }
}