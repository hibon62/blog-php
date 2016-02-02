<?php
include('connectBDD.php');

if(isset($_POST[titreArticle])&&isset($_POST[descriptionArticle])){
	mysql_real_escape_string();

	$query = "INSERT INTO `articles`(`id`, `titre`, `contene`,  `date`, `img`) VALUES ('','".$_POST[titreArticle]."','".$_POST[descriptionArticle]."','".date('ymd')."','".$_FILES['fichier']['name']."');";
	//Execution de la requete
	$result = mysql_query($query);

	if (!$result) {
	    die('Requete invalide : ' . mysql_error());
	} else { ?>
		<!--Affichahe d'une popup pour confirmer l'ajout-->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script type="text/javascript">
		alert("Votre article a bien était ajouté");
		window.location.href= "../index.php";
		</script>
	<?php
	}	
}


define('TARGET', 'images/');



  if( !empty($_FILES['fichier']['name']) )
  {
  	$extension  = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);
  	//$nomImage = md5(uniqid()) .'.'. $extension;
  	$nomImage = $_FILES['fichier']['name'];
  	var_dump($nomImage);
  	 if(move_uploaded_file($_FILES['fichier']['tmp_name'], TARGET.$nomImage))
            {
              $message = 'Upload réussi !';
              ?>
			<!--Affichahe d'une popup pour confirmer l'ajout-->
				<meta http-equiv="content-type" content="text/html; charset=utf-8" />
				<script type="text/javascript">
				alert("Upload ok");
				window.location.href= "../index.php";
				</script> <?php
            }
            else
            {
              // Sinon on affiche une erreur systeme
            	?>
              <meta http-equiv="content-type" content="text/html; charset=utf-8" />
				<script type="text/javascript">
				alert("Erreur lors de l'upload");
				window.location.href= "../index.php";
				</script> <?php
            }
  }
