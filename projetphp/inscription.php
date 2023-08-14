
<?php
require('connection.php');

if(isset($_POST['prenom'], $_POST['nom'], $_POST['email'], $_POST['password'], $_POST['confirmation_password']))
{
    $prenom = stripslashes($_POST['prenom']);
    $nom = stripslashes($_POST['nom']);
    $email = stripslashes($_POST['email']);
    $password = stripslashes($_POST['password']);
    $confirmation_password = stripslashes($_POST['confirmation_password']);

    if ($password === $confirmation_password) {
        // Vérifiez si le login existe déjà dans la base de données

        $requete = "SELECT * FROM user WHERE email = ?";
        $stmt = $pdo->prepare($requete);
        $stmt->execute([$email]);
        
        // insertion des données du user
        if ($stmt->rowCount() == 0) {
    $sql = "INSERT INTO `user`(`prenom`, `nom`, `email`, `password`) VALUES ('$prenom','$nom','$email', '".hash('sha256', $password)."')";
    $stmt = $pdo->prepare($sql);
    $stmt = $pdo->query($sql);
         echo "Inscription réussie !";
} else {
    echo "Ce login existe déjà.";
}
} else {
echo "Les mots de passe ne correspondent pas.";
}
} else{   
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
<title>page d'acceuil</title>
</head>
<body>
<form class="box" action="" method="post">
    <h1 class="box-title">S'inscrire</h1>
     <input type="text" class="box-input my-1" name="prenom" placeholder="Prenom" required />
    <input type="text" class="box-input" name="nom" placeholder="Nom" required />
    <input type="text" class="box-input" name="email" placeholder="Email" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="password" class="box-input" name="confirmation_password" placeholder="confirmation_password" required />
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</form>
    <?php } ?>
    </body>
    </html>