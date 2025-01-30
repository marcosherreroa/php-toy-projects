<?php

namespace App\Weather;

class RandomWeatherFetcher implements WeatherFetcherInterface {
  public array $weatherTypes = [
    'sunny',
    'cloudy',
    'snowy',
    'stormy'
  ];

  public function fetch(string $city): WeatherInfo {
    return new WeatherInfo($city,rand(183,333),$this->weatherTypes[rand(0,3)]);
  }
}