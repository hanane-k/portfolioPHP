<?php
session_start();
if (!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    header("location: index.php");
    exit;
}
include "template/header2.php";
require_once "model/db.php";
include_once "template/navAdmin.php";
include "model/projectManager.php";
$id = $_GET["id"];
$projet = getOneProject($id, $db);
?>

<form action="projectTreatment.php?action=update" method="post">
  <div class="form-group col-sm-12 col-md-7 col-lg-6">
    <input type="hidden" name="IDbiog" value="<?php echo $id; ?>">
    <label for="titre">Titre : </label>
    <input type="text" class="form-control" id="titre" name="nom" <?php echo "value='" . $projet["nom"] . "'"; ?>>
  </div>
  <div class="form-group col-sm-12 col-md-7 col-lg-6">
    <label for="description">Description : </label>
    <textarea name="description" id="description" cols="80" rows="20"><?php echo $projet["description"]; ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary col-1 flex center ml-5 ">Enregistrer</button>
</form>

<?php
include "template/footer2.php";
?>
