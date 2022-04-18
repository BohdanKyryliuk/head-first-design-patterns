<?php

namespace WeatherORama\WeatherStation;

class WeatherStation
{
    public function main()
    {
        $weatherData = new WhetherData();
        $currentConditionDisplay = new CurrentConditionDisplay($weatherData);
//        $statisticDisplay = new StatisticDisplay($weatherData);
//        $forecastDisplay = new ForecastDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30.4);
        $weatherData->setMeasurements(82, 70, 29.2);
        $weatherData->setMeasurements(78, 90, 29.2);
    }

}
