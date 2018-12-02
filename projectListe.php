<?php
// charger le header2 la dBase et le projectManager
include "template/header2.php";
include "template/navAdmin.php";
require_once "model/db.php";
include "model/projectManager.php";
// definir la variable $project comme la fonction qui reccupere les projets
$project = getProject($db);
?>
<a href="admin.php" class="mb-5">Retour à la page Admin</a>
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">IDprojet</th>
      <th scope="col">nom</th>
      <th scope="col">description</th>
      <th scope="col">IDimage</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    foreach ($project as $key => $value) {
  ?>
    <tr>
      <th scope="row"><?php echo $value["IDprojet"]; ?></th>
      <td><?php echo $value["nom"]; ?></td>
      <td><?php echo $value["description"]; ?></td>
      <td><?php echo $value["IDimage"]; ?></td>
      <td>
        <a href="projectUpdate.php?action=update&&id=<?php echo $value["IDprojet"];?>">Modifier</a>
        <a href="projectTreatment.php?action=delete&&id=<?php echo $value["IDprojet"];?>">Supprimer</a>
      </td>
    </tr>
    <?php
        }
    ?>
  </tbody>
</table>
<?php
include "template/footer2.php";
?>