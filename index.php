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

<body background="img/fond2.jpg">
  <?php include("include/body.php") ?>
</body>

    <section class="container2">
      <div class="item3">
        <h2 class="title3">BIENVENUE CHEZ LASER-GUN ANNECY</h2>
        <p>Ici vous pourrez découvrir une nouvelle expérience de combat avec vos amis tout en respectant les règles de sécurité et sanitaires actuels.</p>
      </div>
         <section class="container3">
          <div class="item4">
            <img src="img/laser.jpg">
            <img src="img/ac2.jpg">
            <img src="img/ac3.jpg">
          </div>
          <div id="dialog" style="display:none">Your non-modal dialog</div>
        </section>
     </section>

     <section class="container5">
        <div id="itemH">
          <H2 id=h>LES HORAIRES</H2>
          <br/>
            <table border="1" cellpadding="5" cellspacing="5" width="70%" class="tableau">
              <tr width=33%>
                <th>Nos horaires ne changent jamais !</th>
              </tr>

              <tr>
                <td><span style="color: #CF4612;"><strong>Lundi</strong></span></td>
                <td><strong>9h à 19h</strong></td>
              </tr>

              <tr>
                <td><span style="color: #CF4612; justify-content: center;"><strong>Mardi</strong></span></td>
                <td style="text-align: center"><strong>9h à 19h</strong></td>
              </tr>

              <tr>
                <td><span style="color: #CF4612;"><strong>Mercredi</strong></span></td>
                <td><strong>9h à 19h</strong></td>
              </tr>

              <tr>
                <td><span style="color: #CF4612;"><strong>Jeudi</strong></span></td>
                <td><strong>9h à 19h</strong></td>
              </tr>

              <tr>
                <td><span style="color: #CF4612;"><strong>Vendredi</strong></span></td>
                <td><strong>9h à 19h</strong></td>
              </tr>

              <tr>
                <td><span style="color: #CF4612;"><strong>Samedi</strong></span></td>
                <td><strong>9h à 19h</strong></td>
              </tr>
            </table>
            <br/>
        </div>

        <div id="itemT">
          <br/>
          <H2>LE TARIFS DES PARTIES</H2>
          <br/>
          <table border="1" cellpadding="5" cellspacing="5" width="70%" class="tableau">
              <tr width=33%>
                <th><span style="color: #CF4612;">LASER GUN NO LIMIT</span></th>
              </tr>

              <tr>
                <td><strong>Première partie</strong></td>
                <td><span style="color: #CF4612;"><strong>10€</strong></span></td>
              </tr>

              <tr>
                <td><strong>Parties suivantes</strong></td>
                <td><span style="color: #CF4612;"><strong>8€</strong></span></td>
              </tr>

              <tr>
                <td><strong>Jeudi & Vendredi soir</br>(3 parties + 1 conso)</strong></td>
                <td><span style="color: #CF4612;"><strong>20€</strong></span></td>
              </tr>

              <tr>
                <td><strong>Samedi matin</br>(3 parties + 1 conso)</strong></td>
                <td><span style="color: #CF4612;"><strong>15€</strong></span></td>
              </tr>

              <tr>
                <td><strong>Samedi après midi</br>(tarif par partie)</strong></td>
                <td><span style="color: #CF4612;"><strong>8€</strong></span></td>
              </tr>

              <tr>
                <td><strong>Samedi soir</br>(tarif par partie + 1 conso)</strong></td>
                <td><span style="color: #CF4612;"><strong>7€</strong></span></td>
              </tr>
            </table>
            <br/>
        </div>   

     </section>
      <section class="container5">
        <div id="item10">
          <H2>Le jeu :</H2>
          <p>
            Le Laser Game se joue entre 2 ou 3 unités pendant une durée de 20 minutes. Le but est de marquer le maximum de points en tirant sur les plastrons lumineux des joueurs adverses. Le terrain de jeu est généralement obscur et aménagé sur différents niveaux. Il est également jonché de pièges pour pimenter le jeu : miroirs, brouillard ou grenades.
          </p>
          <H2>Les règles :</H2>
          <p>
             Interdiction de faire du corps à corps
            – Interdiction de pourchasser un adversaire après l'avoir deja tué
            – Interdiction de cacher son pointeur
          </p>
        </div>


        
      </section>

      <section class="container">
      
        <div class="item6">
          <a href="armes_et_maps.php"><h2 class="title">Voir les armes, équipes et maps en détails</h2></a>
        </div>  
      </section>
  
      <section class="containerD">
        <div class="itemD" style="background-color: grey;">
          Résultats de la derniere partie :
        </div> 
        </br> 
        <div class="itemD">
           <a id=download href="../upload/Arrière plan R6.jpg"
           download="../upload/score.jpg"><img src="../upload/score.jpg"></a>
        </div>
        </br>
        <div class="itemD">
          <a id=download href="../upload/score.jpg"
           download="../upload/score.jpg">Télécharger les resultats 
         </a>
        </div>  
      </section>

  </main>


  <?php include("include/footer.php") ?>

</html>

