<?php

namespace WeatherORama\WeatherStation;

class ForecastDisplay implements Observer, DisplayElement
{
    private Subject $subject;

    /**
     * @param Subject $subject
     */
    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        // TODO: Implement update() method.
    }

    public function display(): void
    {
        // TODO: Implement display() method.
    }
}
