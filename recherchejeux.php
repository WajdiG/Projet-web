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
				echo "Nous ne possedons pas cette article.";
			}
			
		}
		
		
		$req = 'SELECT * from `VR_grp1_Jeux`';
		
		if($Genre!=''||$Nom!=''||$Plateforme!=''||$Solo!=0||$Coop!=0||$Multi!=0||$Nom!=''){
			$req = $req.' WHERE';
			if($Genre!=''){
				if($cc==0){
					$req = $req.' Genre=\''.$Genre.'\'';
				}
				else{
					$req = $req.' and Genre=\''.$Genre.'\'';
				}
				$cc=1;
			}
			if($Plateforme!=''){
				if($cc==0){
					$req = $req.' Plateforme=\''.$Plateforme.'\'';
				}
				else{
					$req = $req.' and Plateforme=\''.$Plateforme.'\'';
				}
				$cc=1;
			}
			if($Solo!=0){
				if($cc==0){
					$req = $req.' Solo=1';
				}
				else{
					$req = $req.' and Solo=1';
				}
				$cc=1;
			}
			if($Coop!=0){
				if($cc==0){
					$req = $req.' Coop=1';
				}
				else{
					$req = $req.' and Coop=1';
				}
				$cc=1;
			}
			if($Multi!=0){
				if($cc==0){
					$req = $req.' Multi=1';
				}
				else{
					$req = $req.' and Multi=1';
				}
				$cc=1;
			}
			}
			if($Nom!=''){
				if($cc==0){
					$req = $req.' Nom=\''.$Nom.'\'';
				}
				else{
					$req = $req.' and Nom=\''.$Nom.'\'';
				}
				$cc=1;
			}
		}
		 
		
		echo 'Jeux '.$Genre.' sur '.$Plateforme;
		$nombre='select count(*) as nombre_jeux, Nom from `VR_grp1_Jeux` where Genre=\''.$Genre.'\' and Plateforme=\''.$Plateforme.'\' and Coop='.$Coop.' and Solo='.$Solo.' and Multi='.$Multi.'';
		echo '<br>'.$req;
		
		
		$Reponse=mysql_query($nombre) or die(mysql_error());
		$Data=mysql_fetch_assoc($Reponse);
		
		echo ' Il y a '.$Data['nombre_jeux'].' jeux de ce type : <br />';
		
		$Reponse=mysql_query($req) or die(mysql_error());
		$Data=mysql_fetch_assoc($Reponse);
		echo $Data['Nom'].'<br>';
		
	//}
				
?>
