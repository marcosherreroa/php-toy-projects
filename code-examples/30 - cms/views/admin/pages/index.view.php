<h1>Admin: Manage pages</h1>
<table style="min-width: 100%;">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($entries AS $entry): ?>
      <tr>
        <td><?php echo e($entry->id); ?></td>
        <td><?php echo e($entry->title); ?></td>
        <td>
          <a href="index.php?<?php echo http_build_query(['route' => 'admin/pages/edit', 'page' => $entry->slug]);?>">Edit</a>
          <form style="display: inline;"method="POST" action="index.php?<?php echo http_build_query(['route' => 'admin/pages/delete']); ?>">
            <input type="hidden" name="_csrf" value="<?php echo e($csrf_token); ?>"/>
            <input type="hidden" name="id" value="<?php echo e($entry->id); ?>" />
            <input type="submit" value="Delete" class="btn-link"/>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="index.php?route=admin/pages/create">Create page</a>