<?php

header('Content-Type: text/plain');

$message = 'The hotel costs $ 250.00, and the flight is € 150.00. And this number is just annoying: 123.00';

var_dump(preg_replace('/([$€]) (\d+\.\d*)/u','---',$message));
echo '
';

var_dump(preg_replace('/([$€]) (\d+\.\d*)/u','--- $0 ---',$message));
echo '
';

var_dump(preg_replace('/([$€]) (\d+\.\d*)/u','$1 ---',$message));
echo '
';