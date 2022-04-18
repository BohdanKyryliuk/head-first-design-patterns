<?php

namespace Factory\AbstractFactoryMethod\Pizzas;

use Factory\AbstractFactoryMethod\Ingredients\Factories\PizzaIngredientFactoryInterface;

class CheesePizza extends Pizza
{

    public function __construct(private PizzaIngredientFactoryInterface $ingredientFactory)
    {
    }

    public function prepare(): void
    {
        echo 'Preparing '.$this->name.PHP_EOL;
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
    }
}
