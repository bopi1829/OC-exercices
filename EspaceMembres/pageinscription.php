<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Espace Membres</title>
</head>
    <body>
        <div id="container">         
            <form action="verification.php" method="POST">
                <h1>Inscription</h1>
                
                <label><b>Pseudo</b></label>
                <input type="text" placeholder="Entrer votre pseudo" name="pseudo" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer votre mot de passe" name="password" required>

                <label><b>E-Mail</b></label>
                <input type="text" placeholder="Entrer votre e-mail" name="mail" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>