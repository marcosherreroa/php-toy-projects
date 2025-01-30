<?php

header('Content-Type: text/plain');

$message = 'Happy 31th birthday 20P0!';

var_dump(preg_match_all('/[0-9]{2} ?[a-z]*/',$message, $finding));
var_dump($finding);
echo '
';

var_dump(preg_match_all('/[Bb][a-zA-z]*/','baby', $finding));
var_dump($finding);
echo '
';

var_dump(preg_match_all('/[^ a-zA-Z]/',$message, $finding));
var_dump($finding);
echo '
';