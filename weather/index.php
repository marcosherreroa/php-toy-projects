<?php

use App\Weather\WeatherFetcher;

require __DIR__ . '/inc/all.inc.php';

$fetcher = new WeatherFetcher();
$info = $fetcher->fetch('Los Angeles');

if(empty($info)){
  echo "Weather could not be fetched.";
  die();
}

require __DIR__ . '/views/index.view.php';