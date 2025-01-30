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
        $pageTitle = 'PHP is amazing!';
        var_dump(isset($pageTitle));
    ?>
    </pre>

    <?php
        if(isset($pageTitle)){
            echo "<h1>{$pageTitle}</h1>";
        }
    ?>

</body>
</html>