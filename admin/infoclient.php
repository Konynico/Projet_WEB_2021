<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <title>Site Laser Gun</title>

  <link rel="stylesheet" href="..\style.css">
</head>

<body background="../img/fond2.jpg">  
  <?php include("../include/bodyphp.php") ?>
</body>
<main>

<?php
require_once("../php/fonctionBDD.php");
    require_once("../php/connexion.php");
    $conn1=connexionBDD(); 

include("../include/menuadmin.php");

if (isset($_GET['P_mailClient']) and ($_GET['P_mailClient'] != null)) {
    $mail_client = $_GET['P_mailClient'];
    $id_client=trouveridclientv2($mail_client, $conn1);
    $id_clientV2 = (int)$id_client;
    info($id_clientV2, $conn1);
    reservation($id_clientV2);   
  }

  else {
    $local_nb = 0;
  
  }

  if (isset($_GET['P_idRes']) and (@$_GET['P_idRes'] != null)) {
    $id_res = $_GET['P_idRes'];
    $id_resV2 = (int)$id_res;
    reservationSup($id_resV2);   
  }



 ?> 

<section class="containerS">
  <div class="itemS">
    <H2>Rechercher un client :</H2>
      <form action = "#" method = "GET">
        <tr>
          <td>Tapez l'@email du client recherché : </td>
          <td> <input type="text" size=20 name="P_mailClient" placeholder="Email @yyy.zzz" pattern="^[\S\w]+@[\S\w]{2,}\.[a-z]{2,4}$" title="Caractères et chiffres, pas d'espace, contient @yyy.zzz" required>
          </td>
        </tr>
        <input class="bouton" type="submit" value="Lancer la recherche">
        <br/>
        <br/>
      </form>
  </div>
</section>

<section class="containerS">
  <div class="itemS">
    <H2>Rechercher un client :</H2>
      <form action = "#" method = "GET">
        <tr>
          <td>Tapez l'ID de la réservation recherchée : </td>
          <td> <input type="text" size=20 name="P_idRes" placeholder="ID de réservation" title="rentrer un id valide" required>
          </td>
        </tr>
        <input class="bouton" type="submit" value="Lancer la recherche">
        <br/>
        <br/>
      </form>
  </div>
</section>

<br/>
<br/>

  </main>
<?php include("../include/footerphp.php") ?>
</body>
</html>
