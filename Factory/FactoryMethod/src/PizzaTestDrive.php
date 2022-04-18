<?php

namespace Factory\FactoryMethod;

use Factory\FactoryMethod\PizzaStores\ChicagoStylePizzaStore;
use Factory\FactoryMethod\PizzaStores\NYStylePizzaStore;

class PizzaTestDrive
{
    public static function main()
    {
        $nyStore = new NYStylePizzaStore();
        $chicagoStore = new ChicagoStylePizzaStore();

        $pizza = $nyStore->orderPizza('cheese');
        echo 'Ethan ordered a '.$pizza->getName().PHP_EOL.PHP_EOL;

        $pizza = $chicagoStore->orderPizza('cheese');
        echo 'Joel ordered a '.$pizza->getName().PHP_EOL;
    }
}
