<ul>
  <?php foreach ($names AS $name): ?>
    <li>
      <a href="name.php?<?php echo http_build_query(['name' => $name]); ?>">
        <?php echo escapeHTML($name); ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>

<?php if ($numPages > 1): ?>
  <ul class="pagination">
    <?php if ($page > 1): ?>
      <li class="pagination__li">
        <a class="pagination__link" href="letter.php?<?php echo http_build_query(['letter' => $letter,'page' => $page - 1]);?>">⏴</a>
      </li>
    <?php endif; ?>
    <?php for ($x = 1; $x <= $numPages; ++$x): ?>
      <li class="pagination__li">
        <a class="pagination__link<?php echo ($page == $x) ? " pagination__link--active":""; ?>"
          href="letter.php?<?php echo http_build_query(['letter' => $letter,'page' => $x]); ?>">
          <?php echo $x; ?>
        </a>
      </li>
    <?php endfor; ?>
    <?php if ($page < $numPages): ?>
      <li class="pagination__li">
        <a class="pagination__link" href="letter.php?<?php echo http_build_query(['letter' => $letter,'page' => $page + 1]);?>">⏵</a>
      </li>
    <?php endif; ?>
  </ul>
<?php endif; ?>