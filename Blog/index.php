<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Blog</title>
    </head>
    <body>

    <h1>Mon super blog !</h1>
    <p>Derniers billets du blog :</p>

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
    $req = $bdd -> query('SELECT titre, contenu, date_creation FROM billets ORDER BY date_creation DESC');
    while ($donnees = $req -> fetch()) {
        echo '<h3>' . htmlspecialchars($donnees['titre']) . ' <em>le ' . htmlspecialchars($donnees['date_creation']) . '</em></h3>';
        ?>
        <p>
        <?php echo htmlspecialchars($donnees['contenu']) . '<br/>'; ?>
        <em><a href="commentaires.php">Commentaires</a></em>;
        </p>
        <?php

        }

    $req -> closeCursor();
    ?>
   	
   	
    </body>
</html>