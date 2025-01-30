<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css" />
    <link rel="stylesheet" type="text/css" href="./styles/custom.css" />
    <title>CMS Project</title>
</head>
<body>
    <header>
        <h1>
            <a href="index.php">CMS Project</a>
        </h1>
        <p>A custom-made CMS system</p>
        <nav>
            <?php foreach($navEntries AS $navEntry): ?>
                <a href="index.php?<?php echo http_build_query(['page' => $navEntry->slug]);?>"
                    <?php if(!empty($page) && $page->id === $navEntry->id) echo 'class="active"';?>
                >
                    <?php echo e($navEntry->title); ?>
                </a>
            <?php endforeach; ?>
        </nav>
    </header>
    <main>
        <?php echo $contents; ?>
    </main>
    <footer>
        <p></p>
    </footer>
</body>
</html>