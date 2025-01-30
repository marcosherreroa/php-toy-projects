<?php


$contents = file_get_contents(__DIR__ . '/../data/index.json');
$data = json_decode($contents,true);
var_dump($data);


//echo filesize(__DIR__ . '/../data/singapore.json.bz2');

//phpinfo()

//$data = json_decode(file_get_contents('compress.bzip2://'.__DIR__ . '/../data/singapore.json.bz2'),true);
//var_dump($data);

