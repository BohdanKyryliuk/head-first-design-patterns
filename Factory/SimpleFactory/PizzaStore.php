<?php

namespace Factory\SimpleFactory;

class PizzaStore
{
    public function __construct(private SimplePizzaFactory $factory)
    {
    }

    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->factory->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
