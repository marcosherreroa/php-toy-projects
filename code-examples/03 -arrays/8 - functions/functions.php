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
  
  echo array_search('Business', $categories);
  var_dump(array_slice($categories, 1,3));

  $numbers = [1, 5, 8, 10];
  var_dump(min($numbers));

  $topics = ['Courses', 'Books'];
  $topics2 = ['TV', 'Travel'];

  //$out = array_merge($topics, $topics2);
  //var_dump($out);

  var_dump([...$topics,...$topics2, 'Groceries']);

  $numbers = [10.123,1];
  echo round(...$numbers);

  ?>
  </pre>
</body>
</html>