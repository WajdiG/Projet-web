<!DOCTYPE html>
<html>
	<head>
		<title> jeux </title>
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
			<h1 class="titre">Nos Jeux</h1>
			
			<form method="post" action="recherchejeux.php">
				
				Nom : <input name="Nom" size="50px"/><br /><br />
			
				<label for="Plateforme">Sur quel plateforme souhaitez-vous jouer ?</label>
				<select name="Plateforme" id="plateforme">
					<option value=""></option>
					<option value="PC">PC</option>
					<option value="Xbox 360">Xbox 360</option>
					<option value="Xbox One">Xbox One</option>
					<option value="Playstation 3">Playstation 3</option>
					<option value="Playstation 4">Playstation 4</option>
					<option value="PSP - PSP GO">PSP - PSP GO</option>
					<option value="Playstation Vita">Playstation Vita</option>
					<option value="Nintendo Wii">Nintendo Wii</option>
					<option value="Nintendo Wii U">Nintendo Wii U</option>
					<option value="Nintendo DS">Nintendo DS</option>
					<option value="Nintendo 3DS">Nintendo 3DS</option>
				</select>
				<br /><br />
				<label for="Genre">Â quel genre de jeu souhaitez-vous jouer ?</label>
				<select name="Genre" id="Genre">
					<option value=""></option>
					<option value="Autres">Autres</option>
					<option value="Action">Action</option>
					<option value="Aventure">Aventure</option>
					<option value="Plateforme/Tableau">Plateforme/Tableau</option>
					<option value="Educatif">Educatif</option>
					<option value="Infiltration">Infiltration</option>
					<option value="Music-Dance">Music-Dance</option>
					<option value="Puzzle">Puzzle</option>
					<option value="Course">Course</option>
					<option value="RPG">RPG</option>
					<option value="Sport">Sport</option>
					<option value="Simulation">Simulation</option>
					<option value="Stratégie">Stratégie</option>
					<option value="Tir">Tir</option>
				</select>
				<br /><br />
				<input type="checkbox" name="Solo" /><label for="nb">Solo</label>
				<input type="checkbox" name="Coop" /><label for="nb1">Coop</label>
				<input type="checkbox" name="Multi" /><label for="nb2">Multi</label>
				<br /><br />
				<input type="radio" name="age" value="3" /><label for="age">3 ans</label>
				<input type="radio" name="age" value="7"/><label for="age">7 ans</label>
				<input type="radio" name="age" value="12"/><label for="age">12 ans</label>
				<input type="radio" name="age" value="16"/><label for="age">16 ans</label>
				<input type="radio" name="age" value="18"/><label for="age">18 ans</label>
				<br /><br />
				
				<input type="submit" value="Confirmer" name="Confirmer" />
				
			</form>

			
			
		</div>
		<div id="pied">
			<?php
				include("pied.php");
			?>
		</div>	
		
	</body>
</html>

