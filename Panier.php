<?php	
	session_start();	

	$server="info.univ-lemans.fr";
	$bdd="info201a";
	$table="VR_grp1_Paniers";
	$user="info201a_user";
	$mdp="com72";			
	$LienBase=mysql_connect($server,$user,$mdp);
	$retour=mysql_select_db($bdd,$LienBase);

	$req="SELECT Jeux FROM '$table' WHERE Client='$_SESSION['login']' ORDER BY Jeux";
	$nbJeu="SELECT count(Jeux) FROM '$table' WHERE Client='$_SESSION['login']';";

	$Reponse=mysql_query($req) or die(mysql_error());
	$Data=mysql_fetch_assoc($Reponse);

echo"<!DOCTYPE html>
<html>
	<head>
		<title>Ludothèque : Panier </title>
		<meta http-equiv=\"Content-Type\" content=\"text/HTML; charset=utf-8\" />
     	<link rel=\"stylesheet\" type=\"text/css\" href=\"projet.css\" media=\"screen\" />
	</head>
	<body>
		
		<div id=\"entete\"> 
			<h1>ludothèque du Mans</h1> 
		</div>
			
		<div id=\"menu\">"
				.include("menu.php").
		"</div>
		<div id=\"corps\">
			<br /><p>C'est ici que vous pourrez gérer vos commande en cours.</p>";
				


	if($nbJeu==0){	
		echo"<br />Votre Panier est actuellement vide <br />";
		echo"Vous pouvez consulter nos jeu <a href="recherchejeux.php">ici</a>";
	}
	else if($nbJeu==1){
		echo"<br />Vous possédez, actuellement, le jeu suivant : <br />";
		echo"<p class=\"Jeux\">".$Data['Jeux']."<br />";

		$info="SELECT Plateforme FROM VR_grp1_Jeux WHERE Nom='$Data['Jeux']'";
		$rep=mysql_query($info);		
		echo"	Plateforme : ".$rep."<br />";

		echo"<form name=\"retirer\">
			<a href=\"delete.php?Jeux=".$Data['Jeux']."\"><input type=\"button\" name=\"suppr\" value=\"suppr\" /> Retirer du Panier
		</form>";
	
		
	}
	else if{$nbJeu>1){
		echo"<br /> Vous possédez, actuellement, les jeux suivants : <br />";
		while($Data=mysql_fetch_assoc($Reponse)){
			echo"<br /><p class=\"Jeux\">".$Data['Jeux']."<br />";

			$info="SELECT Plateforme FROM VR_grp1_Jeux WHERE Nom='$Data['Jeux']'";
			$rep=mysql_query($info);		
			echo"	Plateforme : ".$rep."<br />";
			
			echo"<form name="retirer">
				<a href=\"delete.php?Jeux=".$Data['Jeux']."\"><input type=\"button\" name=\"suppr\" value=\"suppr\" /> Retirer du Panier
			</form>";
		}
	}
	echo"</p>
			<p>
				Pas encore inscrit ? c'est <a href=\"inscription.php\">ici</a> que ça se passe	
			</p>
		</div>
		<div id=\"pied\">"
				.include("pied.php").
		"</div>	
			
	</body>
</html>"

?>