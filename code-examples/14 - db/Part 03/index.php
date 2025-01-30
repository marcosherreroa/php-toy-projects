<?php

$pdo = new PDO('mysql:host=localhost;dbname=note_app','root','',[
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$stmt = $pdo->prepare('SELECT * FROM notes');
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($results);

?>

<ul>
  <?php foreach ($results AS $result): ?>
    <li><?php echo $result['title']; ?></li>
  <?php endforeach; ?>
</ul>