
  <!-- =============start header============== -->

    <?php
      include "template/header2.php";
    ?>

    <!-- =============end header============== -->
  

  <!-- =============start main============== -->
  <main>
    <div class="containerNom flex center">
      <section class="nom">
        <h1>Hanane KARRAD</h1>
        <h2>Développement web</h2>
        <h2><span class="span">Back-end</span></h2>
      </section>
    </div>
    <section class="flex column center">
      <form class="form" action="index.php">
        <input class="input" id="name" type="text" name="name" placeholder="Votre Nom *">
        <input class="input" id="email" type="email" name="email" placeholder="Votre Email *">
        <input class="input" id="tel" type="tel" name="phone" placeholder="Votre Téléphone">
        <input class="input" id="message" type="text" name="message" placeholder="Votre Message *"><br>
        <input class="input bouton" id="submit" type="submit" name="submit" placeholder="Envoyer">
      </form>
    </section>  
    <div>
    <a class="bouton htPage flex center" href="#header"><span><i class="fas fa-arrow-up"></i></span></a>
    </div>   
  
  </main>
  <!-- =============end main============== -->
  

  <!-- =============start footer============== -->

    <?php
      include "template/footer2.php";
    ?>

  <!-- =============end footer============== -->
