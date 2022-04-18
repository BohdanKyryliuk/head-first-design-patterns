<?php

namespace Factory\AbstractFactoryMethod;

use Factory\AbstractFactoryMethod\PizzaStores\ChicagoStylePizzaStore;
use Factory\AbstractFactoryMethod\PizzaStores\NYStylePizzaStore;

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
