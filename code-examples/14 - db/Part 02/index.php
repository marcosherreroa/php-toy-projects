<?php

$zip = new ZipArchive();
$zip->open(__DIR__ . '/Archive.zip');
var_dump($zip->count());

var_dump($zip);

$numFiles = $zip->count();
for ($x = 0; $x < $numFiles; ++$x){
  var_dump($zip->getNameIndex($x));
}

var_dump($zip->getFromName('message.txt'));