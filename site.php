<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<header>
			<div class="menu">
				<div><a href="connexion.php">Connexion/Inscription</a></div>
			</div>
			<img src="" alt="image_de_fond">
			<br>
			<div>Quelle recherche voulez-vous faire ?</div>
			<br><br>
		</header>

		<main>
			<input type="text" placeholder="Recherche" id="search-bar">
			<button>Soumettre</button>
			<?php
				
				//$user = "root";
				//$pass = '';
				$user = "fievet_";
				$pass = 'WaawHxLr34';

			try {
				$db = new PDO ('mysql:host=mysql-fievet.alwaysdata.net;dbname=fievet_sauvetage', $user, $pass);
				foreach($db->query('SELECT * FROM articles') as $row);
				{
					print_r($row);
				}
			} catch (PDOException $e){
				print "Erreur :" . $e->getMessage() . "<br/>";
				die;
			}

				
			
			?>

		</main>

		<footer>

		</footer>
	</body>
</html>