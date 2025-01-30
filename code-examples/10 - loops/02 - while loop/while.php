<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre><?php
      $sum = 0;
      $number = 1;

      while ($sum < 100){
        echo "Number:{$number}, Sum:{$sum}\n";
        $sum += $number;
        $number += 1;
      }
    ?>
  </pre>
</body>
</html>