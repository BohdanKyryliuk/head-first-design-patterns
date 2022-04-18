<?php

namespace WeatherORama\FirstLook;

class WhetherData
{
    private int $temperature;
    private int $humidity;
    private int $pressure;

    private $currentConditionDisplay;
    private $statisticsDisplay;
    private $forecastDisplay;

    /**
     * @param $currentConditionDisplay
     * @param $statisticsDisplay
     * @param $forecastDisplay
     */
    public function __construct($currentConditionDisplay, $statisticsDisplay, $forecastDisplay)
    {
        $this->currentConditionDisplay = $currentConditionDisplay;
        $this->statisticsDisplay = $statisticsDisplay;
        $this->forecastDisplay = $forecastDisplay;
    }

    public function getTemperature(): int
    {
        return $this->temperature;
    }

    public function getHumidity(): int
    {
        return $this->humidity;
    }

    public function getPressure(): int
    {
        return $this->pressure;
    }

    public function measurementsChanged(): void
    {
        $temperature = $this->getTemperature();
        $humidity = $this->getHumidity();
        $pressure = $this->getPressure();

        $this->currentConditionDisplay->update($temperature, $humidity, $pressure);
        $this->statisticsDisplay->update($temperature, $humidity, $pressure);
        $this->forecastDisplay->update($temperature, $humidity, $pressure);
    }
}