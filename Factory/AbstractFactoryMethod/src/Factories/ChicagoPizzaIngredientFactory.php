<?php

namespace Factory\AbstractFactoryMethod\Factories;

use Factory\AbstractFactoryMethod\Ingredients\Concerns\Cheese;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Clams;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Dough;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Pepperoni;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Sauce;
use Factory\AbstractFactoryMethod\Ingredients\Factories\PizzaIngredientFactoryInterface;
use Factory\AbstractFactoryMethod\Ingredients\FrozenClams;
use Factory\AbstractFactoryMethod\Ingredients\MozzarellaCheese;
use Factory\AbstractFactoryMethod\Ingredients\PlumTomatoSauce;
use Factory\AbstractFactoryMethod\Ingredients\SlicedPepperoni;
use Factory\AbstractFactoryMethod\Ingredients\ThickCrustDough;
use Factory\AbstractFactoryMethod\Ingredients\Veggies\BlackOlives;
use Factory\AbstractFactoryMethod\Ingredients\Veggies\EggPlant;
use Factory\AbstractFactoryMethod\Ingredients\Veggies\Spinach;
use JetBrains\PhpStorm\Pure;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactoryInterface
{

    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }

    /** @inheritdoc */
    public function createVeggies(): array
    {
        return [
            new EggPlant(),
            new Spinach(),
            new BlackOlives(),
        ];
    }

    #[Pure] public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clams
    {
        return new FrozenClams();
    }
}
