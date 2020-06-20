<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Minichat Post</title>
</head>
<body>

<?php
// 	Connection à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test' .';port=' . 3308, 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
	die('Erreur : '. $e ->getMessage());
}

?>

</body>
</html>