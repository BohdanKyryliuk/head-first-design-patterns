<?php

namespace Factory\AbstractFactoryMethod\Pizzas;

use Factory\AbstractFactoryMethod\Ingredients\Factories\PizzaIngredientFactoryInterface;

class VeggiePizza extends Pizza
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
        $this->veggies = $this->ingredientFactory->createVeggies();
    }
}
