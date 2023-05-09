<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <title>Site Laser Gun</title>

  <link rel="stylesheet" href="style.css">
</head>

<body background="img/fond2.jpg">>
  <?php include("include/body2.php") ?>
</body>

 <section class="containerS">
        <div class="itemS">
          <H2>Creation de votre compte client :</H2>
          <form action = "php/enregistreNouveauClient.php" method = "GET">
            <tr>
              <td> Nom : </td>
              <td> <input type="text" size=20 name="P_nomClient" placeholder="Nom en majuscule" 
                pattern="\D[A-Z]{1,20}$" title="Lettres uniquement, en majuscule, 2 minimum" required> </td>
            </tr>   
            <tr>
              <td> Prénom : </td>
              <td> <input type="text" size=20 name="P_prenomClient" placeholder="Prénom en minuscule" pattern="\D{1,20}$" title="Caractères uniquement, 1 minimum" required> </td>
            </tr>
            <tr>
              <td> Votre adresse Email : </td>
              <td> <input type="text" size=20 name="P_mailClient" placeholder="Email @yyy.zzz" pattern="^[\S\w]+@[\S\w]{2,}\.[a-z]{2,4}$" title="Caractères et chiffres, pas d'espace, contient @yyy.zzz" required> </td>  <!-- [pas d'espace, chiffres ou lettres] + @[pareil]{2 min} .[n'importe quelle lettre]{entre 2 et 4}-->
            </tr>
            <tr>
              <td> Votre numéro de téléphone : </td>
              <td> <input type="text" size=20 name="P_telephoneClient" placeholder="Numéro de téléphone." pattern="^0[1-9]([0-9]{2}){4}$" title="Chiffres uniquement, pas d'espace 10 requis" required> </td>
            </tr>
            </br>
            </br>
            <tr>
              <td> Votre mot de passe : </td>
              <td> <input type="password" size=20 name="P_mdp" placeholder="Tapez votre mot de passe" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,20}$" title="1 majuscule, 2 chiffres minium, 6 caractères minium" required> </td>
            </tr> 
            </br>  
            <tr>
              <td></td>
              <td> <input class=bouton type="submit" value="Créer mon compte client"></td>
            </tr>
          </form>
        </br>
        </div>
      </section>

      <section class="container5">
        <div class="item5">
          <H2>Vous avez deja un compte client et vous voulez voir ou faire une reservations :</H2>
          </br>
          <form action = "php/voirres.php" method = "GET">
          Votre addresse mail : <input type="text" size=20 name="P_mailClientEnregistré" placeholder="Email @yyy.zzz" pattern="^[\S\w]+@[\S\w]{2,}\.[a-z]{2,4}$" title="Caractères et chiffres, pas d'espace, contient @yyy.zzz" required>
          Votre mot de passe : <input type="password" size=20 name="P_mdpClientEnregistré" placeholder="Tapez votre mot de passe" required>
          </br>
          <input class="bouton" type="submit" value="Voir vos reservations">
        </div>
        </form>
      </section>

      <section class="container5">
        <div class="item7">
          <H2>Accès réservé aux administrateurs</H2>
          </br>
          <form action="admin/admin.php" method="post">
          Login : <input type="text" size=20 name="P_loginAdmin" placeholder="Login administrateur" title="ESPACE RÉSERVÉ AUX ADMISTRATEURS" required>
          Mot de passe : <input type="password" size=20 name="P_mdpAdmin" placeholder="Mot de passe" required>
          </br>
          <input name="bouton" class="bouton" type="submit" value="Page d'administration">

          <p>
              <?php
                if (isset($_SESSION['message']))
                  {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                  }

              ?>
          </p>

        </div>
        </form>
      </section>

<?php include("include/footer.php") ?>

  </main>
</body>
</html>