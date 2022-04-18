<?php

namespace Starbuzz\Condiments;

use Starbuzz\Coffee\Beverage;

class Whip extends CondimentDecorator
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
        return $this->beverage->getDescription() . ', Whip';
    }

    public function cost(): float
    {
        return .10 + $this->beverage->cost();
    }
}
