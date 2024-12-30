<h1>List of cities:</h1>

<ul>
  <?php foreach ($entries AS $city): ?>
    <li>
      <a href="city.php?<?php echo http_build_query(['id' => $city->id]);?>">
        <?php echo e($city->getCityWithCountry()); ?>
      </a>
      <a href="edit.php?<?php echo http_build_query(['id' => $city->id]);?>">
        Edit
      </a>
    </li>
  <?php endforeach; ?>
</ul>

<?php if ($numPages > 1) : ?>
  <ul class="pagination">
    <?php if ($currPage > 1): ?>
      <li class="pagination__li">
        <a class="pagination__link" href="index.php?<?php echo http_build_query(['page' => $currPage - 1]);?>">⏴</a>
      </li>
    <?php endif; ?>
    <?php if ($currPage > 1): ?>
      <li class="pagination__li">
          <a class="pagination__link<?php echo ($currPage == 1) ? " pagination__link--active":""; ?>" 
          href="index.php?<?php echo http_build_query(['page' => 1]);?>">
          1
        </a>
      </li>
      <?php if ($currPage > 2): ?>
        <li class="pagination__li">
          <div class="pagination__fill">
            ...
          </div>
        </li>
      <?php endif; ?>
    <?php endif; ?>
    <li class="pagination__li">
          <a class="pagination__link pagination__link--active" 
          href="index.php?<?php echo http_build_query(['page' => $currPage]);?>">
          <?php echo e($currPage); ?>
        </a>
    </li>
    <?php if ($currPage < $numPages): ?>
      <?php if ($currPage < $numPages - 1): ?>
        <li class="pagination__li">
          <div class="pagination__fill">
              ...
          </div>
        </li>
      <?php endif; ?>
      <li class="pagination__li">
          <a class="pagination__link<?php echo ($currPage == $numPages) ? " pagination__link--active":""; ?>" 
          href="index.php?<?php echo http_build_query(['page' => $numPages]);?>">
          <?php echo e($numPages); ?>
        </a>
      </li>
      <li class="pagination__li">
        <a class="pagination__link" href="index.php?<?php echo http_build_query(['page' => $currPage + 1]);?>">⏵</a>
      </li>
    <?php endif; ?>
  </ul>
<?php endif; ?>