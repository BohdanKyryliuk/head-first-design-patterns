<?php

namespace Starbuzz\Condiments;

use Starbuzz\Coffee\Beverage;

class Soy extends CondimentDecorator
{
    private Beverage $beverage;

    /**
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Soy';
    }

    public function cost(): float
    {
        return  .15 + $this->beverage->cost();
    }
}
