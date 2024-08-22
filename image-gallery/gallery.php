<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<div class="gallery">
  <?php foreach ($imageTitles AS $name => $title): ?>
    <a class="frame" href="image.php?<?php echo http_build_query(['image' => $name]); ?>">
      <label class="img-title"><?php echo e($title);?></label>
      <img src="images/<?php echo rawurlencode($name); ?>" alt="<?php echo e($title);?>" class="image"/>
    </a>
  <?php endforeach; ?>

<?php include './views/footer.php'; ?>
