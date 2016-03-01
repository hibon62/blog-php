<?php include('assets/connectBDD.php');?>
<?php include('assets/setCookie.php');?>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand" href="index.php">Blog de François</a>
            <ul class="nav navbar-nav">
                <?php session_start(); if(isset($_SESSION['session'])){ ?>
                <li><a href="ajouterArticle.php">Rédiger un article</a></li>
                <?php }; ?>
            </ul>
        </div>
        
        

        <div id="navbar" class="topbar-right">
            <input class="news" name="news" id="news" type="text" placeholder="Abonnez-vous !!!"/>
            <input type="button" id="addNews" class="btn btn-success" value="OK">
        
            <?php if(!isset($_SESSION['session'])){?>
            <a href="register.php"><button type="submit" class="btn btn-success" >S'inscrire</button></a>
            <a href="login.php"><button type="submit" class="btn btn-success" >Se connecter</button></a>
            <?php } else { ?>
            <a href="assets/deconnexion.php">
                <button type="submit" class="btn btn-success" >Se déconnecter</button>
            </a>
            <?php }; ?>

            <button type="submit" class="btn btn-success" >
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>

                    </form>
                </div>
            </button>
        </div><!--/topbar-right-->
    </div>
</nav>


 