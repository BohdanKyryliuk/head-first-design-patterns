<?php

namespace Factory\AbstractFactoryMethod\Ingredients\Factories;

use Factory\AbstractFactoryMethod\Ingredients\Concerns\Cheese;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Clams;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Dough;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Pepperoni;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Sauce;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Veggies;

interface PizzaIngredientFactoryInterface
{
    public function createDough(): Dough;

    public function createSauce(): Sauce;

    public function createCheese(): Cheese;

    /** @return Veggies[] */
    public function createVeggies(): array;

    public function createPepperoni(): Pepperoni;

    public function createClam(): Clams;
}
