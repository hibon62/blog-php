<?php include('assets/header.php') 
?>

    <div class="container">

      <div class="content">
      
        <div class="page-header well">
         <h1>Blog de François <small>Pour m'initier à PHP</small></h1>
        </div>
        
        
          <div class="span8">
              <?php 
    
    session_start(); if(isset($_SESSION["session"])){
?>
            <form enctype="multipart/form-data" action="assets/addArticle.php" method="post">
                <label>Titre de l'article</label>
                <input type="text" name="titreArticle" class="inputForm">
                <label>Description de l'article</label>
                <textarea name="descriptionArticle" class="inputForm"></textarea><br>
                <label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Ajouter une image:</label>
                <input name="fichier" type="file" id="fichier_a_uploader" /><br>
                <input type="submit">
            </form>
          </div>
      </div>
<?php } else { echo '<p>Petit malin, connectez-vous !</p>' ; } ?>

<?php include('assets/footer.php') ?>