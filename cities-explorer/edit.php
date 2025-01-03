<?php

require __DIR__ . '/inc/all.inc.php';

$id = (int) ($_GET['id'] ?? 1);

$repo = new WorldCityRepository($pdo);

if(!empty($_POST)){
  $city = (string) ($_POST['city'] ?? '');
  $cityAscii = (string) ($_POST['cityAscii'] ?? '');
  $country = (string) ($_POST['country'] ?? '');
  $iso2 = (string) ($_POST['iso2'] ?? '');
  $population = (int) ($_POST['population'] ?? 0);
  
  if(empty($city) ||
     empty($cityAscii) ||
     empty($country) ||
     empty($iso2) ||
     empty($population)){

      header('Location: index.php');
      die();
  }

  $repo->update($id, [
    'city' => $city,
    'cityAscii' => $cityAscii,
    'country' => $country,
    'iso2' => $iso2,
    'population' => $population
  ]);
  
  header('Location: index.php');
  die();
}

$model = $repo->fetchById($id);

if(empty($model)){
  header('Location: index.php');
  die();
}

render('edit.view', [
  'city' => $model
]);