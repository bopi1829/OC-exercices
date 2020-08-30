<?php
// Connexion à la BDD
try {
	$db = new PDO('mysql:host=localhost;dbname=test' . ';port=' . 3308, 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e) {
	die ('Erreur : ' . $e->getMessage());
}

// Inscription des nouveaux memebres
function newMember() {
	$req = $db->prepare('INSERT INTO members(pseudo, paswword, mail, register_date) VALUES (?, ?, ?, NOW())');
}