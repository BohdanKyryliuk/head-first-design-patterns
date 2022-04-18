<?php

namespace Factory\FactoryMethod\Pizzas\NewYorkStyle;

use Factory\FactoryMethod\Pizzas\Pizza;

class NYStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY Style Sauce and Cheese Pizza';
        $this->dough = 'Thin Crust dough';
        $this->sauce = 'Marinara sauce';

        $this->toppings[] = 'Grated Reggiano Cheese';
    }
}
