<?php

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
		
		$genre=$_POST["genre"];
		$prenom=$_POST["Prénom"];
		$nom=$_POST["Nom"];
		$jourN=$_POST["jour"];
		$moisN=$_POST["mois"];
		$anneeN=$_POST["annee"];
		$tel=$_POST["tel"];
		$login=$_POST["pseudo"];
		$password=$_POST["Password"];
		$confirmation=$_POST["confirmation"];
		$mail=$_POST["mail"];
		$requete="INSERT INTO `$bdd`.`$table` 
		(`genre`,`prenom`,`nom`,`jourN`,`moisN`,`anneeN`,`tel`,`login`,`password`,`confpassword`,`mail`) VALUES ('$genre', '$prenom', '$nom', '$jourN', '$moisN','$anneeN', '$tel', '$login', '$password', '$confirmation', '$mail');";
	
		
	
		if(strcmp($password,$confirmation)==0){
			
			$rep=mysql_query($requete);
			echo"<!DOCTYPE html>
					<html>
						<head>
							<title> Ludothèque : Inscription </title>
							<meta http-equiv=\"Content-Type\" content=\"text/HTML; charset=utf-8\" />
							<link rel=\"stylesheet\" type=\"text/css\" href=\"projet.css\" media=\"screen\" />
						</head>
   
						<body>
		
							<div id=\"entete\"> 
								<h1>ludothèque du Mans</h1> 
							</div>
		
							<div id=\"menu\">";
								
									include("menu.php");
									
			echo "			</div>
							<div id=\"corps\">
		
								Vous ètes bien inscrit sur notre ludothèque.
		
							</div>
	 
							<div id=\"pied\">
							<?php
								include(\"pied.php\");
							?>
							</div>	
						</body>
					</html>";
		}
		else {
			include("inscription.php");
		}
?>
