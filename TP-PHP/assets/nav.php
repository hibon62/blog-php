<?php include('assets/connectBDD.php');?>
<?php include('assets/setCookie.php');?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <a class="navbar-brand" href="index.php">Blog de François</a>
            <ul class="nav navbar-nav">
                <?php session_start(); if(isset($_SESSION['session'])){ ?>
                <li><a href="ajouterArticle.php">Rédiger un article</a></li>
                <?php }; ?>
            </ul>
        </div>

        <div id="navbar" class="topbar-right">
            
            <a href="register.php"><button type="submit" class="btn btn-success" >S'inscrire</button></a>

            <?php if(!isset($_SESSION['session'])){ ?>
                <a href="login.php"><button type="submit" class="btn btn-success" >Se connecter</button></a>
            <?php } else { ?>
                <a href="assets/deconnexion.php"><button type="submit" class="btn btn-success" >Se déconnecter</button></a>
            <?php }; ?>    




</div><!--/.navbar-collapse -->
</div>
</nav>