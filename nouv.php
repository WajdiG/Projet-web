<!DOCTYPE html>
<html>
	<head>
		<title> Nouveauté </title>
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
			
			<h1>Nouveauté</h1>
			
			<p>Par soucis de clarté, nous n'afficherons à l'écran que les septs derniers ajouts au site : </p>
			
			<?php
				$server="info.univ-lemans.fr";
				$bdd="info201a";
				$table="VR_grp1_Jeux";
				$user="info201a_user";
				$mdp="com72";
				
				$LienBase=mysql_connect($server,$user,$mdp);
				$retour=mysql_select_db($bdd,$LienBase);
				
				$Requete='SELECT * FROM `VR_grp1_Jeux` ORDER BY ANS,MOIS,JOUR desc LIMIT 7';
				$Reponse=mysql_query($Requete);
				
				while($Data=mysql_fetch_assoc($Reponse)){
					echo '<p class=\"Jeux\">'.$Data['Nom'].'<br />';
					echo 'Â partir de : '.$Data['Age'].' ans <br />';
					echo 'Sur : '.$Data['Plateforme'].'<br />';
					echo 'Genre : '.$Data['Genre'].'<br />';		
					if($Data['Solo']==1){
						echo 'Type : Solo';
					}
					if($Data['Coop']==1){
						echo ', Coop';
					}		
					if($Data['Multi']==1){
						echo ', Multi';
					}	
					echo '<br />';
					echo 'Quantité en stock : '.$Data['NbJeuxStock'].'<br />';
					echo '</p>';
				}
			?>
		</div>
		<div id="pied">
			<?php
				include("pied.php");
			?>
		</div>	
		
	</body>
</html>

