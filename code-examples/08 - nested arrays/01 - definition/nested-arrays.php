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
      $courses = [
        [
          'title' => 'German',
          'description' => 'German description',
          'flag' => 'German flag'
        ],
        [
          'title' => 'French',
          'description' => 'French description',
          'flag' => 'French flag'
        ]
        ];

      var_dump($courses);
      var_dump($courses[0]);
      var_dump($courses[1]['flag']);
    ?>
  </pre>
</body>
</html>