<?php

function escapeHTML ($value){
  return htmlspecialchars($value,ENT_QUOTES,'UTF-8');
}

function render ($view,$params){
  extract($params);
  $alphabet = gen_alphabet();
  

  ob_start();
  require __DIR__ .'/../views/pages/'. $view;
  $contents = ob_get_clean();
  require __DIR__ .'/../views/layouts/main.view.php';
}

function gen_alphabet (): array {
  $letters = [];
  for ($i = ord('A'); $i <= ord('Z'); ++$i){
    $letters[] = chr($i);
  }
  
  return $letters;
}

gen_alphabet();