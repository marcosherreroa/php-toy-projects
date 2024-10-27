<h2>Most popular names</h2>
<ol>
  <?php foreach ($topEntries AS $topEntry): ?>
    <li>
      <a href="name.php?<?php echo http_build_query(['name' => $topEntry['name']]); ?>" >
        <?php echo escapeHTML($topEntry['name']); ?>
      </a>
    </li>
  <?php endforeach; ?>
</ol>