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
        var_dump('Hello from a var_dump');
        var_dump('ñ');
        var_dump(123);
        var_dump(42.42);

        var_dump('4' + 5);

        $message = 'Hello';
        var_dump($message);
    ?>
    </pre>

</body>
</html>