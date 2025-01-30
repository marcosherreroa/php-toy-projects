<?php

$pdo = new PDO('mysql:host=localhost;dbname=note_app','root','',[
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$stmt = $pdo->prepare('SELECT * FROM notes WHERE id = 5 OR id = 6 ORDER BY title ASC');
$stmt->execute();

while (($result = $stmt->fetch(PDO::FETCH_ASSOC)) !== false){
  var_dump($result);
}