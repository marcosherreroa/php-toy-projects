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
      for ($x = 0;  $x <= 10; ++$x){
        var_dump($x);
      }

      /* infinite loop:
      for ($x = 0;  $x > -10; ++$x){
        var_dump($x);
      } */
    ?>
  </pre>

  <ul>
    <?php for ($number = 0; $number <= 100; ++$number): ?>
      <?php if($number === 10) continue; ?>
      <?php if($number === 50) break; ?>
      <li><?php echo $number; ?></li>
    <?php endfor; ?>
  </ul>
</body>
</html>