<?php

require __DIR__ . '/src/Admin/User.php';
require __DIR__ . '/src/Client/User.php';

$admin = new Admin\User();
$client = new Client\User();

use Admin\User;
$admin2 = new User();
var_dump($admin2);

use Client\User as Client;
$client2 = new Client();
var_dump($client2);