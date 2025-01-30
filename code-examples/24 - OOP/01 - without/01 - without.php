<?php

header('Content-Type: text/plain');

//require __DIR__ . '/01 - without-cloud.php';
$account1 = [
  'nr' => '2343723732',
  'holder' => 'Olivia Mason',
  'balance' => 1250.00
];

$account2 = [
  'nr' => '43723732123',
  'holder' => 'Avery Morgan',
  'balance' => 250.00
];

function print_balance (array $account){
  echo "The balance of account #{$account['nr']} is {$account['balance']}.\n";
}

function transfer (array &$from, array &$to, float|int $amount): bool{
  if($from['balance'] >= $amount){
    $from['balance'] -= $amount;
    $to['balance'] += $amount;
    return true;
  }
  else return false;
}

print_balance($account1);
print_balance($account2);
//print_balance([]);

transfer($account2,$account1, 200);
print_balance($account1);
print_balance($account2);



