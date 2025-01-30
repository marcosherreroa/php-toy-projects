<?php

header('Content-Type: text/plain');

$message = 'Happy 31th birthday 20PO!';

var_dump(preg_match('/30/',$message, $finding));
var_dump($finding);
echo '
';

var_dump(preg_match('/\d/',$message, $finding));
var_dump($finding);
echo '
';

var_dump(preg_match_all('/\d/',$message, $finding));
var_dump($finding);
echo '
';

var_dump(preg_match_all('/\D/',$message, $finding));
var_dump($finding);
echo '
';

var_dump(preg_match_all('/\w/',$message, $finding));
var_dump($finding);
echo '
';

var_dump(preg_match_all('/\d\d\w\w/',$message, $finding));
var_dump($finding);
echo '
';

var_dump(preg_match_all('/\d\dth/',$message, $finding));
var_dump($finding);
echo '
';