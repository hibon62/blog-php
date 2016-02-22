<?php
//Connexion a la base de données
try{
    $db = new PDO('mysql:host=localhost; dbname=blog', 'root', '');
} catch(PDOException $e){
    die('Erreur : '.$e->getMessage());
}

?>