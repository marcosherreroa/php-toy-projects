<?php

header('Content-Type: text/plain');

$htmlContent = '<img src="logo.png">';
preg_match_all('/<img[^>]*>/',$htmlContent,$imgTags);
foreach ($imgTags[0] AS $imgTag){
    if (!preg_match('/alt=".+"/',$imgTag)){
        $newImgTag = preg_replace('/>$/',' alt="placeholder image">',$imgTag);
        $htmlContent = str_replace($imgTag,$newImgTag,$htmlContent);
    }
}
var_dump($htmlContent);