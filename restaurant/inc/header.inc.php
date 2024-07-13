<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <title>Little Bistro<?php if(!empty($title)) echo " &bull; {$title}";?></title>
</head>
<body>
  <header class="header-with-background" style="background-image: url('images/<?php if(empty($headerImage)) echo "default-img.jpg"; else echo $headerImage ?>'); ">
    <h1>Little Bistro</h1>
    <p>A cozy culinary delight</p>
    <nav>
      <a <?php if($pageKey === "mission"):?> class="active" <?php endif;?>href="our-mission.php">Our mission</a>
      <a <?php if($pageKey === "ingredients"):?> class="active" <?php endif;?>href="ingredients.php">Ingredients</a>
      <a <?php if($pageKey === "menu"):?> class="active" <?php endif;?>href="menu.php">Menu</a>
    </nav>
  </header>

  <main>