<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Commentaires</title>
    </head>
    <body>

    	<h1>Mon super blog !</h1>
    	<a href="index.php">Retour à la liste des billets</a>

    	<?php
    	// Connexion à la base de données
    	try
    {
    	$bdd = new PDO('mysql:host=localhost;dbname=test' . ';port=' . 3308, 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
    	die ('Erreur : ' . $e -> getMessage());
    }
    ?>

    <div class="news">

   <?php
    // Affichage du billet et de ses commentaires


   	?>
   </div>
    	
    </body>
</html>