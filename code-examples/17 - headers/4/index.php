<?php

for ($x = 0; $x <= 5000; $x++){
  echo ' ';
}

var_dump(ini_get('output_buffering'));

header('Content-Type: text/plain');

echo file_get_contents('pg1513.txt');