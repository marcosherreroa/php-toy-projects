<?php

require __DIR__ . '/inc/all.inc.php';

$citiesPerPage = 20;
$repo = new WorldCityRepository($pdo);

$currPage = (int) ($_GET['page'] ?? 1);
if ($currPage <= 0) $currPage = 1;

$numCities = $repo->count();
$entries = $repo->paginate($currPage,$citiesPerPage);
$numPages = ceil($numCities / $citiesPerPage);

render('index.view', [
  'entries' => $entries,
  'numPages' => $numPages,
  'currPage' => $currPage
]);