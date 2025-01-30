<?php
declare(strict_types=1);

class WorldCityModel {
  public int $id;
  public string $city;
  public string $cityAscii;
  public float $lat;
  public float $lng;
  public string $country;
  public string $iso2;
  public string $iso3;
  public string $adminName;
  public string $capital; 
  public int $population;

  public function __construct($id, $city, $cityAscii, $lat, $lng, $country, $iso2, $iso3, $adminName, $capital, $population){
    $this->id = $id;
    $this->city = $city;
    $this->cityAscii = $cityAscii;
    $this->lat = (float) $lat;
    $this->lng = (float) $lng;
    $this->country = $country;
    $this->iso2 = $iso2;
    $this->iso3 = $iso3;
    $this->adminName = $adminName;
    $this->capital = $capital;
    $this->population = $population;
  }

  private function charToFlagChar(string $c): string {
    return mb_chr(127462 + ord($c) - ord('a'));
  }

  public function getCityWithCountry(): string {
    return "{$this->city} ({$this->country}) {$this->getCountryFlag()}";
  }

  public function getCountryFlag(): string {
    $iso2 = strtolower($this->iso2);
    if(strlen($iso2) !== 2) return $iso2;
    return $this->charToFlagChar($iso2[0]) . $this->charToFlagChar($iso2[1]);
  }

  
}