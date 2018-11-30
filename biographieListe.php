<?php
include "template/header2.php";
require_once "model/db.php";
include "model/biographieManager.php";
//definir la variable $biographie comme la fonction qui reccupere les biographie
$biographie = getBiographie($db);
?>
<a href="admin.php">Retour à la page Admin</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">IDbiographie</th>
      <th scope="col">nom</th>
      <th scope="col">description</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    foreach ($biographie as $key => $value) {
  ?>
    <tr>
      <th scope="row"><?php echo $value["IDbiog"]; ?></th>
      <td><?php echo $value["nom"]; ?></td>
      <td><?php echo $value["description"]; ?></td>
      <td>
        <a href="biographieUpdate.php?id=<?php echo $value["IDbiog"];?>">Modifier</a>
        <a href="biographieTreatment.php?action=delete&&id=<?php echo $value["IDbiog"];?>">Supprimer</a>
      </td>
    </tr>
    <?php
        }
    ?>
  </tbody>
</table>
