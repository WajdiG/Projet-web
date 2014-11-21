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
			<?php
				$Requete='select `Ans`,`Mois`,`Jour` from `VR_grp1_Jeux`';
				$Reponse=mysql_query($Requete);
				$Data=mysql_fetch_assoc($Reponse);
				
			?>
		</div>
		<div id="pied">
			<?php
				include("pied.php");
			?>
		</div>	
		
	</body>
</html>

