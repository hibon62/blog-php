<?php 
include('assets/header.php');
include('assets/functions.php'); 
?>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/function.js"></script>
<div class="content">
    <div class="page-header well">
        <h1>Blog de François <small>Pour m'initier à PHP</small></h1>
    </div>

    <div class="span8">
        <!-- notifications -->

        <!-- contenu -->

        <?php

        //Récuperation des données
        $query = "SELECT * FROM articles";

        $result = mysql_query($query);
        while ($ligne = mysql_fetch_assoc($result)) {

            //Affichage du titre
            echo '<h3>'.$ligne[titre].'</h3><br>';

            //Affichage de l'image
            echo  '<img class = "img-art" src = "assets/images/'.$ligne['img'].'" width=600px><br>';

            //Affichage du contenu
            echo '<p class="article">'.$ligne[contene].'</p><p class="rigth"> date : '. $ligne[date] .'</p>';
            
            if (check_ip($ligne['id'],get_real_ip()) == 0) { ?>
                <a href="javascript:void();" class="like" id="<?php echo $ligne['id']; ?>">Like <span><?php echo likes($ligne['id']); ?></span></a>
                <?php } else { ?>
                <a href="javascript:void();" class="liked">Liked <span><?php echo likes($ligne['id']); ?></span></a>
                <?php } ?>
                <?php echo $ligne['item'];

            //Si l'utilisateur est connecter le bouton "Editer et Supprimer" s'affiche
            session_start(); 
            if(isset($_SESSION['session'])){
                echo '<a href="editerArticle.php?idArticle='.$ligne[id].'"><input type="button" class="btn btn-success" value="Editer"></a>';

                echo '<a href="assets/deleteArticle.php?idArticle='.$ligne[id].'"><input type="button" class="btn btn-success" id="btnSuppr" value="Supprimer "></a></br>';

            };
        } ?>
            
    </div>
    <nav class="span4"></nav>
</div>


<?php include('assets/footer.php') ?>