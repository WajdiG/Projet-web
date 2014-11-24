<?php
	//Sous-programme responsable de la suppression d'un jeu depuis le panier d'un utilisateur
	session_start();
	
	$server="info.univ-lemans.fr";
	$bdd="info201a";
	$table="VR_grp1_Paniers";
	$user="info201a_user";
	$mdp="com72";			
	$LienBase=mysql_connect($server,$user,$mdp);
	$retour=mysql_select_db($bdd,$LienBase);
	
	$req='DELETE FROM VR_grp1_Paniers WHERE Client=\''.$_SESSION['login'].'\' AND Nom=\''.$_GET['sup'].'\'';

	if (isset($_SESSION['login']) AND !empty($_SESSION['login'])){
		$sup=mysql_query($req);
	}
	header('Location: panier.php');
?>
