<?php

namespace Factory\FactoryMethod\PizzaStores;

use Factory\FactoryMethod\Pizzas\Pizza;

abstract class PizzaStore
{
    abstract protected function createPizza(string $type): Pizza;

    final public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
