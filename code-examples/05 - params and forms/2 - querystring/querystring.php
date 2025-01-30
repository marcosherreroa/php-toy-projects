<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
    <?php
      var_dump($_GET);
    ?>
  </pre>

  <?php if (!empty($_GET['book'])): ?>
    <h1><?php echo $_GET['book']; ?></h1>
  <?php endif ?>

  <?php /*
  <a href="querystring.php?book=Harry Potter">Harry Potter</a>
  <br/>
  <a href="querystring.php?book=Beauty & The Beast">Beauty & The Beast</a>*/?>

  <a href="querystring.php?<?php echo http_build_query(['book' => 'Harry Potter']); ?>">Harry Potter</a>
  <br/>
  <a href="querystring.php?<?php echo http_build_query(['book' => 'Beauty & The Beast', 'author' => 'Villeneuve']); ?>">Beauty & The Beast</a>
</body>
</html>