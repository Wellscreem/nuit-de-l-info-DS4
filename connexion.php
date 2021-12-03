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
				<div><a href="site.php">Recherche</a></div>
        </div>
        </header>
        <main>
            <div>
                <p>Inscription</p>
                <input type="email" id="mail" placeholder="exemple.example@email.com" required>
                <input type="password" id="pwd" required>
                <br>
                <label>J'accepte les conditions générales d'utilisation</label>
                <input type="checkbox" class="box" required>
                <br>
                <button>S'inscrire</button>
            </div>

            <div>
                <p>Connexion</p>
                <input type="email" id="user_mail" placeholder="exemple.example@email.com" required>
                <br>
                <input type="password" id="user-pwd" required>
                <br>
                <label>Rester connecté</label>
                <input type="checkbox" class="box" required>
                <br>
                <button>Se connecter</button>
            </div>
        </main>
        <footer>

        </footer>
    </body>

</html>