<?php

namespace Starbuzz;

use Starbuzz\Coffee\Beverage;
use Starbuzz\Coffee\DarkRoast;
use Starbuzz\Coffee\Espresso;
use Starbuzz\Coffee\HouseBlend;
use Starbuzz\Condiments\Mocha;
use Starbuzz\Condiments\Soy;
use Starbuzz\Condiments\Whip;

class StarbuzzCoffee
{
    public function main()
    {
        $espresso = new Espresso();
        $this->display($espresso);

        $darkRoast = new DarkRoast();
        $darkRoast = new Mocha($darkRoast);
        $darkRoast = new Mocha($darkRoast);
        $darkRoast = new Whip($darkRoast);
        $this->display($darkRoast);

        $houseBlend = new HouseBlend();
        $houseBlend = new Soy($houseBlend);
        $houseBlend = new Mocha($houseBlend);
        $houseBlend = new Whip($houseBlend);
        $this->display($houseBlend);
    }

    private function display(Beverage $beverage): void
    {
        echo sprintf("%s \$%s%s", $beverage->getDescription(), $beverage->cost(), PHP_EOL);
    }
}
