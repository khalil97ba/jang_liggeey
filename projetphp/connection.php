<?php

  try {
  // se connecter à mysql
  $pdo = new PDO("mysql:host=localhost;dbname=mangasin","root","");
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }
?>