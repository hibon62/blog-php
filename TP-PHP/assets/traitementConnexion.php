<?php
include('connectBDD.php');
session_start();
if(isset($_POST[email])&&isset($_POST[password])){
	mysql_real_escape_string();
	$email = $_POST[email];
	$mdp = md5($_POST[password]);

	$query = "SELECT * FROM utilisateurs WHERE email = '" . $email ."' AND mdp = '" . $mdp."'";
    
    
	//Requete
	$result = mysql_query($query);
	$ligne = mysql_fetch_assoc($result); 

	$sid = md5($email . time());

	if (($ligne[email] == $email)&&($ligne[mdp] == $mdp)) {
		  $_SESSION["session"] = $email;
		  setcookie("name",session);
		?>
			<!--Affichahe d'une popup pour confirmer l'ajout-->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script type="text/javascript">
            window.location.href= "../index.php";
		</script>
		<?php
	} else {
		?>
			<!--Affichahe d'une popup pour confirmer l'ajout-->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script type="text/javascript">
            alert("erreur");
		    window.location.href= "../login.php";
		</script>
		<?php
	}

}
