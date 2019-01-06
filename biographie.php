<?php
session_start();
if (!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    header("location: index.php");
    exit;
}
include "template/header2.php";
include_once "template/navAdmin.php";

?>
<a href="admin.php">Retour à la page Admin</a><br>

<form action="biographieTreatment.php?action=add" method="post">
  <div class="form-group col-sm-12 col-md-7 col-lg-6">
    <label for="titre">Titre : </label>
    <input type="text" class="form-control" id="titre" name="nom">
  </div>
  <div class="form-group col-sm-12 col-md-7 col-lg-6">
    <label for="description">Description : </label>
    <input type="text" class="form-control" id="description" name="description">
  </div>
  <button type="submit" class="btn btn-primary col-1 flex center ml-5 ">Ajouter</button>
</form>

<?php
include "template/footer2.php";
?>
