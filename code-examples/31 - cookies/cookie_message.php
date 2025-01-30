<?php

if(!empty($_GET['cookies_allowed'])){
  if ($_GET['cookies_allowed'] === 'yes') setcookie('cookies_allowed','yes');
  else setcookie('cookies_allowed','no');
  header('Location: cookie_message.php');
  die();
}

if(!empty($_COOKIE['cookies_allowed']) && $_COOKIE['cookies_allowed'] === 'yes'){
  $counter = (int) ($_COOKIE['counter'] ?? 0);
  var_dump($counter);
  setcookie('counter',$counter+1);
}
?>

<?php if(empty($_COOKIE['cookies_allowed'])): ?>
  <p>
    Do you allow cookies?:
    <a href="cookie_message.php?cookies_allowed=yes">
      Yes
    </a>
    <a href="cookie_message.php?cookies_allowed=no">
      No
    </a>
  </p>
<?php endif; ?>