<?php if(!empty($errors)): ?>
  <ul>
    <?php foreach ($errors AS $error): ?>
      <li><?php echo e($error);?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>

<form method="POST" action="index.php?route=admin/login">
  <input type="hidden" name="_csrf" value="<?php echo e($csrf_token); ?>"/>
  <label for="login-username">Username:</label>
  <input type="text" name="username" id="login-username" value="<?php if(!empty($_POST['username'])) echo e($_POST['username']);?>" />

  <label for="login-password">Password:</label>
  <input type="password" name="password" id="login-password" value="" />
  <br/>
  <input type="submit" value="Login!"/>
</form>