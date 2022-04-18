<?php

namespace Factory\AbstractFactoryMethod\PizzaStores;

use Factory\AbstractFactoryMethod\Pizzas\CaliforniaStyle\CaliforniaStyleCheesePizza;
use Factory\AbstractFactoryMethod\Pizzas\CaliforniaStyle\CaliforniaStyleClamPizza;
use Factory\AbstractFactoryMethod\Pizzas\CaliforniaStyle\CaliforniaStylePepperoniPizza;
use Factory\AbstractFactoryMethod\Pizzas\Pizza;
use Factory\AbstractFactoryMethod\Pizzas\CaliforniaStyle\CaliforniaStyleVeggiePizza;

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
