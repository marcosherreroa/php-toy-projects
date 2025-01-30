<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre><?php
    $categories = ['Programming', 'Business', 'Art & Drawing', 'Self-improvement','History', 5, 5+9];
    $categories[1] = "ABC";
    unset($categories[3]);
    $categories[] = 'Nature';
    var_dump($categories);
  ?>
  </pre>
</body>
</html>