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
		$password=$_POST["Password"];
		
		$confPass="SELECT password FROM `$table` WHERE `login`='$login';";
		$req=mysql_query($confPass);
		$Data=mysql_fetch_assoc($req);
		
		$genre=mysql_query("SELECT genre FROM `$table` WHERE `login`='$login' AND `password`='$password';");
		$Data3=mysql_fetch_assoc($genre);
		
		$prenom=mysql_query("SELECT prenom FROM `$table` WHERE `login`='$login' AND `password`='$password';");
		$Data1=mysql_fetch_assoc($prenom);
		
		$nom=mysql_query("SELECT nom FROM `$table` WHERE `login`='$login' AND `password`='$password';");
		$Data2=mysql_fetch_assoc($nom);
		
		echo "    requete : ".$confPass;
		echo "    Bonjour ".$login." et ".$password." enfin ".$Data['password'];
		
		if(strcmp($Data['password'],$password)==0){
			
				echo"<!DOCTYPE html>
					<html>
						<head>
							<title> Ludothèque : Connexion </title>
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
		
								Bienvenue sur notre Ludothèque  ";
								if($Data3['genre']==0){
									echo "Mr. ".$Data1['prenom']." ".$Data2['nom'];
								}
								else if($Data3['genre']==1){
									echo "Mme ".$$Data1['prenom']." ".$Data2['nom'];
								}
								else{
									echo "Mlle ".$Data1['prenom']." ".$Data2['nom'];
								}
		
							"</div>
	 
							<div id=\"pied\">
							echo $password.'   '.$confirmation ;
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
							<title> Ludothèque : Connexion </title>
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
		
								Mot de passe ou nom d'utilisateur incorrect, veuillez réessayer SVP
								
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
