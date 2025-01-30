<?php
function escapeHTML ($value) {
  return htmlspecialchars($value,ENT_QUOTES,'UTF-8');
}

var_dump($_SERVER);

$id = (int) ($_GET['id'] ?? 1);

if ($id >= 5){
  require __DIR__ . '/notfound.php';
  die();
}
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="simple.css" />
  <title>Document</title>
</head>
<body>
  <header><h1>News website</h1></header>
  <main>
    <p>You were accessing the article with the ID: <?php echo escapeHTML($id); ?></p>
  </main>
</body>
</html>