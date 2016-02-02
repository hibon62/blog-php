<?php include('assets/header.php'); 


if (isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['mdp1'])){
    mysql_real_escape_string();
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $mdp1 = $_POST['mdp1'];

    if($email == NULL || $mdp == NULL || $mdp1 == NULL){?>
            <script type="text/javascript">
                    alert("Veuillez compléter tout les champs !");
                </script>
        <?php
    }else{

        $result = mysql_query("SELECT * FROM utilisateurs WHERE `utilisateurs`.`email` = '$email'");
        $data = mysql_fetch_array($result);
        if ($data == NULL) {

            if ($mdp == $mdp1){

                $mdp = md5($_POST['mdp']);
                $sid = md5($email . time());
                $result = mysql_query("INSERT INTO utilisateurs (email, mdp, sid)
                                    VALUES ('$email','$mdp','$sid')");
                print"<script>document.location.href='index.php';</script>";
            }else {?>
                <script type="text/javascript">
                    alert("Les deux mot de passe ne sont pas identique");
                </script>
                <?php
                }   
            }else{?>
                <script type="text/javascript">
                    alert("Un utilisateur utilise déjà cet adresse email");
                </script>
                <?php
                }
        }     

}

?>

<div class="container">
    <div class="content">
        <div class="page-header well">
            <h1>Blog de François <small>Pour m'initier à PHP</small></h1>
        </div>

        <div class="span8">
            <form enctype="multipart/form-data" action="register.php" method="post">
                <label>Email</label>
                <input type="mail" name="email" class="inputForm">

                <label>Mot de Passe</label>
                <input type="password" name="mdp" class="inputForm"></input><br>

            <label>Confirmation du Mot de Passe</label>
            <input type="password" name="mdp1" class="inputForm"></input><br>

        <input type="submit" value="envoyer">
        </form>
</div>
</div>


<?php include('assets/footer.php'); include('assets/connectBDD.php'); ?>