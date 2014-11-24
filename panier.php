<?php	
	session_start();	

	$server="info.univ-lemans.fr";
	$bdd="info201a";
	$table="VR_grp1_Paniers";
	$user="info201a_user";
	$mdp="com72";			
	$LienBase=mysql_connect($server,$user,$mdp);
	$retour=mysql_select_db($bdd,$LienBase);

	$nbJeu='SELECT count(Nom) FROM '.$table.' WHERE Client=\''.$_SESSION["login"].'\'';
	$Jeu=mysql_query($nbJeu) or die(mysql_error());
	$DataJeu=mysql_fetch_assoc($Jeu);
	
	$req='SELECT Nom FROM '.$table.' WHERE Client=\''.$_SESSION["login"].'\'';
	$Reponse=mysql_query($req) or die(mysql_error());
	$Data=mysql_fetch_assoc($Reponse);
	
	$info='SELECT Plateforme,Age,Genre FROM VR_grp1_Jeux WHERE Nom=\''.$Data['Nom'].'\'';
	$rep=mysql_query($info) or die(mysql_error());
	$infoJeu=mysql_fetch_assoc($rep);

	echo"	<!DOCTYPE html>
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
			
					<div id=\"menu\">";
						include("menu.php");
	echo"			</div>
						<div id=\"corps\">
							<br /><p>C'est ici que vous pourrez gérer vos commande en cours.</p>";
				


		if($DataJeu['count(Nom)']==0){	
			echo"<br />Votre Panier est actuellement vide <br />";
			echo"Vous pouvez consulter nos jeu <a href=\"recherchejeux.php\">ici</a>";
		}
		
		else if($DataJeu['count(Nom)']==1){
			echo"<br />Vous possédez, actuellement, le jeu suivant : <br /><br />";
			
			echo"<p class=\"JeuxPlank\">".$Data['Nom']."<br />";
			echo 'A partir de '.$infoJeu['Age'].' ans <br />';
			echo 'Plateforme : '.$infoJeu['Plateforme'].'<br />';
			echo 'Genre : '.$infoJeu['Genre'].'<br />';

			echo'<form method=\'get\' action=\'delete.php\'>	
					Retirer <input type=\'submit\' name=\'sup\' value=\''.$Data['Nom'].'\' /> du panier
				</form>';
	
		
		}
		
		else if($DataJeu['count(Nom)']>1){
			echo"<br /> Vous possédez, actuellement, les jeux suivants : <br />";
						
			while($Data=mysql_fetch_assoc($Reponse)){
				
				echo '<p class=\"Jeux\">'.$Data['Nom'].'<br />';
				echo 'Â partir de '.$infoJeu['Age'].' ans <br />';
				echo 'Plateforme : '.$infoJeu['Plateforme'].'<br />';
				echo 'Genre : '.$infoJeu['Genre'].'<br />';

			
				echo'<form method=\'get\' action=\'delete.php\'>
					Retirer <input type=\'submit\' name=\'sup\' value=\''.$Data['Nom'].'\'/> du panier
					</form>';
			}
		}
	echo"			</div>
				<p>
					Pas encore inscrit ? c'est <a href=\"inscription.php\">ici</a> que ça se passe	
				</p>
			</div>
			<div id=\"pied\">";
					include("pied.php");
	echo"	</div>	
			
		</body>
	</html>";

?>
