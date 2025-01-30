<?php

$pdo = new PDO('mysql:host=localhost;dbname=note_app','root','',[
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$id = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM notes WHERE id = :id');
$stmt->bindValue('id',$_GET['id']);
$stmt->execute();
$note = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($note);