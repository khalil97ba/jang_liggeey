<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
require('connection.php');
session_start();

if (isset($_POST['email'])){
  $email = stripslashes($_POST['email']);
  $password = stripslashes($_POST['password']);
    $sql = "SELECT * FROM `user` WHERE email='$email' and password='".hash('sha256', $password)."'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email, $password]);

    if ($stmt->rowCount() == 1) {
      $_SESSION['email'] = $email;
      header("Location: session.php");
  } else {
      echo "Login ou mot de passe incorrect.";
  }
}

?>
<form class="box" action="" method="post" name="login">
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="email" placeholder="email">
<input type="password" class="box-input" name="password" placeholder="password">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="inscription.php">S'inscrire</a></p>
</form>
</body>
</html>