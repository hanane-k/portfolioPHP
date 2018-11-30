<?php
require_once "model/db.php";
require_once "model/projectManager.php";

//si l'action qu'on va realiser est AJOUTER un projet:
if ($_SESSION["action"] = "add") {
    addProject($_POST, $db);
    // header("location: projectListe.php");
    exit;
}

//si l'action qu'on va realiser est SUPPRIMER un projet:
if ($_SESSION["action"] = "delete") {
    // header("location: projectListe.php");
    exit;
}

//si l'action qu'on va realiser est MODIFIER un projet:
if ($_SESSION["action"] = "edit") {
    // header("location: projectListe.php");
    exit;
}
?>