<?php
	session_start();
	
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
		
	$_SESSION["login"]="";
	$_SESSION["password"]="";
	
	if (isset($_POST['submit'])){
		$login=$_POST['login'];
		$password=$_POST['password'];
		
		$_SESSION["login"]=$login;
		$_SESSION["password"]=$password;
		
		print_r($login);
		print_r($password);
		
		$req=mysql_query('SELECT password FROM '.$table.' WHERE login = \''.$login.'\'');
		$Data=mysql_fetch_assoc($req);
	
		$prenom=mysql_query('SELECT prenom FROM '.$table.' WHERE login=\''.$login.'\' AND password=\''.$password.'\'');
		$Data1=mysql_fetch_assoc($prenom);
		
		$nom=mysql_query('SELECT nom FROM '.$table.' WHERE login=\''.$login.'\' AND password=\''.$password.'\'');
		$Data2=mysql_fetch_assoc($nom);
		
		if (strcmp($Data['password'],$password)==0){
			echo"<!DOCTYPE html>
					<html>
						<head>
							<title>Ludothèque : Connexion </title>
							<meta http-equiv=\"Content-Type\" content=\"text/HTML; charset=utf-8\" />
							<link rel=\"stylesheet\" type=\"text/css\" href=\"projet.css\" media=\"screen\" />
						</head>
						<body>
		
							<div id=\"entete\"> 
								<h1>ludothèque du Mans</h1> 
							</div>
			
							<div id=\"menu\">";
								//inclue le fichier menu.php contenant le menu présent sur chaque page
								include("menu.php");
								
			echo"			</div>
							
							<div id=\"corps\">
							
								Bienvenue sur notre Ludothèque  ";
								if($Data3['genre']==0){
									echo "Mr. ".$Data1['prenom']." ".$Data2['nom'];
								}
								else if($Data3['genre']==1){
									echo "Mme ".$Data1['prenom']." ".$Data2['nom'];
								}
								else{
									echo "Mlle ".$Data1['prenom']." ".$Data2['nom'];
								}
							
			echo"			</div>
			
							<div id=\"pied\">";
					
								include("pied.php");
					
		echo"				</div>	
			
						</body>
					</html>";
		}
	}
	
	if(!isset($_POST['submit'])){

		echo"<!DOCTYPE html>
			<html>
				<head>
				<title>Ludothèque : Connexion </title>
				<meta http-equiv=\"Content-Type\" content=\"text/HTML; charset=utf-8\" />
				<link rel=\"stylesheet\" type=\"text/css\" href=\"projet.css\" media=\"screen\" />
			</head>
			<body>
		
				<div id=\"entete\"> 
					<h1>ludothèque du Mans</h1> 
				</div>
			
				<div id=\"menu\">";
						//inclue le fichier menu.php contenant le menu présent sur chaque page 
						include("menu.php");
					
		echo"	</div>
				
				<div id=\"corps\">
					<fieldset><legend>Connexion</legend>
			
						<div id=\"titre\">
							<p id=\"tit\"><label for=\"pseudo\"> Identifiant : </label></p>
							<p id=\"tit\"><label for=\"Password\"> Mot de Passe : </label></p>
						</div>
				
			
						<div id=\"formulaire\">";
					
		echo"				<form method=\"post\" action=\"connexion.php\">	
								<p id=\"tit\"><input type=\"text\" placeholder=\"16 caractèe maximum\" name=\"login\" id=\"pseudo\" maxlength=\"16\" size=\"30\"required /><br />
										<input type=\"password\" placeholder=\"entre 8 et 16 caractères\" name=\"password\" id=\"password\" maxlength=\"16\" size=\"30\" required /><br /></p>
								<p id=\"tit2\"><input type=\"submit\" name=\"submit\" value=\"Confirmer\" /></p>
					
							</form>
					
						</div>
	
						<p id=\"tit2\"><a href=\"recup.php\">Mot de passe oublié</a></p>
					
					</fieldset>
		
					<p>
						Pas encore inscrit ? c'est <a href=\"inscription.php\">ici</a> que ça se passe	
					</p>
				</div>
		
				<div id=\"pied\">";
					
						include("pied.php");
					
		echo"	</div>	
			
			</body>
		</html>";
	}
		
?>
