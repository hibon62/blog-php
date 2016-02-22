<?php
    session_start();
    setcookie('name',-1);
    unset($_SESSION["session"]);
    session_destroy();
?>
	<!--Affichahe d'une popup pour confirmer l'ajout-->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script type="text/javascript">
        alert("Deconnecter");
        window.location.href= "../index.php";
    </script>