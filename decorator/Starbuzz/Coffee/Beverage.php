<?php

namespace Starbuzz\Coffee;

abstract class Beverage
{
    protected string $description;

    public function getDescription(): string
    {
        return $this->description;
    }

    abstract public function cost(): float;
}