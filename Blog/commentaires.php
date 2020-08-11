<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
	<title>Blog</title>
</head>
    <body>
        <h1>Mon super blog !</h1>
        <?php
        // Connexion à la BDD
        try 
        {
        $bdd = new PDO('mysql:host=localhost;dbname=test' . ';port=' . 3308, 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } 
        catch (Exception $e) 
        {
        die ('Erreur : ' .$e -> getMessage());
        }
        
        ?>
    </body>
</html>