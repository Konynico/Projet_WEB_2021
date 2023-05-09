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

    // on récupère les paramètres (elles sont dans un tableau sur le serveur) et on crée une nouvelle variable pour les appeler ultérieurement 
    //(cette opération n'est pas obligatoire - on peut accéder par la suite à la variable par le tableau 
    // on préfère pour des raisons de clareté de code copier la variable du tableau dans une variable (php)
    $local_mail=($_GET["P_mailClient"]);
  ?>

<section class="container5">
  <div id="itemH">
    </br>
    <H2 id=h>La(es) réservation(s) :</H2>

    <table border="1" cellpadding="5" cellspacing="5" width="80%" class="tableau">
              <tr width=33%>
                <th><span></span></th>
                <th><span>ID du client</span></th>
                <th><span>@Email du client</span></th>
                <th><span>Numéro de téléphone du client</span></th>
                <th><span>ID de réservation</span></th>
                <th><span>Date de réservation</span></th>
                <th><span>Map sélectionnée</span></th>
                <th><span>Nombre joueurs</span></th>
                <th><span>Nombre d'équipes</span></th>
              </tr>

              <tr>
                <td>
                  <strong>
                  
                 	<?php
                		$res=trouveridclientv2($conn1,$local_mail);
                		$resu = $res->fetchAll(); // on r�cup�re le tout dans un tableau. Dans le tableau r�sultat, la 1�re ligne est associ�e � chaque ligne qui suit.
				
						        // Debut code pour affichage du resultat :
						        //====================================================================
						        afficheTableau($resu);  // utilisation d'une fonction permettant d'afficher un r�sutlat de requ�te apr�s un fetchall. Cette fonction est d�finie dans fonctionSys.php
                
                		/*
                		foreach ($resu as $ligne) { // pour chaque ligne du tableau globale 2D (une ligne est vue comme un tableau 1D)
						        echo "<tr>";
                    foreach ($ligne as $x) echo '<td>'.$x.'</td>'; 
                    echo "</tr>";
						        }
                		*/
                
						        // fin code affichage du r�sultat
						        //====================================================================
						        deconnexionBDD($conn1); // fermeture de la connexion $conn1 
             		 ?>

                  </strong>
                </td>

                <td>
                  <span style="color: #CF4612;">
                    <strong>

                    <?php
                      $local_id= @trouveridclient($local_adresse ,$local_mdp, $conn1 ) ;
                      echo "" .$local_id."";
                    ?>

                    </strong>
                  </span>
                </td> <! -- var2 -->

                <td><span style="color: #CF4612;"><strong>10€</strong></span></td> <! -- var3 -->
                <td><span style="color: #CF4612;"><strong>10€</strong></span></td> <! -- vrar4 -->

                <td>
                  <span style="color: #CF4612;">
                    <strong>

                      <?php
                      foreach ($local_resu as $ligne) {
                        $var5=$ligne["idreservation"];

                        echo "string";
                        echo $var;
                        echo "string";

                        }
                      ?>
                  
                    </strong>
                  </span>
                </td>

                <td>
                  <span style="color: #CF4612;">
                    <strong>

                      <?php
                        foreach ($local_resu as $ligne) {
                          $var2=$ligne["idreservation"];
          
                          echo " - "; 
                          echo $var2;
                          echo " - ";  
                      } ?>

                    </strong>
                  </span>
                </td>
                <td><span style="color: #CF4612;"><strong>10€</strong></span></td>
                <td><span style="color: #CF4612;"><strong>10€</strong></span></td>
                <td><span style="color: #CF4612;"><strong>10€</strong></span></td>
              </tr>
            </table>


      <?php



 foreach ($local_resu as $ligne) {
          $var2=$ligne["idreservation"];?>

        <tr>
          <td><span style="color: #CF4612;"><strong>Numéro de votre reservation :</strong></span></td>
          <td><strong><?php echo $var2 ?></strong></td>
        </tr>

 <?php}

foreach ($local_resu as $ligne) { // pour chaque ligne du tableau globale 2D (une ligne est vue comme un tableau 1D)
          $var1=$ligne["dateréservation"]; // on récupère la variable de la ligne en cours avec le nom de son champ. Ici le champ s'appelle "nomclient" qui est le nom de l'attribut de la table. ?>

          <tr>
              <td><span style="color: #CF4612; justify-content: center;"><strong>Date de votre reservation :</strong></span></td>
              <td style="text-align: center"><strong><?php echo @$var1 ?></strong></td>
          </tr>

    <?php  }

 foreach ($local_resu as $ligne) {
          $var3=$ligne["refmaps"];?>

          <tr>
              <td><span style="color: #CF4612;"><strong>Map sélectionnée</strong></span></td>
              <td><strong><?php echo $var3 ?></strong></td>
          </tr>         

 <?php}
  foreach ($local_resu as $ligne) {
          $var4=$ligne["nombrejoueurs"];?>

          <tr>
              <td><span style="color: #CF4612;"><strong>Nombre de joueurs</strong></span></td>
              <td><strong><?php echo $var4 ?></strong></td>
          </tr>



 <?php}
  foreach ($local_resu as $ligne) {
          $var5=$ligne["nombreequipes"];?>

          <tr>
              <td><span style="color: #CF4612;"><strong>Nombre d'équipes</strong></span></td>
              <td><strong><?php echo $var5 ?></strong></td>
          </tr>
 <?php } ?>

          </table>
          <br/>
        </div>
      </section>


  </main>
<?php include("../include/footerphp.php") ?>
</body>
</html>
