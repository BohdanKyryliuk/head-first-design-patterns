<?php

namespace Factory\FactoryMethod\Pizzas\ChicagoStyle;

use Factory\FactoryMethod\Pizzas\Pizza;

class ChicagoStyleCheesePizza extends Pizza
{

    public function __construct()
    {
        $this->name = 'Chicago Style Deep Dish Cheese Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum tomato sauce';

        $this->toppings[] = 'Shredded Mozzarella Cheese';
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into square slices'.PHP_EOL;
    }
}
