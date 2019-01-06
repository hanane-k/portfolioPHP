<?php
require_once "model/db.php";
require_once "model/projectManager.php";
require_once "model/imageManager.php";


//si l'action qu'on va realiser est AJOUTER un projet:
if ($_GET["action"] === "add") {
    $chemin = "img/" . $_FILES["IDimage"]["name"];
    var_dump($_FILES);
    addImage($_FILES["IDimage"]["name"], $chemin, $db);
    // la variable qui stock le chemin de l'image
    $lastId = getLastIDimg($db);
    addProject($_POST, $lastId["LAST_INSERT_ID()"], $db);
    move_uploaded_file($_FILES["IDimage"]["tmp_name"], $chemin);
    header("location: projectListe.php");
    exit;
}
//si l'action qu'on va realiser est SUPPRIMER un projet:
if ($_GET["action"] === "delete") {
    $id = $_GET["id"];
    deleteProject($id, $db);
    header("location: projectListe.php");
    exit;
}

//si l'action qu'on va realiser est MODIFIER un projet:
if ($_GET["action"] === "update") {
    updateProject($_POST, $db);
    header("location: projectListe.php");
    exit;
}
?>