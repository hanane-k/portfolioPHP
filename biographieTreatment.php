<?php
require "model/db.php";
require "model/biographieManager.php";

//si l'action qu'on va realiser est AJOUTER une biographie:
if ($_GET["action"] === "delete") {
    $id = $_GET["id"];
    deleteBiographie($id, $db);
    header("location: biographieListe.php");
    exit;
}
//si l'action qu'on va realiser est MODIFIER une biographie:
if ($_GET["action"] === "update") {
    updateBiographie($_POST, $db);
    header("location: biographieListe.php");
    exit;
}
//si l'action qu'on va realiser est SUPPRIMER une biographie:
if ($_GET["action"] === "add") {
    addBiographie($_POST, $db);
    header("location: biographieListe.php");
    exit;
}

?>