<?php

require __DIR__ . '/inc/all.inc.php';

$name = (string) ($_GET['name'] ?? '');
if (empty($name)){
  header('Location: index.php');
  die();
}

$nameEntries = fetch_entries_by_name($name);
render('name.view.php',['letter' => $name[0], 'name' => $name, 'nameEntries' => $nameEntries]);
