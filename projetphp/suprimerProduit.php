<?php

require_once("connection.php");
$code = $_GET['code'];
$sql = "DELETE FROM produit where (id= $code)";
$stmt = $pdo->query($sql);
header("location:Afficher-produit.php");
?>