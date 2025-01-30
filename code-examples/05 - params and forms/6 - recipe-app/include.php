<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
<?php
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$pages = [
    'beef' => 'Beef Stir-Fry',
    'chicken' => 'Grilled Lemon Garlic Chicken',
    'salmon' => 'Baked Salmon with Lemon and Dill',
    'spaghetti_bolognese' => 'Spaghetti Bolognese'
];

?>

<form action="include.php" method="GET">
    <select name="page">
        <option value="" label="Please select a recipe"/>
        <?php foreach ($pages AS $page => $pageTitle): ?>
            <option 
                value="<?php echo e($page);?>" 
                label="<?php echo e($pageTitle) ?>" 
                <?php if(!empty ($_GET['page']) && $_GET['page'] === $page) echo " selected "; ?>
            />
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Submit!"/>
</form>

<?php
    

    if (!empty($_GET['page'])){
        $page = $_GET['page'];
        if (array_key_exists($page,$pages)) echo file_get_contents("pages/{$page}.html");
    } 

?>


</body>
</html>
