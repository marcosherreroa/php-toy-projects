<h1>Edit page:</h1>

<?php if(!empty($errors)): ?>
  <ul>
    <?php foreach ($errors AS $error): ?>
      <li><?php echo e($error);?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>

<form method="POST" action="index.php?<?php echo http_build_query(['route' => 'admin/pages/edit','page'=> $page->slug]);?> ">
  <input type="hidden" name="_csrf" value="<?php echo e($csrf_token); ?>"/>

  <label for="title">Title: </label>
  <input type="text" name="title" value="<?php echo e($page->title);?>" id="title" />

  <label for="slug">Slug: </label>
  <input type="text" name="slug" value="<?php echo e($page->slug);?>" id="slug" readonly />

  <label for="content">Content: </label>
  <textarea name="content" id="content"><?php
    echo e($page->content); 
   ?></textarea>

  <input type="submit" value="Submit!" />
</form>
