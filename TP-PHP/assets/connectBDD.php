<?php 

    $server_name = "localhost";
    $user = "root";
    $mdp = "";

    //Connexion
    $link = mysql_connect($server_name, $user, $mdp ) OR die(mysql_error());

    //Si connection fail
    if (!$link) {
        die('Connexion impossible : ' . mysql_error());
    }


    //select de la base 
    $db_selected = mysql_select_db('blog', $link);
    if (!$db_selected) {
        die ('Impossible de sélectionner la base de données : ' . mysql_error());
    }

