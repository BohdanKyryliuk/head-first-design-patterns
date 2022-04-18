<?php

namespace Factory\FactoryMethod\PizzaStores;

use Factory\FactoryMethod\Pizzas\NewYorkStyle\NYStyleCheesePizza;
use Factory\FactoryMethod\Pizzas\NewYorkStyle\NYStyleClamPizza;
use Factory\FactoryMethod\Pizzas\NewYorkStyle\NYStylePepperoniPizza;
use Factory\FactoryMethod\Pizzas\Pizza;
use Factory\FactoryMethod\Pizzas\NewYorkStyle\NYStyleVeggiePizza;

class NYStylePizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;

        if ($type === 'cheese') {
            $pizza = new NYStyleCheesePizza();
        } else if ($type === 'pepperoni') {
            $pizza = new NYStylePepperoniPizza();
        } else if ($type === 'clam') {
            $pizza = new NYStyleClamPizza();
        } else if ($type === 'veggie') {
            $pizza = new NYStyleVeggiePizza();
        }

        return $pizza;
    }
}
