<?php
	
	function getDatabaseConnexion() {
		try {
    	$bdd = new PDO('mysql:host=localhost;dbname=test' . ';port=' . 3308, 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e){
    	die ('Erreur : ' . $e -> getMessage());
    }
}
	
	function afficherBillet ($id) {
		$con = getDatabaseConnexion();
		$req = $bdd -> query('SELECT titre, contenu, date_creation FROM billets WHERE id = "$id"');
		while ($donnees = $req -> fetch()) {			
		echo '<h3>' . htmlspecialchars($donnees['titre']) . ' <em>le ' . htmlspecialchars($donnees['date_creation']) . '</em></h3>';        
        echo htmlspecialchars($donnees['contenu']) ; 
        
    }
?>