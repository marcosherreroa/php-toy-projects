<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre><?php

  $names = [
    'Emily Johnson',
    'Michael Smith',
    'Sarah Williams',
    'James Brown',
    'Jennifer Davis',
    'William Miller',
  ];

  $num = count($names);
  $choice = rand(0,$num - 1);
  echo "The winner is {$names[$choice]}";
  ?>
  </pre>
</body>
</html>