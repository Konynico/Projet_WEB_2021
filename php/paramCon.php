<?php // information sur les parametres de connexion a la base de données
//----------------------------------------------------
  // Mettre ci-dessous votre login bdd:
$user="rt1projet2";
 // Mettre ci-dessous votre mot de passe bdd
$pass="KPQ3cr";
// Mettre ci-dessous le nom de votre base
$dbname="rt1projet2";
// Mettre ci-dessous le nom du host (depend du serveur). Si le serveur web se trouve sur la même machine que le serveur web, la valeur sera "localhost".
$lehost="srv-prj-new";
// Mettre ci-dessous le nom du port (depend de la config du serveur). Généralement 5432.
$leport="5432";

//$dsn='pgsql:host='.$lehost.';dbname='.$dbname;
$dsn='pgsql:host='.$lehost.';dbname='.$dbname.';port='.$leport;


// connexion à la bdd (connexion non persistante)
 ?>