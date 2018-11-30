<?php
include "template/header2.php";
// $req = $db->query('SELECT * FROM user');
// $user = $req->fetchall(PDO::FETCH_ASSOC);
?>  
    <div class="containerNom flex center marginBottom">
      <section class="nom">
        <h1>Hanane NAMOUN</h1>
        <h2>Développement web</h2>
        <h2><span class="span">Back-end</span></h2>
      </section>
    </div>

<form action="adminConnectTreatment.php" method="post" name="Connexion" class="needs-validation ml-5">
  <div class="form-group">
    <label for="nom" class="flex start">Nom : </label>
    <input type="name" name="nom" class="form-control col-12 col-md-7 col-lg-6" id="nom" placeholder="Enter nom">
  </div>
  <div class="form-group">
    <label for="password" class="flex start">Password : </label>
    <input type="password" name="password" class="form-control col-12 col-md-7 col-lg-6" id="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary col-1 flex center">OK</button>
</form>

<?php
include "template/footer2.php";
?>  
