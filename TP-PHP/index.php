<?php include('assets/header.php') ?>

<div class="container">

      <div class="content">
      
        <div class="page-header well">
          <h1>Blog de François <small>Pour m'initier à PHP</small></h1>
        </div>
        
        
          <div class="span8">
          	<!-- notifications -->
          	
          	<!-- contenu -->
          
            <?php
                  
              $query = "SELECT * FROM articles";

              $result = mysql_query($query);
              while ($ligne = mysql_fetch_assoc($result)) {
                echo '<h3>'.$ligne[titre] .'</h3><br>';
                echo '<img src="assets/images/'.$ligne['img'].'"/><br>';
                echo $ligne[contene] .'<br> <br><p class="rigth"> date : '. $ligne[date] .'</p>';
                  
                session_start(); if(isset($_SESSION['session'])){ 
                echo '<a href="editerArticle.php?idArticle='.$ligne[id] .'"><input type="button" class="btn-primary" value="Editer"></a>';
                echo '<a href="assets/deleteArticle.php?idArticle='.$ligne[id] .'"><input type="button" class="btn-primary" id="btnSuppr" value="Suprimer "></a></br>';
                
                };
                  
                  

             } ?>
           </div>
          <nav class="span4"></nav>
        </div>


<?php include('assets/footer.php') ?>