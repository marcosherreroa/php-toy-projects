<?php

/*
$dims = getimagesize(__DIR__ . '/MiniaturaOracion1.jpeg');
$width = $dims[0];
$height = $dims[1];
var_dump($dims);
*/

[$width,$height] = getimagesize(__DIR__ . '/MiniaturaOracion1.jpeg');
//var_dump($width,$height);

$maxDim = 400;
$scaleFactor = $maxDim/ max($width, $height);
$newWidth = $scaleFactor* $width;
$newHeight = $scaleFactor * $height;
//var_dump("New dimensions: {$newWidth}x{$newHeight}");

$im = imagecreatefromjpeg(__DIR__ . '/MiniaturaOracion1.jpeg');

$newIm = imagecreatetruecolor($newWidth,$newHeight);
imagecopyresampled($newIm,$im,0,0,0,0,$newWidth,$newHeight,$width,$height);

//header('Content-Type: image/jpeg');
//imagejpeg($newIm);
imagejpeg($newIm,'img_scaled.jpg');