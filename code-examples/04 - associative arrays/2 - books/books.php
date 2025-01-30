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
      $books = [
        'Harry Potter' => 'J.K. Rowling',
        'Don Quixote' => 'Miguel de Cervantes'
      ];

      $books ['Romeo and Julia'] = 'William Shakespeare';
      var_dump($books);

      foreach ($books AS $book => $author){
        var_dump($book);
        var_dump($author);
        echo "\n";
      }

      var_dump(array_keys($books));
      var_dump(array_values($books));
    ?>
  </pre>
</body>
</html>