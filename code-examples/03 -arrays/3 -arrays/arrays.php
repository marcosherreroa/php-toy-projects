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
    echo $categories;
    //var_dump($categories[99]);

    //var_dump(isset($categories[99]));

    var_dump(in_array('Books',$categories));

    var_dump(count($categories));
  ?>
  </pre>
</body>
</html>