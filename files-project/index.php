<?php
require __DIR__ . '/inc/functions.inc.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css" />
    <title>Document</title>
</head>
<body>
    <header><h1>Automatic Image List</h1></header>
    <main><?php 

        $handle = opendir(__DIR__.'/images');
        $images = [];
        $allowedExtensions = [
            'jpg',
            'jpeg',
            'png'
        ];
        
        while($file = readdir($handle)){
            if($file[0] !== '.'){
                $extension = pathinfo($file,PATHINFO_EXTENSION);
                $filename = pathinfo($file,PATHINFO_FILENAME);
                if(in_array($extension,['jpg','jpeg','png'])) $images[$filename]['image'] = $file;
                else if ($extension === 'txt') {
                    $splittedFileContent = explode("\n",file_get_contents(__DIR__.'/images/'.$file),2);
                    $images[$filename]['title'] = $splittedFileContent[0];
                    if(!empty($splittedFileContent[1])) $images[$filename]['text'] = $splittedFileContent[1];
                }
            } 
        }

        closedir($handle);
    ?>

    <?php foreach($images AS $image): ?>
        <?php if (!empty($image['title']) && !empty($image['image'])): ?>
            <figure>
                <h1><?php echo e($image['title']); ?></h1>
                <img src="<?php echo "images/".rawurlencode($image['image']); ?>" alt="" />
                <?php if (!empty($image['text'])): ?>
                    <figcaption><?php echo nl2br(e($image['text'])); ?></figcaption>
                <?php endif; ?>
            </figure>
        <?php endif; ?>
    <?php endforeach; ?>


    </main>
</body>
</html>