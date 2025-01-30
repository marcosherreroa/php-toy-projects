<?php

require __DIR__ . '/inc/all.inc.php';

$topEntries = fetch_top_entries();

render('index.view.php',['topEntries' => $topEntries]);