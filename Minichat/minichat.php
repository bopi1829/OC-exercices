<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Mini chat</title>
</head>
<body>
	<form method = "post" action = "minichat_post.php">
		<p><label>Pseudo</label> : <input type = "text" name = "pseudo"></p>
		<p><label>Message</label> : <input type = "text" name = "message"></p>
		<input type = "submit" value = "Envoyer" name = "Valider">
	</form>

<?php
	// Connexion à la base de données
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test' . ';port=' . 3308, 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die ('Erreur : ' .$e -> getMessage());
	}

	// Récupération des 10 derniers messages
	$reponse = $bdd -> query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 1, 10');
	while ($donnees  = $reponse -> fetch())
	{
		echo '<p><strong>' . $donnees['pseudo'] . '</strong> : ' . $donnees['message'] . '</p>';
	}
	
	$reponse -> closeCursor();

?>

</body>
</html>