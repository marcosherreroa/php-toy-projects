<?php 

require __DIR__.'/inc/functions.inc.php';
require __DIR__.'/inc/db-connect.inc.php';

if (!empty($_POST)){
  $imageName = null;
  if (!empty($_FILES) && !empty($_FILES['image'])){
    if ($_FILES['image']['error'] === 0 && $_FILES['image']['size'] > 0){
      $nameWithoutExtension = pathinfo($_FILES['image']['name'],PATHINFO_FILENAME);
      $name = preg_replace('/[^a-zA-Z0-9]/','',$nameWithoutExtension);
      $imageName = $name. '-'.time(). '.jpg';

      $srcImage = $_FILES['image']['tmp_name'];
      $destImage = __DIR__.'/uploads/'. $imageName;

      $imageSize = getimagesize($srcImage);

      if(!empty($imageSize)){

        [$width,$height] = $imageSize;

        $maxDim = 400;
        $scaleFactor = $maxDim/ max($width, $height);
        $newWidth = $scaleFactor* $width;
        $newHeight = $scaleFactor * $height;

        $im = imagecreatefromjpeg($srcImage);

        if(!empty($im)){
          $newIm = imagecreatetruecolor($newWidth,$newHeight);
          imagecopyresampled($newIm,$im,0,0,0,0,$newWidth,$newHeight,$width,$height);

          imagejpeg($newIm,$destImage);
        }
      }
    } 
  }
  $stmt = $pdo->prepare('INSERT INTO entries (title,message,date,image) VALUES (:title,:message,:date,:image)');
  $stmt->bindValue(':title',$_POST['title']);
  $stmt->bindValue(':message',$_POST['message']);
  $stmt->bindValue(':date',$_POST['date']);
  $stmt->bindValue(':image',$imageName);
  $stmt->execute();

  echo '<a href="index.php">Continue to the diary</a>';
  die();
}

require __DIR__.'/views/header.view.php'; 
?>
<h1 class="main-heading">New Entry</h1>

<form method="POST" action="form.php" enctype="multipart/form-data">
  <div class="form-group">
    <label class="form-group__label" for="title">Title:</label>
    <input class="form-group__input" type="text" id="title" name="title" required/>
  </div>
  <div class="form-group">
    <label class="form-group__label" for="date">Date:</label>
    <input class="form-group__input" type="date" id="date" name="date" required/>
  </div>
  <div class="form-group">
    <label class="form-group__label" for="image">Image:</label>
    <input class="form-group__input" type="file" id="image" name="image"/>
  </div>
  <div class="form-group">
    <label class="form-group__label" for="message">Message:</label>
    <textarea class="form-group__input" id="message" name="message" rows="6" required></textarea>
  </div>
  <div class="form-submit">
    <button class="button">
      <svg class="button__icon" viewBox="0 0 34.7163912799 33.4350009649">
        <g style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 2px;">
          <polygon points="20.6844359446 32.4350009649 33.7163912799 1 1 10.3610302393 15.1899978903 17.5208901631 20.6844359446 32.4350009649"/>
          <line x1="33.7163912799" y1="1" x2="15.1899978903" y2="17.5208901631"/>
        </g>
      </svg>
      Save!
    </button>
  </div>
</form>
<?php require __DIR__.'/views/footer.view.php'; ?>