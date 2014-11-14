<!DOCTYPE html>
<html>
	<head>
		<title>inscription </title>
		<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
     	<link rel="stylesheet" type="text/css" href="projet.css" media="screen" />
	</head>
	<body>
		
		<div id="entete"> 
			<h1>ludothèque du Mans</h1> 
		</div>
			
		<div id="menu">
			<?php
				include("menu.php");
			?>
		</div>
			
		<div id="corps">
			<fieldset><legend>Connexion</legend>
			
				<div id="titre">
					<p id="tit"><label for="pseudo"> Identifiant : </label></p>
					<p id="tit"><label for="Password"> Mot de Passe : </label></p>
					<p id="tit"><label for="confPass"> Confirmation : </label></p>
				</div>
				
			
				<div id="formulaire">
					<p id="tit"><input type="text" placeholder="16 caractèe maximum" name="pseudo" id="pseudo" maxlength="16" size="30" required /><br />
								<input type="password" placeholder="entre 8 et 16 caractères" name="Password" id="Password" maxlength="16" size="30" required /><br />
								<input type="password" placeholder="confirmer mot de passe" name="Password" id="confPass"  maxlength="16" size="30" required /><br />
					</p>
				</div>
			
				<p id="tit2"><input type="submit" value="Confirmer" /></p>
							
				<p id="tit2"><a href="mdp.html">Mot de passe oublié</a></p>
					
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
