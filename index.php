
  <!-- =============start header============== -->
  <?php
    include "template/header.php";
    require_once "model/db.php";
    require "model/biographieManager.php";
    require "model/projectManager.php";
    require "model/imageManager.php";
    $biographie = getBiographie($db);
    $projet = getProject($db);
    $images = getImage($db);
//     $requete = $db->query("SELECT * FROM image");
// $result = $requete->fetchAll(PDO::FETCH_ASSOC);


  ?>
  <!-- =============end header============== -->


  <!-- =============start main============== -->

    <div class="containerNom flex center marginBottom">
      <section class="nom">
        <h1>Hanane NAMOUN</h1>
        <h2>Développement web</h2>
        <h2><span class="span">Back-end</span></h2>
      </section>
    </div>
    <div class="flex column center">
      <section class="aPropo marginBottom">
        <a><h3 id="propos">
          <?php 
        foreach ($biographie as $key => $value) {
          echo $value["nom"]; 
          ?>
        </h3></a>
        <img class="avatar" src="img/avatar.png" alt="mon avatar">
        <!-- <p><strong>Bonjour</strong> je m'appelle <span class="span">Hanane</span>,<br>Je suis développeuse web junior, <span class="span">Back-End</span>.<br> Munie d'un Master 2 en Gestion de l'Environnement, j'ai rencontrer des difficultés pour trouver du travail, et après qu'eleques temps j'ai décidé de me convertir vers le monde du numérique. Passionnée par la créativité et le développement web, je suis actuellement une formation de Développement WEB et WEB-Mobile depuis Septembre 2018 à l'ADEP de Roubaix, grâce à la quelle je développe mes qualités professionnelles.<br>Ambitieuse et créative sont juste un échantillon de mes atouts professionnels, avec un très bon esprit de groupe et à la fois autonome; je saurai m'integrer à tout type de projet.</p> -->
        <p class="mt-4"><?php 
          echo $value["description"]; ?></p>
        <?php
        }
        ?>

      </section>
    </div>
    <section class="containerComp flex column center marginBottom">
      <a><h3 id="compétence">Compétences</h3></a>
      <p>Au cours de ma formation a l'ADEP, j'ai développé ma créativité et ma capacité de créer et produire et reproduire des sites et des pages-web:</p>
      <div class="flex center wrap">
        <div class="competence flex column center">
          <h4>Développement</h4>
          <i class="fas fa-cogs"></i>
          <p>Création de sites en html et css (sites statiques) et développement des bases de données (php, MySql) (sites dynamiques).</p>
        </div>
        <div class="competence flex column center">
          <h4>Intégration</h4>
          <i class="fas fa-code"></i>
          <p> HTML 5 / CSS 3 JavaScript & PHP. Framework, Bootstrap, Compatibilité navigateurs (Firefox, Chrome), orientée objet, integration MVC.</p>
        </div>
        <div class="competence flex column center">
          <h4>Responsive Design</h4>
          <i class="fas fa-desktop"></i>
          <p>Réalisation de charte graphique personnalisée pour votre site web,adaptés à tout type d'écran : Ordinateur, smartphone, tablette.</p>
        </div>
      </div>
    </section>
    <section class="portf flex column center marginBottom">
      <a><h3 id="portfolio">Portfolio</h3></a>
      <p>Aperçu de mes différents Projets réalisés.</p>
      <div class="flex center wrap">
        <!-- <div class="projet flex column center"> -->
        <?php 
        // foreach ($projet as $key => $value) {
        ?>
        <h4>
        <?php
          // echo $value["nom"]; 
          ?>
        </h4>
        <!-- <h4>Le CV</h4> -->
          <!-- <img class="imgProjet" src=" -->
          <?php 
          // foreach ($images as $key => $image) {
          // echo $images["nomImg"]; 
          // }
          ?>
          <!-- " alt="image de CV"> -->
          <p><?php
          // echo $value["description"]; 
          ?></p>
          <!-- <div class="flex btn">  
            <p><a class="bouton" href="cv.php">VOIR</a></p>
            <p><a class="bouton" href="https://github.com/hanane-k/cv" target="_blank">GitHub</a></p>
          </div> -->
          <?php
        // }
           ?>

        <!-- </div> -->
        <div class="projet flex column center">
          <h4>Le CV</h4>
          <img class="imgProjet" src="img/CV.png" alt="image de CV">
          <p>Une réalisation d'une page web de CV en html et css. mon premier projet au sein de ma formation à l'ADEP de Roubaix.</p>
          <div class="flex btn">  
            <p><a class="bouton" href="cv.php">VOIR</a></p>
            <p><a class="bouton" href="https://github.com/hanane-k/cv" target="_blank">GitHub</a></p>
          </div>
        </div>
        <div class="projet flex column center">
          <h4>TWITTER</h4>
          <img class="imgProjet" src="img/twitter.png" alt="image de twitter">
          <p>Une reproduction du site twitter en html et css avec utilisation de la propriété "flexbox"</p>
          <div class="flex btn">  
            <p><a class="bouton" href="twitter.php">VOIR</a></p>
            <p><a class="bouton" href="https://github.com/hanane-k/twitter" target="_blank">GitHub</a></p>
          </div>
        </div>
        <div class="projet flex column center">
          <h4>TERRE DE GEEK</h4>
          <img class="imgProjet" src="img/TerreDeGeek.png" alt="image d'un sit e-commerce">
          <p>Une réalisation d'un site e-commerce en html et css avec utilisation de la propriété "flexbox"</p>
          <div class="flex btn">  
            <p><a class="bouton" href="terredegeek.php">VOIR</a></p>
            <p><a class="bouton" href="https://github.com/hanane-k/terredegeek" target="_blank">GitHub</a></p>
          </div>
        </div>
        <div class="projet flex column center">
          <h4>OCEA-CLUB DE SPORT</h4>
          <img class="imgProjet" src="img/ocea.png" alt="image de ocea-club">
          <p>Une reproduction du site OCEA-CLUB en html et css avec utilisation de la propriété "flexbox"</p>
          <div class="flex btn">  
            <p><a class="bouton" href="ocea.php">VOIR</a></p>
            <p><a class="bouton" href="https://github.com/hanane-k/OCEA" target="_blank">GitHub</a></p>
          </div>
        </div>
        <div class="projet flex column center">
          <h4>LE MONDE D'EMMANUELLE</h4>
          <img class="imgProjet" src="img/le_monde_d'emmanuelle.png" alt="image de site de patisserie">
          <p>Une réalisation d'un site de Patisserie en html et css avec utilisation de la propriété "flexbox"</p>
          <div class="flex btn">  
            <p><a class="bouton" href="emmanuelle.php">VOIR</a></p>
            <p><a class="bouton" href="https://github.com/hanane-k/recette-Emmanuelle" target="_blank">GitHub</a></p>
          </div> 
        </div>
      </div>
    </section>
    <section class=" flex column center wrap marginBottom">
      <div>
        <a><h3>Outils</h3></a>
        <p>Technologie utilisée dans la réalisation des projets.</p>
      </div>
      <div class="contLang language wrap">
        <img class="imgLanguage" src="img/PHP_logo.png" alt="image de php">
        <img class="imgLanguage" src="img/javascript.png" alt="image de Javascript">
        <img class="imgLanguage" src="img/HTML5.png" alt="image de html5">
        <img class="imgLanguage" src="img/css3.png" alt="image de css3">
        <img class="imgLanguage" src="img/my_sql.png" alt="image de my-sql">
        <img class="imgLanguage" src="img/git.png" alt="image de git">
        <img class="imgLanguage" src="img/linux.jpg" alt="image de linux">
        <img class="imgLanguage" src="img/github.png" alt="image de github">
      </div>
    </section> 
    <div class="flex column marginBottom">
      <a class="bouton htPage flex center" href="#header"><span><i class="fas fa-arrow-up"></i></span></a>
      <h4><a class="cv" href="https://cvdesignr.com/public/5bceb728e0cfb" target="_blank">Voir Mon CV</a></h4>
    </div>   


  <!-- =============end main============== -->
  

  <!-- =============start footer============== -->

  <?php
    include "template/footer.php";
  ?>

  <!-- =============end footer============== -->
