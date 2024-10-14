<?php

require __DIR__.'/inc/functions.inc.php';
require __DIR__.'/inc/db-connect.inc.php';

$perPage = 3;
$page = $_GET['page'] ?? 1;
if (!is_numeric($page) || $page <= 0) {
  echo "Parameter 'page' must be a positive number";
  die();
}

$offset = $perPage*($page-1);

$stmtCount = $pdo->prepare('SELECT COUNT(*) as count FROM entries');
$stmtCount->execute();
$numEntries = $stmtCount->fetch(PDO::FETCH_ASSOC)['count'];

$numPages = ceil($numEntries / $perPage);

$stmt = $pdo->prepare('SELECT * FROM entries ORDER BY date DESC, id DESC LIMIT :perPage OFFSET :offset');
$stmt->bindValue(':perPage',$perPage, PDO::PARAM_INT);
$stmt->bindValue(':offset',$offset, PDO::PARAM_INT);
$stmt->execute();
$entries = $stmt->fetchAll(PDO::FETCH_ASSOC);

require __DIR__.'/views/header.view.php'
?>
<h1 class="main-heading">Entries</h1>
<?php foreach ($entries AS $entry): ?>
  <div class="card">
  <?php if (!empty($entry['image'])): ?>
    <div class="card__image-container">
      <img class="card__image" src="uploads/<?php echo e($entry['image']); ?>" alt=""/>
    </div>
    <?php endif; ?>
    <div class="card__desc-container">
      <div class="card__desc-time"><?php echo e(date('d-m-Y', strtotime($entry['date']))); ?></div>
      <h2 class="card__heading"><?php echo e($entry['title']); ?></h2>
      <p class="card__paragraph" ><?php echo nl2br(e($entry['message'])); ?></p>
    </div>
  </div>
<?php endforeach; ?>

<?php if ($numPages > 1): ?>
  <ul class="pagination">
    <?php if ($page > 1): ?>
      <li class="pagination__li">
        <a class="pagination__link" href="index.php?<?php echo http_build_query(['page' => $page - 1]);?>">⏴</a>
      </li>
    <?php endif; ?>
    <?php for ($x = 1; $x <= $numPages; ++$x): ?>
      <li class="pagination__li">
        <a class="pagination__link<?php echo ($page == $x) ? " pagination__link--active":""; ?>"
          href="index.php?<?php echo http_build_query(['page' => $x]); ?>">
          <?php echo $x; ?>
        </a>
      </li>
    <?php endfor; ?>
    <?php if ($page < $numPages): ?>
      <li class="pagination__li">
        <a class="pagination__link" href="index.php?<?php echo http_build_query(['page' => $page + 1]);?>">⏵</a>
      </li>
    <?php endif; ?>
  </ul>
<?php endif; ?>
<?php require __DIR__.'/views/footer.view.php'; ?>