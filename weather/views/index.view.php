<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/normalize.css" />
    <link rel="stylesheet" type="text/css" href="./styles/styles.css" />
    <title>Document</title>
</head>
<body>
    <div class="app-container" style="background-image: url('images/<?php echo e($info->weatherType); ?>/bg.svg')">
        <div class="top-bar">
            <div class="top-bar__location">
                <svg class="icon" viewBox="0 0 52.7624 72.774">
                    <path d="m45.0353,7.7268h0c-10.3024-10.3024-27.0058-10.3024-37.3081,0h0C-1.2832,16.7371-2.5652,30.9001,4.6807,41.3819l21.7006,31.392,21.7006-31.392c7.2459-10.4818,5.9638-24.6448-3.0465-33.6551Zm-18.6541,32.3037c-7.5383,0-13.6492-6.111-13.6492-13.6492s6.111-13.6493,13.6492-13.6493,13.6492,6.111,13.6492,13.6493-6.111,13.6492-13.6492,13.6492Z" style="fill: currentColor;"/>
                </svg>
                <?php echo e($info->city); ?>
            </div>
            <div class="top-bar__date">
                <?php echo e(date('l')); ?>, <?php echo e(date('jS')); ?>
            </div>
        </div>
        <div class="weather-info">
            <img class="weather-info__image" 
                src="images/<?php echo e($info->weatherType); ?>/large.svg" 
                alt="<?php echo e(ucfirst($info->weatherType)); ?>"/>
            <?php /*<h1 class="weather-info__temperature"><?php echo e($info->temperatureK) ; ?>K</h1>*/?>
            <h1 class="weather-info__temperature">
                <?php echo e($info->getFahrenheit()) ; ?>ºF / <?php echo e($info->getCelsius()); ?>ºC
            </h1>
            <p class="weather-info__desc">
                <img class="icon"
                    src="images/icons/<?php echo e($info->weatherType); ?>.svg"
                    alt="<?php echo e(ucfirst($info->weatherType)); ?>"/>
                <?php echo e(ucfirst($info->weatherType)); ?>
            </p>
        </div>
    </div>
</body>
</html>