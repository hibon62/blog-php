<?php include("assets/connectBDD.php");?>

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
                    <h3>Connectez-vous a votre compte</h3>
                    <!-- Si la personne présente sur le site est invité on affiche le formulaire de connection -->
                    <?php session_start(); if(!isset($_SESSION["session"])){ ?>
                    <form action="assets/traitementConnexion.php" method="post">
                        <fieldset>

                            <div class="input-prepend" title="Utilisateur">
                                <span class="add-on"><i class="halflings-icon user"></i></span>
                                <input class="input-large span10" name="email" id="username" type="email" placeholder="Entrer votre E-mail"/>
                            </div>
                            <div class="clearfix"></div>

                            <div class="input-prepend" title="Mot de passe">
                                <span class="add-on"><i class="halflings-icon lock"></i></span>
                                <input class="input-large span10" name="password" id="password" type="password" placeholder="Entrer votre Mot de passe"/>
                            </div>
                            <div class="clearfix"></div>

                            <div class="button-login">	
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="clearfix"></div>
                        </fieldset>
                    </form>
                    <?php } else { echo '<p>Deja connecter</p>' ; } ?>
                </div><!--/span-->
            </div><!--/row-->
        </div><!--/.fluid-container-->
    </div><!--/fluid-row-->
</body>