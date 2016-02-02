<?php
include('connectBDD.php');

//SI les données on bien était transmis
if(isset($_GET[idArticle] )){
	mysql_real_escape_string();

 	$query = "DELETE  FROM `articles` WHERE `id` = " . $_GET[idArticle] ;

	
	$result = mysql_query($query);

	if (!$result) {
	    die('Requête invalide : ' . mysql_error());
	} else { ?>
		<!--Affichahe d'une popup pour confirmer la modification-->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script type="text/javascript">
            window.location.href= "../index.php";
		window.alert("Votre article à bien était suprimer");
		</script>
		<?php
	}
}

mysql_close($link);