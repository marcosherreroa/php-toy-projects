<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<?php if(!empty($_GET['image'])): ?>

  <?php $imgName = $_GET['image']; ?>
  <?php if(!empty($imageTitles[$imgName])): ?>

    <?php $imgTitle = $imageTitles[$imgName]; ?>
    <h1><?php echo e($imgTitle)?></h1>;
    <img src="images/<?php echo rawurlencode($imgName); ?>" alt="<?php echo e($imgTitle); ?>" />

    <?php if(!empty($imageDescriptions[$imgName])): ?>
      <?php $imgDesc = $imageDescriptions[$imgName]; ?>
      <p><?php echo str_replace("\n", "<br/>",e($imgDesc)); ?></p>
    <?php endif; ?>

  <?php else: ?>
    <div class="notice">Image '<?php echo e($imgName);?>' not found.</div>
  <?php endif; ?>

<?php else: ?>
  <div class="notice">Query parameter 'image' is required.</div>
<?php endif; ?>

  
<a href="gallery.php">Back to gallery</a>

<?php include './views/footer.php'; ?>
