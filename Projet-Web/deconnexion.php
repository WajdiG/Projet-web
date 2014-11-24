<?php
		//Sous-programme qui permet a l'utilisateur de se deconnecter de notre site, si celui-ci est déjà inscrit
		session_start();
		session_destroy();
		
		$server="info.univ-lemans.fr";
		$bdd="info201a";
		$table="VR_grp1_ID";
		$user="info201a_user";
		$mdp="com72";
		$lienBase=mysql_connect($server,$user,$mdp);
		$retour=mysql_select_db($bdd,$lienBase);
		
		if(!$retour){
			include("erreur.php");
		}
					
		header('Location: connexion.php');
		
?>
