<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Blog</title>
    </head>
    <body>
        <h1>Mon super blog !</h1>
        <p><a href = "index.php">Retour à la liste des billets</a></p>

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
        
        // Récupération du billet
        $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?');
        $req->execute(array($_GET['billet']));
        $donnees = $req->fetch();
        ?>

        <div class="news">
            <h3>
                <?php echo htmlspecialchars($donnees['titre']); ?>
                <em> le <?php echo $donnees['date_creation_fr']; ?></em>
            </h3>
            <p>
            <?php echo nl2br(htmlspecialchars($donnees['contenu'])); ?></p>
        </div>

        <h2>Commentaires</h2>
        <?php
        $req->closeCursor();
        ?>
    </body>
</html>