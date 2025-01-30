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
        $greeting = 'I\'m a string!';
        echo $greeting . '!!!' . $greeting;
        echo '<br />';

        $name = 'Jannis';
        $subject = 'PHP';

        $text = 'I\'m '.$name.' and I want to learn the language '.$subject;
        echo $text.'!';
    ?>
    </pre>
</body>
</html>