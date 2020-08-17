<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Espace Membres</title>

</head>
    <body>

        <h1>Inscription</h1>

        <form action="controller.php" method="post">
            <div class="container">
                <div class="pseudo">
                    <p>
                        <label for="pseudo"><b>Pseudo : </b></label>
                        <input type="text" name="pseudo" placeholder="Votre pseudo" required>
                    </p>
                </div>

                <div class="psw">
                    <p>
                        <label for="psw"><b>Mot de passe : </b></label>
                        <input type="password" name="psw" placeholder="Votre mot de passe" required>
                    </p>

                    <p>
                        <label for="psw-repeat"><b>Retapez votre mot de passe : </b></label>
                        <input type="password" name="psw-repeat" placeholder="Saisissez à nouveau votre mot de passe" required>
                    </p>
                </div>

                <div class="mail">
                    <p>
                        <label for="mail"><b>Adresse email : </b></label>
                        <input type="text" name="mail" placeholder="Votre adresse email" required>
                    </p>
                </div>

                <div class="signupbtn">
                    <button type="button" class="signupbtn">S'inscrire</button>
                </div>
            </div>
        </form>

    </body>
</html>