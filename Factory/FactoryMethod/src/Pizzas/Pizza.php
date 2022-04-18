<?php

namespace Factory\FactoryMethod\Pizzas;

abstract class Pizza
{
    protected string $name;
    protected string $dough;
    protected string $sauce;
    protected array $toppings;

    public function prepare(): void
    {
        echo 'Preparing '.$this->name.PHP_EOL;
        echo 'Tossing dough...'.PHP_EOL;
        echo 'Adding sauce...'.PHP_EOL;
        echo 'Adding toppings...'.PHP_EOL;
        for ($i = 0; $i < count($this->toppings); $i++ ) {
            echo '  '.$this->toppings[$i];
        }
    }

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

    public function getName(): string
    {
        return $this->name;
    }
}
