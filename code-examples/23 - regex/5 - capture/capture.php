<?php

header('Content-Type: text/plain');

$message = 'The hotel costs $ 250.00, and the flight is € 150.00. And this number is just annoying: 123.00';

var_dump(preg_match_all('/[$€] (\d+\.\d*)/u',$message, $finding));
var_dump($finding);
echo '
';