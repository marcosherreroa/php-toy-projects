<?php

$termsError = false;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  if (!empty($_POST['terms'])){
    //Code to save the user into the DB

    header('Location: thankyou.php');
    die();
  }
  else {
    $termsError = true;
  }
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
    <header><h1>Sign up for the newsletter</h1></header>
    <form method="POST" action="form.php">
        <label for="input_name">Your name:</label>
        <input type="text" name="name" id="input_name" value="<?php if (!empty($_POST['name'])) echo $_POST['name']; ?>"/>

        <label for="input_email">Your email:</label>
        <input type="text" name="email" id="input_email" value="<?php if (!empty($_POST['name'])) echo $_POST['email']; ?>"/>
        <br />

        <?php if(!empty($termsError)): ?>
          <p style="color: darkred;">You need to accept the terms</p>
        <?php endif; ?>

        <input type="checkbox" name="terms" value="1" id="input_terms">
        <label for="input_terms">I have read the terms and want to receive emails</label>
        
        <br />
        <input type="submit" value="Submit!" />
    </form>
</body>
</html>