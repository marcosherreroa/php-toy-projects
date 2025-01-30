<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre><?php

  $categories = ['Programming', 'Business', 'Art & Drawing', 'Self-improvement','History'];

  foreach ($categories AS $category){
    var_dump($category);
  }
  ?>
  </pre>

  <ul>
    <?php foreach ($categories as $category): ?>
      <li>
        <?php echo $category; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>