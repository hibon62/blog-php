<?php 
include('assets/header.php');
include('assets/functions.php'); 
?>
<style>
    .img-slide{
        width: 400px;
        display: block;
    margin-left: auto;
    margin-right: auto
    }
    .bjqs{
        background-color : #000;
        filter:alpha(opacity=90);
        -moz-opacity:0.9;
        opacity: 0.8;
        border-radius: 10px 10px 10px 10px;
    }
    h3{
        text-align: center;
    }

</style>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/function.js"></script>
<link rel="stylesheet" href="bjqs.css">

<link rel="stylesheet" href="demo.css">

<!-- load jQuery and the plugin -->
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="js/bjqs-1.3.min.js"></script>
<div class="content">
    <div class="page-header well">
        <h1>Blog de François <small>Pour m'initier à PHP</small></h1>
    </div>

    <div class="span8">
        <!-- notifications -->

        <!-- contenu -->
        <div id="banner-fade">
            <ul class="bjqs">
                <?php

                //Récuperation des données
                $query = "SELECT * FROM articles";

                $result = mysql_query($query);
                while ($ligne = mysql_fetch_assoc($result)) {

                    //Affichage du titre
                    echo '<li><h3>'.$ligne[titre] .'</h3><br>';

                    //Affichage de l'image
                    echo  '<img class = "img-slide" src = "assets/images/'.$ligne['img'].'"><br>';

                    //Affichage du contenu
                    echo '<p class="article">'.$ligne[contene].'</p><p class="rigth"> date : '. $ligne[date] .'</p></li>';
                } ?>
            </ul>
        </div>

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

<script class="secret-source">
    jQuery(document).ready(function($) {

        $('#banner-fade').bjqs({
            height      : 520,
            width       : 820,
            animtype : 'fade', // accepts 'fade' or 'slide'
            animduration : 450, // how fast the animation are
            animspeed : 4000, // the delay between each slide
            automatic : true, // automatic

            // control and marker configuration
            showcontrols : true, // show next and prev controls
            centercontrols : true, // center controls verically
            centermarkers : true, // Center markers horizontally

        });

    });
</script>

</div>

<script src="js/libs/jquery.secret-source.min.js"></script>


<?php include('assets/footer.php') ?>