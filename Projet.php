<!DOCTYPE html>
<html>
	<head>
		<title> projet ludothèque Guedouar/Thieulart </title>
		<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
     	<link rel="stylesheet" type="text/css" href="projet.css" media="screen" />
	</head>
	<body>
		<div id="entete"> 
			<h1>ludothèque du Mans</h1> 
		</div>
		
		<div>
			<div id="menu">
				<!-- inclue le fichier menu.php contenant le menu présent sur chaque page -->
				<?php
					include("menu.php");
				?>
			</div>
			<div id="corps">
			
				<h2> Bienvenue dans la ludothèque du Mans, votre site pour louer des jeux vidéos !</h2>
				<ul>
					<p>Dans notre ludothèque vous pourrez : </p>
					<li>louer des jeux vidéos pour vous et/ou vos enfants</li>
					<li>Mettre vos jeux à disposition pour la communauté</li>
					<li>Participer à des évènements permettant aux joueurs de se rencontrer</li>
				</ul>
				<p> Pour bénéficier de nos services, vous devrez simplement vous inscrire sur notre site en cliquant<a href="inscription.php"> ici</a></p>
				<p> Si vous êtes déjà inscrit, accèdez à votre <a href="Panier.php">panier</a> ou recherchez un jeu <a href="jeux.php">ici</a></p>
			</div>
		</div>
		<div id="pied">
			<!-- inclue le fichier pied.php contenant le pied de page present sur chacune des pages -->
			<?php
				include("pied.php");
			?>
		</div>	
		
	</body>
</html>
