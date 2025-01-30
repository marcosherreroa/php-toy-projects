<?php

namespace App\Weather;

class WeatherInfo {

  public function __construct(
    public string $city,
    public int $temperatureK,
    public string $weatherType
  ){}

  public function getCelsius (): int {
    return $this->temperatureK - 273;
  }

  public function getFahrenheit (): int {
    return 32 + round(($this->temperatureK - 273)*9/5);
  }
}