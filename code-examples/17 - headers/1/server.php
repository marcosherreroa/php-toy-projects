<?php

echo '<pre>';

var_dump($_SERVER);

$ua = $_SERVER['HTTP_USER_AGENT'];
if(strpos($ua,'Firefox') !== false){
  echo 'No Firefox';
}
else echo 'Firefox';

echo '</pre>';

?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="text" name="username" />
  <input type="submit" value="Submit!"/>
</form>