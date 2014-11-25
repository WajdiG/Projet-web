﻿<?php
	/*Cette partie détruit toute les variables de session pour permettre a l'utilisateur de s'inscrire au site*/

	session_destroy();

?>
	
	<!-- Ici se fait l'affichage de la page d'inscription, réaliser à partir de 2 formulaires qui envoi les informations
	recueilli à la base de données -->

<!DOCTYPE html>
<html>
	<head>
    	<title> Ludothèque : Inscription </title>
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
		
		
		<p><form method="post" action="traitement.php">
			
			<fieldset><legend>Vos Coordonnées</legend>
			
				<input type="radio" name="genre" value="0" checked /><label for="M">M. </label>
				<input type="radio" name="genre" value="1" /><label for="M">Mme. </label>
				<input type="radio" name="genre" value="2" /><label for="M">Mlle. </label>
				
				<div id="titre">
					<br />
						
					<p id="tit"><label for="Prénom"> Prénom : </label><br /></p>
					<p id="tit"><label for="Nom"> Nom : </label><br /></p>
					<p id="tit"><label for="date"> Date de Naissance : </label><br /></p>
					<p id="tit"><label for="tel"> Telephone : </label><br /></p>
					
				</div>
				
				<div id="formulaire">
					<p id="tit"><input type="text" name="Prénom" id="Prénom" placeholder="exemple : Luke" maxlength="15" size="50" required /><br />
								<input type="text" name="Nom" id="Nom" placeholder="exemple : Skywalker" maxlength="15" size="50" required /><br />
								<input type="tel" name="jour" id="date" placeholder="jj" maxlength="2" size="2"/>
								<input type="tel" name="mois" id="date" placeholder="mm" maxlength="2" size="2"/>
								<input type="tel" name="annee" id="date" placeholder="aaaa" maxlength="4" size="4"/><br />
								<input type="tel" name="tel" id="tel" placeholder="exemple : 02-22-22-22-22" maxlength="15" size="50"/><br />
					</p>			
				</div>
			</fieldset><br />
			
			<fieldset><legend>Votre Compte</legend>
			
				<div id="titre">
					<p id="tit"><label for="pseudo"> Identifiant : </label></p>
					<p id="tit"><label for="Password"> Mot de Passe : </label></p>
					<p id="tit"><label for="confPass"> Confirmation : </label></p>
					<p id="tit"><label for="mail"> Adresse Mail : </label><br /></p>
				</div>
				
				
				<div id="formulaire">
					<p id="tit"><input type="text" placeholder="16 caractèe maximum" name="pseudo" id="pseudo" maxlength="16" size="50" required /><br />
								<input type="password" placeholder="entre 8 et 16 caractères" name="Password" id="Password" maxlength="16" size="50" required /><br />
								<input type="password" placeholder="confirmer mot de passe" name="confirmation" id="confPass"  maxlength="16" size="50" required /><br />
								<input type="email" name="mail" id="mail" placeholder="exemple : nouvel-espoir@starswars.IV" maxlength="46" size="50" required /><br />
					</p>
				</div>
						
			</fieldset>
			
			<p id="tit2"><input type="checkbox" name="arnaque" id="arnaque" required /><label for="arnaque">J'accepte les <a href="condtionutilisation.html">Conditions d'utilisation </a></label></p>	
			
			<p id="tit2"><input type="submit" value="confirmer" name="valider" /></p>
		
		</form></p></div>
	 
		<div id="pied">
			<?php
				include("pied.php");
			?>
		</div>	
	</body>
</html>
