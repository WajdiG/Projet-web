<!DOCTYPE html>
<html>
	<head>
		<title>Ludothèque : recupération </title>
		<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
     	<link rel="stylesheet" type="text/css" href="projet.css" media="screen" />
	</head>
	<body>
		
		<div id="entete"> 
			<h1>ludothèque du Mans</h1> 
		</div>
			
		<div id="menu">
			<?php
				//inclue le fichier menu.php contenant le menu présent sur chaque page
				include("menu.php");
			?>
		</div>
			
		<div id="corps">
			
			
			<fieldset><legend>Recupération de mot de passe</legend>
				<p>
					Bienvenue sur la page de récupération de votre mot de passe.
					Pour recupérer votre mot de passe, veuillez remplir le formulaire situé ci-dessous afin de confirmé votre identité.
				</p>
			
				<div id="titre">
					<p id="tit"><label for="pseudo"> Identifiant : </label></p>
					<p id="tit"><label for="nom"> Nom : </label></p>
					<p id="tit"><label for="prénom"> Prénom : </label></p>
					<p id="tit"><label for="mail"> Adresse Mail : </label><br /></p>
				</div>
				
				
				<div id="formulaire"><form method="post" action="recup2.php">
					<p id="tit"><input type="text" placeholder="Pseudo de votre compte" name="pseudo" id="pseudo" maxlength="16" size="50" required /><br />
								<input type="text" placeholder="Nom associé a votre compte" name="nom" id="nom" maxlength="16" size="50" required /><br />
								<input type="text" placeholder="Prenom associé a votre compte" name="prenom" id="prenom"  maxlength="16" size="50" required /><br />
								<input type="email" name="mail" id="mail" placeholder="addresse associé a votre compte" maxlength="46" size="50" required /><br /></p>
					<p id="tit2"><input type="submit" value="Confirmer" /></p>
				</form></div>
						
			</fieldset>
		
			<p>
				Pas encore inscrit ? c'est <a href="inscription.php">ici</a> que ça se passe	
			</p>
		</div>
		
		<div id="pied">
			<?php
				include("pied.php");
			?>
		</div>	
			
	</body>
</html>
