<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">

        <title>Blog de François</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/jumbotron.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">


    </head>

    <body>

        <?php  include('assets/nav.php');  

        session_start();

        if(isset($_SESSION["session"])){
            $connect = true ;
            $email_util = $_SESSION["session"];
            echo "Vous etes connecté avec l'adresse ".$email_util ;
            echo '<h5>Bonjour ' . $_COOKIE["nom"] . ". Nombre de visites : " . $_COOKIE["nbVisite"] ."</h5>"; 
        } else {
            $connect = false;
        }

        

        //Connexion base de données
        include('assets/connectBDD.php');?>