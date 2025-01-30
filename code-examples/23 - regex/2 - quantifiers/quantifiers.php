<?php

header('Content-Type: text/plain');

$message = 'Happy 31th birthday 20PO!';


//var_dump(preg_match_all('/\d*/',$message, $finding));
//var_dump($finding);
//echo '
//';

var_dump(preg_match_all('/\d+/',$message, $finding));
var_dump($finding);
echo '
';

var_dump(preg_match_all('/\d+ ?th/',$message, $finding));
var_dump($finding);
echo '
';

var_dump(preg_match_all('/\w{5}/',$message, $finding));
var_dump($finding);
echo '
';

var_dump(preg_match_all('/\w{5,}/',$message, $finding));
var_dump($finding);
echo '
';