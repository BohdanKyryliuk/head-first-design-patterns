<?php

namespace WeatherORama;

class ConcreteSubject implements Subject
{
    /** @var Observer[] $observers  */
    private array $observers;

    public function registerObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer)
    {
        $index = array_search($observer, $this->observers);
        if (false === $index) {
            throw new \Exception("Couldn't find observer");
        }

        unset($this->observers[$index]);
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            // notify $observer
            $observer->update();
        }
    }
}
