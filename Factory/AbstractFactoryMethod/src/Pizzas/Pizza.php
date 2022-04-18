<?php

namespace Factory\AbstractFactoryMethod\Pizzas;

use Factory\AbstractFactoryMethod\Ingredients\Concerns\Cheese;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Clams;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Dough;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Pepperoni;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Sauce;
use Factory\AbstractFactoryMethod\Ingredients\Concerns\Veggies;

abstract class Pizza
{
    protected string $name;
    protected Dough $dough;
    protected Sauce $sauce;

    /** @var Veggies[]  */
    protected array $veggies;

    protected Cheese $cheese;
    protected Pepperoni $pepperoni;
    protected Clams $clam;

    abstract public function prepare(): void;

    public function bake(): void
    {
        echo 'Bake for 25 minutes at 350'.PHP_EOL;
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into diagonal slices'.PHP_EOL;
    }

    public function box(): void
    {
        echo 'Place pizza into official PizzaStore box'.PHP_EOL;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function __toString(): string
    {
        // code to print pizza here
    }


}
