<?php

require __DIR__ . '/inc/all.inc.php';

$id = (int) ($_GET['id'] ?? 1);

$repo = new WorldCityRepository($pdo);
$city = $repo->fetchById($id);

if(empty($city)){
  header('Location: index.php');
  die();
}

render('city.view', [
  'city' => $city
]);