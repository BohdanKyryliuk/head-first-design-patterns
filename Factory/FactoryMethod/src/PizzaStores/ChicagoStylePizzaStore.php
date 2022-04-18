<?php

namespace Factory\FactoryMethod\PizzaStores;

use Factory\FactoryMethod\Pizzas\ChicagoStyle\ChicagoStyleCheesePizza;
use Factory\FactoryMethod\Pizzas\ChicagoStyle\ChicagoStyleClamPizza;
use Factory\FactoryMethod\Pizzas\ChicagoStyle\ChicagoStylePepperoniPizza;
use Factory\FactoryMethod\Pizzas\Pizza;
use Factory\FactoryMethod\Pizzas\ChicagoStyle\ChicagoStyleVeggiePizza;

class ChicagoStylePizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;

        if ($type === 'cheese') {
            $pizza = new ChicagoStyleCheesePizza();
        } else if ($type === 'pepperoni') {
            $pizza = new ChicagoStylePepperoniPizza();
        } else if ($type === 'clam') {
            $pizza = new ChicagoStyleClamPizza();
        } else if ($type === 'veggie') {
            $pizza = new ChicagoStyleVeggiePizza();
        }

        return $pizza;
    }
}
