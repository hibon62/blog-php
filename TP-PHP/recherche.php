<?php include('assets/header.php') ?>

<div class="container">

    <div class="content">

        <div class="page-header well">
            <h1>Blog de François <small>Pour m'initier à PHP</small></h1>
        </div>


        <div class="span8">

            <!-- contenu -->

            <?php 
                //Initialisation de la variable contenant les résultats
                $resultats = ""; 

                if(isset($_POST['query']) && !empty($_POST['query'])){
                
                    //Si l'utilisateur a entré quelque chose, on traite l'information
                    $query = preg_replace("#[^a-z ?0-9]#i", "", $_POST['query']);

                    $sql = "SELECT * FROM articles WHERE titre LIKE ? OR contene LIKE ?";
                };

                //Connexion a la base de données
                include("assets/db.php");

                $req = $db->prepare($sql);
                $req->execute(array('%'.$query.'%', '%'.$query.'%'));

                $count = $req->rowCount();
                
                //Si la recherche donne un resultat on affiche
                if($count >= 1){
                    echo "$count résultat trouvé pour <strong>$query</strong><hr/>";
                    while($data = $req->fetch(PDO::FETCH_ASSOC)){
                        echo '<h3>'.$data['titre'].'</h3><br>';
                        echo  '<img class = "img-art" src = "assets/images/'.$data['img'].'" width=600px><br>';
                        echo '<p class="article">'.$data['contene'].'</p><p class="rigth"> date : '. $data->date .'</p>';
                    }
                }else{
                    echo "0 résultat trouvé pour <strong>$query</strong><hr/>";
                }
            ?>
        </div>
        <nav class="span4"></nav>
    </div>


    <?php include('assets/footer.php') ?>