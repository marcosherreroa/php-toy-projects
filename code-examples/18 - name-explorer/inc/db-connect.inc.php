<?php


//user: names
//password: lEwArO

try {
  $pdo = new PDO('mysql:host=localhost;dbname=names;charset=utf8mb4','names','lEwArO',[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ]);
}
catch(PDOException $e){
  var_dump($e);
  echo 'A problem occured with the database connection ...';
  die();
}

/*
$stmt = $pdo->prepare('SELECT * FROM names');
$stmt->execute();
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
*/