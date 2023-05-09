<?php
function connexionBDD() {

	include("paramCon.php");
	//$dsn='pgsql:host='.$lehost.';dbname='.$dbname;
	$dsn='pgsql:host='.$lehost.';dbname='.$dbname.';port='.$leport;
	
	try {
		$connex = new PDO($dsn, $user, $pass); // tentative de connexion
		print "";
	
	} catch (PDOException $e) {
		print "Erreur de connexion à la base de données ! : " . $e->getMessage();
		die(); // Arrêt du script - sortie.
	}
	return $connex;

}

function deconnexionBDD($connex) {
	$connex = null; // fermeture de connexion // fermeture de la connexion a la base de donnees (même si demande de connexion persistante).
    }





?>