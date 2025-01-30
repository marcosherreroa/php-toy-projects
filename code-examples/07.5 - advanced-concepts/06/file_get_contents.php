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
      $text = file_get_contents(__DIR__ . '/inc/functions.inc.php');
      var_dump($text);

      readfile(__DIR__ . '/inc/functions.inc.php');
    ?>
  </pre>
</body>
</html>