<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">

        <title>Blog de François</title>

        <!-- CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">


    </head>
    <body>
        <div class="container">
            <form action="recherche.php" method="post">
                <div class="field-toggle" style="text-align : right">
                    <input type="text" name="query" class="search-form" placeholder="Rechercher" accesskey="enter" >
                </div>
            </form>
            <?php echo $resultats; ?>

            <?php  include('assets/nav.php');  

            session_start();

            if(isset($_SESSION["session"])){
                $connect = true ;
                $email_util = $_SESSION["session"];
                $nb = $_COOKIE["nbVisite"];
                $pseudo = "SELECT prenom FROM utilisateurs WHERE email = '" .$_SESSION["session"]."'";
                
                $result = mysql_query($pseudo);
                while ($ligne = mysql_fetch_assoc($result)) {
                
                    echo "Vous etes connecté avec l'adresse ".$email_util ;
                    echo "<h5>Bonjour ".$ligne[prenom] .", nombre de visite : ".$nb."</h5><br>";
                }    
            } else {
                $connect = false;
            }



            //Connexion base de données
            include('assets/connectBDD.php');?>