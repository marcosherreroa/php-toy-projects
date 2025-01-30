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
        include 'vars.php';
        if($serverStatus === 'ok'){
            echo "*****\n";
            echo 'Welcome to our website!';
        }

        if ($serverStatus === 'maintenance'){
            echo "****\n";
            echo 'The site is under maintenance';
        }

        echo "\n-----\n";

        if($serverStatus === 'ok') echo "****\n";
        else if ($serverStatus === 'maintenance') echo "****\n";
    ?>
    </pre>

</body>
</html>