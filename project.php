<?php
session_start();
if (!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    header("location: index.php");
    exit;
}
include "template/header2.php";
include_once "template/navAdmin.php";

?>

<form action="projectTreatment.php?action=add" method="post">
<div class="form-group col-sm-12 col-md-7 col-lg-6">
    <label for="nom">nom : </label>
    <input type="name" class="form-control" id="nom" name="nom">
  </div>
  <div class="form-group col-sm-12 col-md-7 col-lg-6">
    <label for="IDimage">IDimage : </label>
    <input type="number" class="form-control" id="IDimage" name="IDimage">
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
