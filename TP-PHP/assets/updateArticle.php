<?php
include('connectBDD.php');

//Si les données on bien était transmis
if(isset($_POST[titreArticle])&&isset($_POST[descriptionArticle])){
	mysql_real_escape_string();

 	$query = "UPDATE `articles` " ;
 	$query .= " SET `titre` = '". $_POST[titreArticle] . "', `contene` = " . $_POST[descriptionArticle] ;
 	$query .= ", `date` = ".date('dmY')." WHERE `id` = " . $_POST[idArticle] . ";";
	
	$result = mysql_query($query);

	if (!$result) {
	    die('Requête invalide : ' . mysql_error());
	} else { ?>
		<!--Affichage d'une popup pour confirmer la modification-->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script type="text/javascript">
		window.location.href= "../index.php";
		</script>
		<?php
	}
}
