<?php
//connect to the db with our id
//If it works we create a variable db which stocks the connexion
try {
  $db = new PDO("mysql:host=localhost;dbname=portfolio", "phpmyadmin", "hanane");
}
catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}
 ?>
