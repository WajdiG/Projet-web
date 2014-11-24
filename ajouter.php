<?php
	//Sous-programme responsable de l'ajout d'un jeu au panier de l'utilisateur
	session_start();
	
	$server="info.univ-lemans.fr";
	$bdd="info201a";
	$table="VR_grp1_Paniers";
	$user="info201a_user";
	$mdp="com72";			
	$LienBase=mysql_connect($server,$user,$mdp);
	$retour=mysql_select_db($bdd,$LienBase);
	
	$req='INSERT INTO `info201a`.`VR_grp1_Paniers` (`Nom`,`Client`,`Creneau`) VALUES (\''.$_GET['add'].'\',\''.$_SESSION['login'].'\',\'\')';

	if (isset($_SESSION['login']) AND !empty($_SESSION['login'])){
		$add=mysql_query($req);
	}
	header('Location: recherchejeux.php');
?>
