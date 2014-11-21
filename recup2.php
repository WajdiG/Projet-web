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
		
		$login=$_POST["login"];		
		$prenom=$_POST["Prénom"];
		$nom=$_POST["Nom"];
		$mail=$_POST["mail"];
		
		$req="SELECT password FROM `$table` WHERE `login`='$login' AND `prenom`='$prenom' AND `nom`='$nom' AND `mail`='$mail';";
		$password=mysql_query($req);
		
		if($req){
			echo"<!DOCTYPE html>
					<html>
						<head>
							<title> Ludothèque : Recupération </title>
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
							<div id=\"corps\"><fieldset><legend>MOT DE PASSE</legend>
							
								<br />Le mot de passe associé à ce compte est : <br /> ".$password."<br /><br />
		
							</fieldset></div>
	 
							<div id=\"pied\">
							<?php
								include(\"pied.php\");
							?>
							</div>	
						</body>
					</html>";
					
		}
		else{
			echo"<!DOCTYPE html>
					<html>
						<head>
							<title> Ludothèque : Recupération </title>
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
							
								Le compte n'a pas été trouvé, soit il n'existe pas, soit vous avez mal remplit le formulaire.
								<br /> cliquez <a href=\"recup.html\">ici</a> pour recommencer.
		
							</div>
	 
							<div id=\"pied\">
							<?php
								include(\"pied.php\");
							?>
							</div>	
						</body>
					</html>";
		}		
?>
