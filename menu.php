<?php 
	// Menu du site apparaissant sur chaques pages
	session_start();

	echo "<ul>";
	echo "<li class=\"menu\"><a href=\"Projet.php\">Acceuil</a></li>";
	if(isset($_SESSION['login']) AND isset($_SESSION['password'])){
		echo "<li class=\"menu\"><a href=\"deconnexion.php\">Se Deconnecter</a></li>";
	}
	else{
		echo "<li class=\"menu\"><a href=\"connexion.php\">Se Connecter</a></li>";
	}
	echo "<li class=\"menu\"><a href=\"inscription.php\">Inscription</a></li>";
	echo "<li class=\"menu\"><a href=\"jeux.php\">Nos Jeux</a></li>";
	echo "<li class=\"menu\"><a href=\"nouv.php\">Nouveauté</a></li>";
	echo "<li class=\"menu\"><a href=\"Panier.php\">Panier</a></li>";
	
	echo "</ul>";
?>
