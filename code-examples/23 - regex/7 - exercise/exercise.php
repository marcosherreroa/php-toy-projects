<?php

header('Content-Type: text/plain');

$htmlContent = '<div class="main-section">
<p>Explore the wonders of our <i>unique</i> platform. Below are key links for navigation:</p>
<a href="http://example.com/services">Our Services</a>
<a href="http://example.com/contact" title="Get in touch">Get in Touch</a>
<img src="welcome.png">
<img src="our-mission.jpg" alt="Our Mission">
</div>';

preg_match_all('/<\s*a\s+[^>]*href="([^\s"]*)"/',$htmlContent,$findings);
$links = $findings[1];
var_dump($links);

preg_match_all('/<\s*i\s*>([^<>]*)<\s*\/i\s*>/', $htmlContent, $findings);
var_dump($findings);
$emphasizedHtmlContent = preg_replace('/<\s*i\s*>(([^<>]*(<\w+>.*<\/\w+>)*)*)<\s*\/i\s*>/','<em>$1</em>',$htmlContent);
var_dump($emphasizedHtmlContent);

$htmlContent2 = '<img src="logo.png" class="responsive">';

preg_match_all('/<\s*img\s+src="([^\s"]+)"( class="[^\s"]+")?\s*>/',$htmlContent2,$findings);
var_dump($findings);
$accessibleHtmlContent = preg_replace('/<\s*img\s+src="([^\s"]+)"( class="[^\s"]+")?\s*>/','<img src="$1"$2 alt="placeholder image">',$htmlContent2);
var_dump($accessibleHtmlContent);