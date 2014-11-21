<?php

		$server="info.univ-lemans.fr";
		$bdd="info201a";
		$table="VR_grp1_Jeux";
		$user="info201a_user";
		$mdp="com72";
		$cc=0;
		
		$Nom=$_POST["Nom"];
		$Genre=$_POST["Genre"];
		$Plateforme=$_POST["Plateforme"];
		$Solo=$_POST["Solo"];
		$Coop=$_POST["Coop"];
		$Multi=$_POST["Multi"];		
		$LienBase=mysql_connect($server,$user,$mdp);
		$retour=mysql_select_db($bdd,$LienBase);
		
		if($Solo=='on'){
			$Solo=1;
		}else{
			$Solo=0;
		}
		if($Coop=='on'){
		
			$Coop=1;
		}else{
			$Coop=0;
		}
		if($Multi=='on'){
			$Multi=1;
		}else{
			$Multi=0;
		}
		
		
		if(strlen($Nom)>0){

			$Requete='select `Nom` from `VR_grp1_Jeux` where Nom=\''.$Nom.'\'';
			$Reponse=mysql_query($Requete);
			$Reponse=mysql_fetch_assoc($Reponse);
			
			if(strlen($Reponse) > 0){
				echo $Nom." est present dans notre base de donnee. ";
			}
			else{
				echo "Nous ne possedons pas cet article.";
			}
			
		}
		
		
		$req = 'SELECT * from `VR_grp1_Jeux`';
		$req2 = 'select count(*) as nombre_jeux, Nom from `VR_grp1_Jeux`';
		
		if($Genre!=''||$Nom!=''||$Plateforme!=''||$Solo!=0||$Coop!=0||$Multi!=0||$Nom!=''){
			$req = $req.' WHERE';
			$req2 = $req2.' WHERE';
			if($Genre!=''){
				if($cc==0){
					$req = $req.' Genre=\''.$Genre.'\'';
					$req2 = $req2.' Genre=\''.$Genre.'\'';
				}
				else{
					$req = $req.' and Genre=\''.$Genre.'\'';
					$req2 = $req2.' and Genre=\''.$Genre.'\'';
				}
				$cc=1;
			}
			if($Plateforme!=''){
				if($cc==0){
					$req = $req.' Plateforme=\''.$Plateforme.'\'';
					$req2 = $req2.' Plateforme=\''.$Plateforme.'\'';
				}
				else{
					$req = $req.' and Plateforme=\''.$Plateforme.'\'';
					$req2 = $req2.' and Plateforme=\''.$Plateforme.'\'';
				}
				$cc=1;
			}
			if($Solo!=0){
				if($cc==0){
					$req = $req.' Solo=1';
					$req2 = $req2.' Solo=1';
				}
				else{
					$req = $req.' and Solo=1';
					$req2 = $req2.' and Solo=1';
				}
				$cc=1;
			}
			if($Coop!=0){
				if($cc==0){
					$req = $req.' Coop=1';
					$req2 = $req2.' Coop=1';
				}
				else{
					$req = $req.' and Coop=1';
					$req2 = $req2.' and Coop=1';
				}
				$cc=1;
			}
			if($Multi!=0){
				if($cc==0){
					$req = $req.' Multi=1';
					$req2 = $req2.' Multi=1';
				}
				else{
					$req = $req.' and Multi=1';
					$req2 = $req2.' and Multi=1';
				}
				$cc=1;
			}
			if($Nom!=''){
				if($cc==0){
					$req = $req.' Nom=\''.$Nom.'\'';
					$req2 = $req2.' Nom=\''.$Nom.'\'';
				}
				else{
					$req = $req.' and Nom=\''.$Nom.'\'';
					$req2 = $req2.' and Nom=\''.$Nom.'\'';
				}
				$cc=1;	
			}
		}
		 
		echo "<!DOCTYPE html>
				<html>
				<head>
					<title> projet ludothèque Guedouar/Thieulart </title>
					<meta http-equiv=\"Content-Type\" content=\"text/HTML; charset=utf-8\" />
					<link rel=\"stylesheet\" type=\"text/css\" href=\"projet.css\" media=\"screen\" />
				</head>
				<body>
					<div id=\"entete\"> 
						<h1>ludothèque du Mans</h1> 
				</div>
		
				<div>
					<div id=\"menu\">";
			
							include("menu.php");
		echo "				
					</div>
					<div id=\"corps\">";
					
						echo "<h1>Résultat</h1>";
						echo "<p>";
						echo "Votre recherche : ";
						echo 'Jeux '.$Genre.' sur '.$Plateforme.'.<br />';
						echo "</p>";
						
						
						$Reponse=mysql_query($req2) or die(mysql_error());
						$Data=mysql_fetch_assoc($Reponse);
		
						echo '<p> Il y a '.$Data['nombre_jeux'].' jeux de ce type : </p>';
		
						$Reponse=mysql_query($req) or die(mysql_error());
						$Data=mysql_fetch_assoc($Reponse);
		
						while($Data=mysql_fetch_assoc($Reponse)){
							echo '<p class=\"Jeux\">'.$Data['Nom'].'</p>';
						}
						
						
		echo "		</div>
				</div>
			<div id=\"pied\">";
				
					include("pied.php");
		echo "
			</div>		
		</body>
</html> ";
		
		
		
		
		
		
		
		
		
?>
