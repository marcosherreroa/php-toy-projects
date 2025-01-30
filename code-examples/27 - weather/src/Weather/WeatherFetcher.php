<?php

namespace App\Weather;

class WeatherFetcher implements WeatherFetcherInterface {

  public function fetch(string $city): ?WeatherInfo {
    $fp = @fsockopen("ssl://downloads.codingcoursestv.eu", 443, $errno, $errstr, 30);
    if (!$fp) {
        return null;
    } else {
        $out = "GET /056%20-%20php/weather/weather.php?" . http_build_query(['city' => $city]) . " HTTP/1.1\r\n";
        $out .= "Host: downloads.codingcoursestv.eu\r\n";
        $out .= "Connection: Close\r\n\r\n";
        fwrite($fp, $out);
        $responseChunks = [];
        while (!feof($fp)) {
            $responseChunks[] = fgets($fp, 128);
        }
        fclose($fp);

        $response = implode($responseChunks);
        $splittedResponse = explode('{',$response,2);

        if (empty($splittedResponse[1])) return null;

        $weatherData = json_decode('{'. $splittedResponse[1],true);
        if(empty($weatherData['city']) || empty($weatherData['temperature']) || empty($weatherData['weather'])){
          return null;
        }
        return new WeatherInfo($weatherData['city'],$weatherData['temperature'], $weatherData['weather']);
    }
  }
}