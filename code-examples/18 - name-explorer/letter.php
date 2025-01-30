<?php

require __DIR__ . '/inc/all.inc.php';

$letter = (string) ($_GET['letter'] ?? '');
if(strlen($letter) > 1) $letter = $letter[0];
$letter = strtoupper($letter);
$alphabet = gen_alphabet();

if (strlen($letter) === 0 || !in_array($letter,$alphabet)){
  header('Location: index.php');
  die();
}

$perPage = 15;
$numNames = fetch_count_names_by_initial($letter);
$numPages = ceil($numNames/$perPage);

$page = (int) ($_GET['page'] ?? 1);
if($page <= 0) $page = 1;

$names = fetch_names_by_initial($letter,$page,$perPage);
render('letter.view.php',[
  'letter' => $letter,
  'names' => $names,
  'page' => $page,
  'numPages' => $numPages
]);