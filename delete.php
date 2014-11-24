<?php
	session_start();
	
	$Jeux=$_GET['Jeux'];
	if (isset($_SESSION['login']) AND isset($_GET['Jeux'])){
		mysql_query("DELETE FROM VR_grp1_Paniers WHERE Client='".$_SESSION['login']."' AND Jeux='".$Jeux."'");
	}
	else{
		header('Location: Panier.php');
	}
?>