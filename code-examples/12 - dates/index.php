<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body><pre><?php
var_dump(time());
var_dump(microtime(true));

date_default_timezone_set('Europe/Madrid');
var_dump(date('Y/m/d H:i:s'));

date_default_timezone_set('America/New_York');
var_dump(date('Y/m/d H:i:s'));
var_dump(date('Y-m-d H:i:s', 170000000));

$year = 2023;
$month = 11;
$day = 15;
$hours = 13;
$minutes = 0;

$unix_timestamp = mktime($hours,$minutes,0,$month,$day,$year);
var_dump($unix_timestamp);
var_dump(date('j M Y H:i:s,',$unix_timestamp));

$str = '2000-02-01 12:00:00';
$timestamp = strtotime($str);
var_dump($timestamp);
var_dump(date('j M Y H:i:s',$timestamp));



?></pre>
</body>
</html>