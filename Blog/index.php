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

    //Affichage des billets
    $req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');
    while ($donnees = $req->fetch())
    {
    ?>
    <div class="news">
        <h3>
            <?php echo htmlspecialchars($donnees['titre']); ?>
            <em>le <?php echo $donnees['date_creation_fr']; ?></em>
        </h3>

        <p>
            <?php echo nl2br(htmlspecialchars($donnees['contenu'])); ?>
            <br/>
            <em><a href="commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
        </p>
    </div>
    <?php
    }
    $req->closeCursor();
    ?>
    </body>
</html>