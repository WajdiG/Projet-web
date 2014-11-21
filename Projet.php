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
				<?php
					include("menu.php");
				?>
			</div>
			<div id="corps">
			
				<h2> Bienvenue dans la ludothèque du Mans, votre site pour louer des jeux !</h2>
				<ul>
					<p>Dans notre ludothèque vous pourrez : </p>
					<li>louer des jouets et jeux de sociétés pour vos enfants</li>
					<li>prêter ceux de vos enfants qui ne leurs servent plus</li>
					<li>vous rendre dans des espaces de jeux permettant ainsi à votre enfant de s'amuser avec d'autres enfants de son âge</li>
				</ul>
				<p> Pour bénéficier de nos services, vous devrez simplement vous inscrire sur notre site en <a href="inscription.html">cliquant ici</a></p>
				<p> Sivous êtes déjà inscrit, accèdez à votre <a href="panier.html">panier</a> ou recherche la prochaine activité de votre enfant <a href="recherche.html">ici</a></p>
			</div>
		</div>
		<div id="pied">
			<?php
				include("pied.php");
			?>
		</div>	
		
	</body>
</html>
