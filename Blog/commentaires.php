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
    // Affichage d'un billet

   $req = $bdd -> query('SELECT titre, contenu, date_creation FROM billets');
   $donnees = $req -> fetch(); {
        echo '<h3>' . htmlspecialchars($donnees['titre']) . ' <em>le ' . htmlspecialchars($donnees['date_creation']) . '</em></h3>'; ?>
        <p>
        <?php echo htmlspecialchars($donnees['contenu']) . '<br/>'; ?>
        </p>
    <?php
    $req -> closeCursor();
}
?>
    </div>

    <div class="commentaires">
    <p style="font-weight: bold;
    font-size: 1.2em;">Commentaires</p>
    </div>

    <?php
    // Affichage des commentaires du billet

    $req = $bdd -> query('SELECT auteur, commentaire, date_commentaire FROM commentaires ORDER BY date_commentaire DESC');
    while ($donnees = $req -> fetch())
    {
        ?>
        <p><strong><?php echo $donnees['auteur'] ?></strong> le <?php echo $donnees['date_commentaire'] ?> </p>
        <p><?php echo $donnees['commentaire'] ?></p>
    <?php
    $req -> closeCursor();
    }

    ?>
    	
</body>
</html>