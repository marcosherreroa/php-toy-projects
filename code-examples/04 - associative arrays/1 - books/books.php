<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre><?php
    $books = [
      'Harry Potter' => 'J.K. Rowling',
      'Don Quixote' => 'Miguel de Cervantes'
    ];

    var_dump($books);
    echo "\n";
    var_dump($books['Harry Potter']);

  ?>
  </pre>
</body>
</html>