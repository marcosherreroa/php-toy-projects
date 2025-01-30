<?php

header('Content-Type: text/plain');

class BankAccount {
  public string $nr;
  public string $holder;
  public float $balance;

  function __construct(string $nr, string $holder, float $balance){
    $this->nr = $nr;
    $this->holder = $holder;
    $this->balance = $balance;
  }

  function printBalance (){
    echo "The balance of account #{$this->nr} is {$this->balance}.\n";
  }

  function transfer (BankAccount $to, $amount = 0){
    if ($this->balance >= $amount){
      $this->balance -= $amount;
      $to->balance += $amount;
      return true;
    }
    else return false;
  }
}

$account1 = new BankAccount('2343723732','Olivia Mason', 1250.00);
$account1->holder = 'Olivia Mason';
$account1->printBalance();

$account2 = new BankAccount('111','Lewis',300.00);
$account1->transfer($account2,200);
$account1->printBalance();
$account2->printBalance();

$test = [1,2,3];
foreach ($test AS $t){
  var_dump($test);
  unset($test[0]);
}
