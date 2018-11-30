<?php
require "model/db.php";
$reponses = $db->query('SELECT * FROM user');
$reponse = $reponses->fetchall();

if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = htmlspecialchars($value);
    }
    foreach ($reponse as $key => $user) {

        if ($_POST["nom"] === $user["nom"] && $_POST["password"] === $user["password"]) {
            session_start();
            $_SESSION["user"] = $user;    
            header("location: admin.php?message=Bonjour hanane");
            exit;
        }
        else {
            header("location: index.php?message=cette page est reserver que pour l'administrateur!!");
            exit;

        }
    }
}
var_dump($value);
?>  
