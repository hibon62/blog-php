<?php include('assets/connectBDD.php');

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['mdp1'])){
    mysql_real_escape_string();
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $mdp1 = $_POST['mdp1'];
    
    //Si l'un des champs est vide on affiche un message d'erreur
    if($nom == NULL || $prenom == NULL || $email == NULL || $mdp == NULL || $mdp1 == NULL){?>
            <script type="text/javascript">
                    alert("Veuillez compléter tout les champs !");
                </script>
        <?php
    }else{
        //Si tous les champs sont remplies, on regarde si l'adresse mail et deja utilisé pour un autre compte
        $result = mysql_query("SELECT * FROM utilisateurs WHERE `utilisateurs`.`email` = '$email'");
        $data = mysql_fetch_array($result);
        if ($data == NULL) {
            //Si l'adresse n'existe pas on peux continué, et on vérifie si les deux mots de passe sont identiques
            if ($mdp == $mdp1){
                $mdp = md5($_POST['mdp']);
                $sid = md5($email . time());
                $result = mysql_query("INSERT INTO utilisateurs (nom, prenom, email, mdp, sid)
                                       VALUES ('$nom','$prenom','$email','$mdp','$sid')");
                print"<script>document.location.href='index.php';</script>";//Redirection vers la page d'accueil
            }else {?>
                <script type="text/javascript">
                    alert("Les deux mot de passe ne sont pas identique");//Erreur : Les deux mots de passe ne sont pas identiques
                </script>
                <?php
                }   
            }else{?>
                <script type="text/javascript">
                    alert("Un utilisateur utilise déjà cet adresse email"); //Erreur : Adresse deja utiliser pour un autre compte
                </script>
                <?php
                }
        }     

}

?>

<head>
    <!-- start: CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <style type="text/css">
        body { background: url(img/bg-login.jpg) no-repeat center fixed  !important; }
    </style>
</head>

<body>
    <div class="container-fluid-full">
        <div class="row-fluid">
            <div class="row-fluid">
                <div class="login-box">
                    <div class="icons">
                        <a href="index.php"><i class="halflings-icon home"></i></a>
                    </div>
                    <h3>Inscription au blog</h3>
                    
                    <form action="register.php" method="post">
                        <fieldset>
                            <div class="input-prepend" title="Nom">
                                <span class="add-on"><i class="halflings-icon user"></i></span>
                                <input class="input-large span10" name="nom" id="nom" type="text" placeholder="Entrer votre nom"/>
                            </div>
                            <div class="clearfix"></div>
                            
                            <div class="input-prepend" title="Prenom">
                                <span class="add-on"><i class="halflings-icon user"></i></span>
                                <input class="input-large span10" name="prenom" id="prenom" type="text" placeholder="Entrer votre prenom"/>
                            </div>
                            <div class="clearfix"></div>
                            
                            <div class="input-prepend" title="E-mail">
                                <span class="add-on"><i class="halflings-icon envelope"></i></span>
                                <input class="input-large span10" name="email" id="username" type="mail" placeholder="Entrer votre E-mail"/>
                            </div>
                            <div class="clearfix"></div>
                            
                            <div class="input-prepend" title="Mot de passe">
                                <span class="add-on"><i class="halflings-icon lock"></i></span>
                                <input class="input-large span10" name="mdp" id="password" type="password" placeholder="Entrer votre Mot de passe"/>
                            </div>
                            <div class="clearfix"></div>

                            <div class="input-prepend" title="Mot de passe">
                                <span class="add-on"><i class="halflings-icon lock"></i></span>
                                <input class="input-large span10" name="mdp1" id="password" type="password" placeholder="Entrer votre Mot de passe"/>
                            </div>
                            <div class="clearfix"></div>

                            <div class="button-login">	
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                            <div class="clearfix"></div>
                        </fieldset>
                    </form>
                </div><!--/span-->
            </div><!--/row-->
        </div><!--/.fluid-container-->
    </div><!--/fluid-row-->
</body>