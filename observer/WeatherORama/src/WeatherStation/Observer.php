<?php

namespace WeatherORama\WeatherStation;

interface Observer
{
    public function update(float $temperature, float $humidity, float $pressure): void;
}
