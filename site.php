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
				$servername = "https://phpmyadmin.alwaysdata.com/";
				$username = "fievet_";
				$password = "WaawHxLr34";

				// Create connection
				$conn = new mysqli($servername, $username, $password);
				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}
			
				$conn->close();
			?>

		</main>

		<footer>

		</footer>
	</body>
</html>