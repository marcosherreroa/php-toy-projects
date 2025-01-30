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
      function e ($value){
        return htmlspecialchars($value,ENT_QUOTES,"UTF-8");
      }

      var_dump($_POST);
    ?>
  </pre>

  <form action="xss.php" method="POST">
    <input type="text" name="firstname" value="<?php if (!empty($_POST["firstname"])) echo e($_POST["firstname"]); ?>"/>
    <input type="submit" value="Submit!" />
  </form>
</body>
</html>