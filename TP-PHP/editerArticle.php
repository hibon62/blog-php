<?php include('assets/header.php') ?>

    <div class="container">

      <div class="content">
      
        <div class="page-header well">
          <h1>Blog de François <small>Pour m'initier à PHP</small></h1>
        </div>
        
        <div class="span8">

             <?php

             //recupération des données
             $query = "SELECT * FROM articles WHERE id = " . $_GET[idArticle];

              $result = mysql_query($query);
              $ligne = mysql_fetch_assoc($result); 

              //Affichage du formulaire avec les données recupére
              echo '<form action="assets/updateArticle.php" method="post">';
              echo '<label>Titre de l\'articles</label><br>';
              echo '<input type="text" name="titreArticle" value="'.$ligne[titre].'" class="inputForm"><br>';
              echo '<input type="text" name="idArticle" value="'.$_GET[idArticle].'" class="invisible"><br>';
              echo '<label>Description de l\'articles</label><br>';
              echo '<textarea name="descriptionArticle" class="inputForm">"'.$ligne[contene].'"</textarea><br>';
              echo '<input type="submit" value="editer"> </form></div>';
          ?>
          </div>
      </div><!--/content-->
    </div><!--/container-->

<?php include('assets/footer.php') ?>
