<?php

header('Content-Type: text/plain');

$message = 'Happy 31th birthday 20PO!';

var_dump(preg_match('/^H/',$message, $finding));
var_dump($finding);
echo '
';

var_dump(preg_match('/^\d/',$message, $finding));
var_dump($finding);
echo '
';

var_dump(preg_match('/^\d*/',$message, $finding));
var_dump($finding);
echo '
';

var_dump(preg_match('/^H\V*!$/',$message, $finding));
var_dump($finding);
echo '
';

var_dump(preg_match('/^\d*\.\d*$/','123.45', $finding));
var_dump($finding);
echo '
';

var_dump(preg_match('/^.+@.+\..+$/','abc@hotmail.es', $finding));
var_dump($finding);
echo '
';