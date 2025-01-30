<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
    <pre><?php
        $greeting = "I'm learning PHP!";
        echo "{$greeting}_!";
        echo '<br />';

        $name = 'Jannis';
        $subject = 'PHP';

        echo "I'm {$name} and I want to learn the language {$subject}.";
        //echo 'I"m {$name} and I want to learn the language {$subject}';

        echo "\n";
        echo "\t-";
    ?>
    </pre>

    <p>A first line of text. <?php echo "<br />" ?>A second line of text.</p>
    <p>A first line of text. <?php echo "\n" ?>A second line of text.</p>
</body>
</html>