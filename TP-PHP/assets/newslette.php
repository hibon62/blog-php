<?php
include("connectBDD.php");

if (isset($_POST['email'])){
    $email = $_POST['email'];
    $result = mysql_query("SELECT * FROM newsletter WHERE `email`= '$email'");
    $data = mysql_fetch_array($result);

    if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email)) {
        if ($data == NULL) {
            $result = mysql_query("INSERT INTO newsletter (email) VALUES ('$email')");
            echo ("Vous allez recevoir les news dés à présent.");
        }else{
            echo ("Cet utilisateur reçoit déjà les news.");

        }
    } else {
        echo 'Cet email a un format non adapté.';
    }


}else{
    mysql_real_escape_string();
    $email = $_POST['email'];
}

?>