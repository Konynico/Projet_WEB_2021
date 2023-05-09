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

<body background="../img/fond2.jpg">>
  <?php include("../include/bodyphp.php") ?>
</body>

  <?php
    require_once("../php/connexion.php");
    $conn1=connexionBDD();

    require_once("../php/fonctionBDD.php");

    include("../include/menuadmin.php")

  ?>

  <?php
/* MODIF NOM CLIENT */
  if (@$_GET['P_modifNom'] != null) {
    $id_client = $_GET['P_idClient'];
    $nom_client = $_GET['P_modifNom'];

    modifierNomClient($nom_client, $id_client, $conn1);
  }

  else {
    $local_nb = 0;
  
  }

/* MODIF PRENOM CLIENT */
    if (@$_GET['P_modifPrenom'] != null) {
      $prenom_client = $_GET['P_modifPrenom'];
      $id_client = $_GET['P_idClient'];

      modifierPrenomClient($prenom_client, $id_client, $conn1);
    }

    else {
      $local_nb = 0;
  
    }

/* MODIF NUM CLIENT */
    if (@$_GET['P_modifNum'] != null) {
      $num_client = $_GET['P_modifNum'];
      $id_client = $_GET['P_idClient'];

      modifierPrenomClient($num_client, $id_client, $conn1);
    }

    else {
      $local_nb = 0;
  
    }
  ?>

<section class="containerS">
  <div class="itemS">
    <H2>Modifier les informations du client :</H2>
    <br/>
      <form action = "#" method = "GET">
        <tr>
          <td>Tapez l'<strong><span style="color: #CF4612;">ID</span></strong> du client recherché : &nbsp&nbsp</td>
          <td> <input type="text" size=20 name="P_idClient" placeholder="ID du client" required>
          </td>
        </tr>
        <br/>

        <tr>
          <td>Tapez le <strong><span style="color: #CF4612;">nom</span></strong> du client  : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
          <td> <input type="text" size=20 name="P_modifNom" placeholder="Nom du client" pattern="\D[A-Z]{1,20}$" title="Lettres uniquement, en majuscule, 2 minimum">
          </td>
        </tr>
        <br/>

        <tr>
          <td>Nouveau <strong><span style="color: #CF4612;">prénom</span></strong> client : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
          <td><input size=20 name="P_modifPrenom" placeholder="Prenom client"></td>
        </tr>
        <br/>

        <tr>
          <td>Nouveau <strong><span style="color: #CF4612;">téléphone</span></strong> client : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
          <td><input size=20 name="P_modifNum" placeholder="Numéro téléphone" pattern="^0[1-9]([0-9]{2}){4}$" title="Chiffres uniquement, pas d'espace 10 requis"></td>
        </tr>
        <br/>
        <input class="bouton" type="submit" value="Modification informations">
      </form>

      <br/>
      <br/>
      <br/>

<?php

/* MODIF DATE RESERVATION */
    if (@$_GET['P_modifDate'] != null) {
      $date_res = $_GET['P_modifDate'];
      $id_res = $_GET['P_idRes'];

      modifierDateRes($date_res, $id_res, $conn1);
    }

    else {
      $local_nb = 0;
  
    }


/* MODIF HORAIRE RESERVATION */
    if (@$_GET['idhoraire'] != null) {
      $horaire_res = $_GET['idhoraire'];
      $id_res = $_GET['P_idRes'];

      modifierHoraireRes($horaire_res, $id_res, $conn1);
    }

    else {
      $local_nb = 0;
  
    }


/* MODIF MAP RESERVATION */
    if (@$_GET['idmaps'] != null) {
      $map_res = $_GET['idmaps'];
      $id_res = $_GET['P_idRes'];

      modifierMapRes($map_res, $id_res, $conn1);
    }

    else {
      $local_nb = 0;
  
    }


/* MODIF NB JOUEUR RESERVATION */
    if (@$_GET['P_modifNbJoueur'] != null) {
      $nbjoueur_res = $_GET['P_modifNbJoueur'];
      $id_res = $_GET['P_idRes'];

      modifierNbJoueur($nbjoueur_res, $id_res, $conn1);
    }

    else {
      $local_nb = 0;
  
    }


/* SUPPR RES */
    if (isset($_GET['P_idRes2'])) {
      $id_res2 = $_GET['P_idRes2'];

      supprimerRes($id_res2, $conn1);
    }

    else {
      $local_nb = 0;
  
    }

  ?>

      <H2>Modifier la réservation du client :</H2>
      <br/>
      <form action = "#" method = "GET">
        <tr>
          <td>Mettre la <strong><span style="color: #CF4612;">réservation</span></strong> du client : &nbsp&nbsp</td>
          <td><input size=20 name="P_idRes" placeholder="ID de réservation" required></td>
        </tr>
        <br/>

        <tr>
          <td>Nouvelle <strong><span style="color: #CF4612;">date</span></strong> réservation : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
          <td><input size=20 name="P_modifDate" placeholder="Nouvelle date" pattern="^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$" title="Attention écrire sous la forme jj/mm/aaaa ou jj-mm-aaaa"></td>
        </tr>
        <br/>

         <tr>
              <td>Nouvel <strong><span style="color: #CF4612;">horaire</span></strong> réservation : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                <?php
                            
                $res=listehoraires($conn1);
                $resu = $res->fetchAll(); // on récupère le tout dans un tableau. Dans le tableau résultat, la 1ère ligne est associée à chaque ligne qui suit.
    
                // fabrication de lliste déroulante (balise SELECT) à partir des clients (infos issues de la bdd)
                print( '<select name="idhoraire">'); // envoyé comme paramètre dans le formulaire
                foreach ($resu as $ligne) {
                        print( '<option value="'.$ligne["idhoraires"].'">'.$ligne["horaire"].'</option>'); // pour créer chaque ligne de choix
                }
                print( "</select>");
                ?> 
              </td>
          </tr>
          <br/>

        <tr>
          <td>Nouvelle <strong><span style="color: #CF4612;">map</span></strong> sélectionnée : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
          <td>
            <?php
                            
                $res=listemaps($conn1);
                $resu = $res->fetchAll(); // on récupère le tout dans un tableau. Dans le tableau résultat, la 1ère ligne est associée à chaque ligne qui suit.
    
                // fabrication de lliste déroulante (balise SELECT) à partir des clients (infos issues de la bdd)
                print( '<select name="idmaps">'); // envoyé comme paramètre dans le formulaire
                foreach ($resu as $ligne) {
                        print( '<option value="'.$ligne["idmaps"].'">'.$ligne["nommaps"].'</option>'); // pour créer chaque ligne de choix
                }
                print( "</select>");
            ?> 
          </td>
        </tr>
        <br/>

        <tr>
          <td>Nouveau nombre <strong><span style="color: #CF4612;">joueurs</span></strong> : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
          <td><input size=20 name="P_modifNbJoueur" placeholder="Nombre joueurs" pattern="^([2-9]|[1][0-9]|2[0-4])$" title="Seulement un chiffre entre 2-24"></td>
        </tr>
        <br/>

        <input class="bouton" type="submit" value="Modification réservation">
      </form>

      <br/>
      <br/>
      <br/>

  <H2>Supprimer une réservation du client :</H2>
  <h4>⚠️Attention : la suppression de la réservation est <span style="color: #CF4612;">irréversible</span>⚠️</h4>
      <br/>
      <form action = "#" method = "GET">
        <tr>
          <td>Mettre la <strong><span style="color: #CF4612;">réservation</span></strong> du client : &nbsp&nbsp</td>
          <td><input size=20 name="P_idRes2" placeholder="ID de réservation" required></td>
        </tr>
        <br/>

        <input class="bouton" type="submit" value="Supprimer la réservation">
      </form>
      <br/>
  </div>

</section>

<br/>
<br/>

</main>
<?php include("../include/footerphp.php") ?>
</body>
</html>
