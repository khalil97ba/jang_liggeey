<?php

if(isset($_POST['Enregistrer'])){

require_once("connection.php");

  // récupérer les valeurs 
  $nom = $_POST['nom'];
  $quantity = $_POST['quantity'];

  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `produit`(`nom`, `quantity`) VALUES (:nom,:quantity)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":nom"=>$nom,":quantity"=>$quantity));

  // vérifier si la requête d'insertion a réussi
  if($exec){
    echo 'Donnees inserer';
  }else{
    echo "Échec de l'opération d'insertion";
  }

}
?>
<?php
  session_start();
  if(!isset($_SESSION["email"])){
    header("Location: login.php");
    exit(); 
  }
   
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="styles.css">
  <title>Ajouter un nouveau produit</title>
</head>

<body>
  <form class="box" action="" method="post">
      <h1 class="box-title">Ajout_produit</h1>
      <input type="text" class="box-input" name="nom" placeholder="Nom" required />
      <input type="number" class="box-input" name="quantity" placeholder="quantity" required />
      <input type="submit" name="Enregistrer" value="Enregistrer" class="box-button" />
      
      <p class="box-register"><a href="login.php">Deconnexion</a></p>
      <p class="box-register"><a href="Afficher-produit.php">Voir le stock</a></p>


    </form>
  
</body>

</html>



