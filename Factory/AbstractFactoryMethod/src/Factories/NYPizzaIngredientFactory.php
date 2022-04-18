<?php

namespace Factory\AbstractFactoryMethod\Factories;

use Factory\AbstractFactoryMethod\Ingredients\Concerns\Cheese;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Clams;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Dough;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Pepperoni;
use Factory\AbstractFactoryMethod\Ingredients\FreshClams;
use Factory\AbstractFactoryMethod\Ingredients\MarinaraSauce;
use Factory\AbstractFactoryMethod\Ingredients\Factories\PizzaIngredientFactoryInterface;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Sauce;
use Factory\AbstractFactoryMethod\Ingredients\ReggianoCheese;
use Factory\AbstractFactoryMethod\Ingredients\SlicedPepperoni;
use Factory\AbstractFactoryMethod\Ingredients\ThinCrustDough;
use Factory\AbstractFactoryMethod\Ingredients\Veggies\Garlic;
use Factory\AbstractFactoryMethod\Ingredients\Veggies\Mushroom;
use Factory\AbstractFactoryMethod\Ingredients\Veggies\Onion;
use Factory\AbstractFactoryMethod\Ingredients\Veggies\RedPepper;
use JetBrains\PhpStorm\Pure;

class NYPizzaIngredientFactory implements PizzaIngredientFactoryInterface
{

    #[Pure] public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    #[Pure] public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    #[Pure] public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    /** @inheritdoc */
    #[Pure] public function createVeggies(): array
    {
        return [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper(),
        ];
    }

    #[Pure] public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    #[Pure] public function createClam(): Clams
    {
        return new FreshClams();
    }
}
