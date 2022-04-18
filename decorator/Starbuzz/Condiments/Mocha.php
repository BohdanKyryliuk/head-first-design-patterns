<?php

namespace Starbuzz\Condiments;

use Starbuzz\Coffee\Beverage;

class Mocha extends CondimentDecorator
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
        return $this->beverage->getDescription() . ', Mocha';
    }

    public function cost(): float
    {
        return .20 + $this->beverage->cost();
    }
}
