<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Blog</title>
    </head>
    <body>

    <h1>Mon super blog !</h1>
    <p>Dix derniers billets du blog :</p>

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
    // Insertion des billets
    $reponse = $bdd -> query('SELECT * FROM billets ORDER BY date_creation DESC LIMIT 0, 10');
    while ($donnees = $reponse -> fetch())
    {
    	echo '<h3>' . $donnees['titre'] . ' le ' . $donnees['date_creation'] . '</h3>';
    	echo '<p>' . $donnees['contenu'] . '</br><a href="commentaires.php">Commentaires</a></p>';    
    }
    ?>
   	</div>  
    </body>
</html>