<?php

namespace WeatherORama\WeatherStation;

class CurrentConditionDisplay implements Observer, DisplayElement
{
    private float $temperature;
    private float $humidity;
    private float $pressure;
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
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->display();
    }

    public function display(): void
    {
        $info = 'Current conditions: %s F degrees and %s%% humidity and %s pressure%s';
        echo sprintf($info, $this->temperature, $this->humidity, $this->pressure, PHP_EOL);
    }
}
