<?php

		$server="info.univ-lemans.fr";
		$bdd="info201a";
		$table="VR_grp1_Jeux";
		$user="info201a_user";
		$mdp="com72";
		
		//cc est un compteur utiliser pour la construction des resquetes sql
		$cc=0;
		
		$Nom=$_POST["Nom"];
		$Genre=$_POST["Genre"];
		$Plateforme=$_POST["Plateforme"];
		$Solo=$_POST["Solo"];
		$Coop=$_POST["Coop"];
		$Multi=$_POST["Multi"];		
		$Age=$_POST["age"];			
		$LienBase=mysql_connect($server,$user,$mdp);
		$retour=mysql_select_db($bdd,$LienBase);
		
		//convertit la valeur des variables en int pour le traitement dans la BDD
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
		
		
		$req = 'SELECT * from `VR_grp1_Jeux`';
		$req2 = 'select count(*) as nombre_jeux, Nom from `VR_grp1_Jeux`';
		
		/*construction de la requete SQL en fonction des demandes de l'utilisateur
		 *$cc est ici utiliser pour la présence du and dans la requete sql, si cc=0, on ajoute la commande et cc devient > 0. Sinon, on ajoute la commande preceder du and.
		 */
		
		if($Genre!=''||$Nom!=''||$Plateforme!=''||$Solo!=0||$Coop!=0||$Multi!=0||$Nom!=''||$Age!=0){
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
			if($Age!=0){
				if($cc==0){
					if($Age==3){
						$req = $req.' Age=3';
						$req2 = $req2.' Age=3';
					}
					else if($Age==7){
						$req = $req.' Age=7';
						$req2 = $req2.' Age=7';
					}
					else if($Age==12){
						$req = $req.' Age=12';
						$req2 = $req2.' Age=12';
					}
					else if($Age==16){
						$req = $req.' Age=16';
						$req2 = $req2.' Age=16';
					}
					else if($Age==18){
						$req = $req.' Age=18';
						$req2 = $req2.' Age=18';
					}
				}
				else{
					if($Age==3){
						$req = $req.' and Age=3';
						$req2 = $req2.' and Age=3';
					}
					else if($Age==7){
						$req = $req.' and Age=7';
						$req2 = $req2.' and Age=7';
					}
					else if($Age==12){
						$req = $req.' and Age=12';
						$req2 = $req2.' and Age=12';
					}else if($Age==16){
						$req = $req.' and Age=16';
						$req2 = $req2.' and Age=16';
					}
					else if($Age==18){
						$req = $req.' and Age=18';
						$req2 = $req2.' and Age=18';
					}
				}
				$cc=1;	
			}
		}
		
		//affichage de la page html 
		 
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
					
					//affichage du resultat de la requete
						echo "<h1>Résultat</h1>";
						echo "<p>";
						echo "Votre recherche : ";
						if($Genre!=''){
							echo 'Jeux '.$Genre;
						}
						if($Plateforme!=''){
							echo ' sur '.$Plateforme;
						}
						if($Solo!=0||$Coop!=0||$Multi!=0){
							if($Solo!=0){
								echo ' en Solo';
								if($Coop!=0){
									echo ', Coop';
								}
								if($Multi!=0){
									echo ', Multi';
								}
							}
							else if($Coop!=0){
								echo ' en Coop';
								if($Solo!=0){
									echo ', Solo';
								}
								if($Multi!=0){
									echo ', Multi';
								}
							}
							else if($Multi!=0){
								echo ' en Multi';
								if($Solo!=0){
									echo ', Solo';
								}
								if($Coop!=0){
									echo ', Coop';
								}
							}
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
						if($Age!=0){
							echo ' à partir de '.$Age.' ans'	;
						}
						
						echo '<br />';
						echo "</p>";
						
						
						
						
						$Reponse=mysql_query($req2) or die(mysql_error());
						$Data=mysql_fetch_assoc($Reponse);
		
						echo '<p> Il y a '.$Data['nombre_jeux'].' jeux de ce type : </p>';
						
						if($Data['nombre_jeux']==0){
							echo 'Aucun article correspondant';
						}
		
						$Reponse=mysql_query($req) or die(mysql_error());
						
		
						while($Data=mysql_fetch_assoc($Reponse)){
							echo '<p class=\"Jeux\">'.$Data['Nom'].'<br />';
							if($Age==0){
								echo 'Â partir de : '.$Data['Age'].' ans <br />';
							}
							
							if($Plateforme==''){
								echo 'Sur : '.$Data['Plateforme'].'<br />';
							}
							if($Genre==''){
								echo 'Genre : '.$Data['Genre'].'<br />';
							}
							if($Solo==0&&$Coop==0&&$Multi==0){
								echo 'Joueur : ';
								if($Data['Solo']==1){
									echo ' en Solo';
									if($Data['Coop']==1){
										echo ', Coop';
									}
									if($Data['Multi']==1){
										echo ', Multi';
									}
								}
								else if($Data['Coop']==1){
									echo ' en Coop';
									if($Data['Solo']==1){
										echo ', Solo';
									}
									if($Data['Multi']==1){
										echo ', Multi';
									}
								}
								else if($Data['Multi']==1){
									echo ' en Multi';
									if($Data['Solo']==1){
										echo ', Solo';
									}
									if($Data['Coop']==1){
										echo ', Coop';
									}
								}
								echo '<br />';
							}
							
							echo 'Quantité en stock : '.$Data['NbJeuxStock'].'<br />';
							echo '</p>';
							echo'<form method="get" action="ajouter.php">
									Ajouter <input type=\'submit\' name=\'add\' value=\''.$Data['Nom'].'\'/> au panier	
								</form>'; 
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
