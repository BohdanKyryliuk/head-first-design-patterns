<?php

namespace Factory\AbstractFactoryMethod\PizzaStores;

use Factory\AbstractFactoryMethod\Factories\ChicagoPizzaIngredientFactory;
use Factory\AbstractFactoryMethod\Pizzas\CheesePizza;
use Factory\AbstractFactoryMethod\Pizzas\ChicagoStyle\ChicagoStyleCheesePizza;
use Factory\AbstractFactoryMethod\Pizzas\ChicagoStyle\ChicagoStyleClamPizza;
use Factory\AbstractFactoryMethod\Pizzas\ChicagoStyle\ChicagoStylePepperoniPizza;
use Factory\AbstractFactoryMethod\Pizzas\ClamPizza;
use Factory\AbstractFactoryMethod\Pizzas\PepperoniPizza;
use Factory\AbstractFactoryMethod\Pizzas\Pizza;
use Factory\AbstractFactoryMethod\Pizzas\ChicagoStyle\ChicagoStyleVeggiePizza;
use Factory\AbstractFactoryMethod\Pizzas\VeggiePizza;

class ChicagoStylePizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;
        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        if ($type === 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('Chicago Style Cheese Pizza');
        } else if ($type === 'pepperoni') {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName('Chicago Style Pepperoni Pizza');
        } else if ($type === 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('Chicago Style Clam Pizza');
        } else if ($type === 'veggie') {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName('Chicago Style Veggie Pizza');
        }

        return $pizza;
    }
}
