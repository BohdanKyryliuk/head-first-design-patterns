<?php

namespace Factory\AbstractFactoryMethod\PizzaStores;

use Factory\AbstractFactoryMethod\Factories\NYPizzaIngredientFactory;
use Factory\AbstractFactoryMethod\Pizzas\CheesePizza;
use Factory\AbstractFactoryMethod\Pizzas\ClamPizza;
use Factory\AbstractFactoryMethod\Pizzas\PepperoniPizza;
use Factory\AbstractFactoryMethod\Pizzas\Pizza;
use Factory\AbstractFactoryMethod\Pizzas\VeggiePizza;

class NYStylePizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;
        $ingredientFactory = new NYPizzaIngredientFactory();

        if ($type === 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('New York Style Cheese Pizza');
        } else if ($type === 'pepperoni') {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName('New York Style Pepperoni Pizza');
        } else if ($type === 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('New York Style Clam Pizza');
        } else if ($type === 'veggie') {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName('New York Style Veggie Pizza');
        }

        return $pizza;
    }
}
