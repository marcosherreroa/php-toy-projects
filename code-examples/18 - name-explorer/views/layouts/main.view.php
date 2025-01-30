<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css" />
    <link rel="stylesheet" type="text/css" href="./styles/custom.css" />
    <title>Name explorer</title>
</head>
<body>
    <header>
        <h1>
            <a href="index.php">Name explorer</a>
        </h1>
        <p>Explore and find names</p>
        <nav>
            <?php foreach($alphabet AS $x): ?>
                <a  class="header__link<?php if(!empty($letter) && $letter === $x) echo escapeHTML(" header__link--active"); ?>"
                    href="letter.php?<?php echo http_build_query((['letter' => $x])); ?>" >
                    <?php echo escapeHTML($x); ?>
                </a>
            <?php endforeach; ?>
        </nav>
    </header>
    <main>
      <?php echo $contents; ?>
      </main>
    </body>
</html>