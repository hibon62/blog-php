<?php 

if(!isset($_SESSION['session'])){
    header('Location: index.php');
}

session_destroy();
header('Location: index.php');

?>