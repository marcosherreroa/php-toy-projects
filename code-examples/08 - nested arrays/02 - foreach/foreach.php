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

      function e($value){
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
      }

      $courses = [
        [
          'title' => 'German',
          'description' => 'German description',
          'flag' => 'German flag',
          'topics' => [
            'German culture',
            'German food'
          ]
        ],
        [
          'title' => 'French',
          'description' => 'French description',
          'flag' => 'French flag',
          'topics' => [
            'French nouns',
            'French adjectives',
            'French verbs'
          ]
          ],
          [
            'title' => 'Spanish',
            'description' => 'Spanish description',
            'flag' => 'Spanish flag'
          ],

          implode
        ];


      foreach($courses AS $course){
        foreach($course AS $key => $value){
          if(is_string($value)) echo $key.':'.$value.'<br/>';
        }
        echo '<br/>';
      }
    ?>


    <?php foreach ($courses AS $course): ?>
      <details>
        <summary><?php echo e($course['title']).' - '.e($course['flag']) ?></summary>
        <p><?php echo e($course['description']); ?></p>
        <?php if(!empty($course['topics'])): ?>
        <ul>
          <?php foreach ($course['topics'] AS $topic): ?>
            <li><?php echo e($topic); ?></li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
      </details>
    <?php endforeach; ?>
  </pre>
</body>
</html>