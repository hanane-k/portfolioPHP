<?php
// verifier si le user est connecté, si non on le renvoi vers la page index
session_start();
if (!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    header("location: index.php");
    exit;
}
//charger le header2 et la navAdmin
include "template/header2.php";
include_once "template/navAdmin.php";

?>
<!-- le formulaire pour ajouter un produit -->
<form action="projectTreatment.php?action=add" method="post" enctype="multipart/form-data">
<div class="form-group col-sm-12 col-md-7 col-lg-6">
    <label for="nom">nom : </label>
    <input type="name" class="form-control" id="nom" name="nom">
  </div>
  <div class="form-group col-sm-12 col-md-7 col-lg-6">
    <label for="IDimage">image : </label>
    <input type="file" class="form-control" id="IDimage" name="IDimage">
  </div>
  <div class="form-group col-sm-12 col-md-7 col-lg-6">
  <label for="description">Description : </label>
    <textarea name="description" id="description" cols="80" rows="20" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary col-1 flex center ml-5 ">Ajouter</button>
</form>

<?php
//charger le footer2
include "template/footer2.php";
?>
