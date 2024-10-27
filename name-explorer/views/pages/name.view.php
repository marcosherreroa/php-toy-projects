<h2><?php echo escapeHTML($name); ?></h2>
<?php if (empty($nameEntries)): ?>
  <p>No data found</p>
<?php else: ?>
  <table>
    <thead>
      <tr>
        <th>Year</th>
        <th>Number of babies born</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($nameEntries AS $nameEntry): ?>
        <tr>
          <td><?php echo escapeHTML($nameEntry['year']); ?></td>
          <td><?php echo escapeHTML($nameEntry['count']); ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php endif; ?>