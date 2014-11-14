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
			
			<form method="post" action="traitement.php">
			
				<label for="plateforme">Sur quel plateforme souhaitez-vous jouer ?</label>
				<select name="console" id="plateforme">
					<option value="PC">PC</option>
					<option value="Xbox 360">Xbox 360</option>
					<option value="Xbox One">Xbox One</option>
					<option value="Playstation 3">Playstation 3</option>
					<option value="Playstation 4">Playstation 4</option>
					<option value="PSP - PSP GO">PSP - PSP GO</option>
					<option value="Playstation Vita">Playstation Vita</option>
					<option value="Nitendo Wii">Nitendo Wii</option>
					<option value="Nitendo Wii U">Nitendo Wii U</option>
					<option value="Nitendo DS">Nitendo DS</option>
					<option value="Nitendo 3DS">Nitendo 3DS</option>
				</select>
				<br /><br />
				<label for="genre">Â quel genre de jeu souhaitez-vous jouer ?</label>
				<select name="genre" id="genre">
					<option value="Autres">Autres</option>
					<option value="Action">Action</option>
					<option value="Aventure">Aventure</option>
					<option value="Plateforme/Tableau">Plateforme/Tableau</option>
					<option value="Educatif">Educatif</option>
					<option value="Music-Dance">Music-Dance</option>
					<option value="Puzzle">Puzzle</option>
					<option value="Course">Course</option>
					<option value="RPG">RPG</option>
					<option value="Sport">Sport</option>
					<option value="Simulation">Simulation</option>
					<option value="Stratégie">Stratégie</option>
				</select>
				<br /><br />
				<input type="checkbox" name="nb" /><label for="nb">Solo</label>
				<input type="checkbox" name="nb1" /><label for="nb1">Coop</label>
				<input type="checkbox" name="nb2" /><label for="nb2">Multi</label>
				<br /><br />
				<input type="radio" name="age" /><label for="age">3 ans</label>
				<input type="radio" name="age" /><label for="age">7 ans</label>
				<input type="radio" name="age" /><label for="age">12 ans</label>
				<input type="radio" name="age" /><label for="age">16 ans</label>
				<input type="radio" name="age" /><label for="age">18 ans</label>
				<br /><br />
			</form>

			
			
		</div>
		<div id="pied">
			<?php
				include("pied.php");
			?>
		</div>	
		
	</body>
</html>

