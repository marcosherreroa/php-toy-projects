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
      $name = @(string) ($_GET['name'] ?? '');
      var_dump($name);
    ?>
  </pre>
</body>
</html>