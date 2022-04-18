<?php

namespace Factory\FactoryMethod\PizzaStores;

use Factory\FactoryMethod\Pizzas\CaliforniaStyle\CaliforniaStyleCheesePizza;
use Factory\FactoryMethod\Pizzas\CaliforniaStyle\CaliforniaStyleClamPizza;
use Factory\FactoryMethod\Pizzas\CaliforniaStyle\CaliforniaStylePepperoniPizza;
use Factory\FactoryMethod\Pizzas\Pizza;
use Factory\FactoryMethod\Pizzas\CaliforniaStyle\CaliforniaStyleVeggiePizza;

class CaliforniaStylePizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;

        if ($type === 'cheese') {
            $pizza = new CaliforniaStyleCheesePizza();
        } else if ($type === 'pepperoni') {
            $pizza = new CaliforniaStylePepperoniPizza();
        } else if ($type === 'clam') {
            $pizza = new CaliforniaStyleClamPizza();
        } else if ($type === 'veggie') {
            $pizza = new CaliforniaStyleVeggiePizza();
        }

        return $pizza;
    }
}
