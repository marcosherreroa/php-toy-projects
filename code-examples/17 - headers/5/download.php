<?php

header('Content-Type: image/jpeg');
header('Content-Disposition: attachment; filename=image.jpeg');
header('Content-Length: '.filesize(__DIR__.'/images/im.png'));

readfile(__DIR__.'/images/im.png');