<?php
setcookie("nom","François",time() + 365*24*3600);
if(isset($_COOKIE[nbVisite])){
	setcookie("nbVisite",$_COOKIE[nbVisite] +1 ,time() + 365*24*3600);
} else{
	setcookie("nbVisite","1" ,time() + 365*3600);
}