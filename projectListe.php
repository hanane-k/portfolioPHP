<?php
// charger le header2 la dBase et le projectManager
include "template/header2.php";
require_once "model/db.php";
include "model/projectManager.php";
// definir la variable $project comme la fonction qui reccupere les projets
$project = getProject($db);
var_dump($project);
?>
<a href="admin.php">Retour à la page Admin</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">IDprojet</th>
      <th scope="col">nom</th>
      <th scope="col">description</th>
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
      <td>
        <a href="projectUpdate.php?id=<?php echo $value["IDprojet"];?>">Modifier</a>
        <a href="projectTreatment.php?action=delete&&id=<?php echo $value["IDprojet"];?>">Supprimer</a>
      </td>
    </tr>
    <?php
        }
    ?>
  </tbody>
</table>
