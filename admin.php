<?php
//On charge les fichiers necessaires
require "model/db.php";
include "template/header2.php";
include_once "template/navAdmin.php";
session_start();
if (!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    header("location: index.php");
    exit;
}
 ?>

<a href="logout.php" class="bouton">Deconnexion</a>

 <?php
 include "template/footer2.php"
  ?>
