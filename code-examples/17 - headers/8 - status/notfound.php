<?php
  http_response_code(404);
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo pathinfo($_SERVER['PHP_SELF'],PATHINFO_DIRNAME);?>/simple.css" />
  <title>Document</title>
</head>
<body>
  <header><h1>News website</h1></header>
  <main>
    <h1>Page not found!</h1>
  </main>
</body>
</html>