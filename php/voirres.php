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

<?php
  require_once("connexion.php");
  $conn1=connexionBDD();

  require_once("fonctionBDD.php");

    // on récupère les paramètres (elles sont dans un tableau sur le serveur) et on crée une nouvelle variable pour les appeler ultérieurement 
    //(cette opération n'est pas obligatoire - on peut accéder par la suite à la variable par le tableau 
    // on préfère pour des raisons de clareté de code copier la variable du tableau dans une variable (php)
   $local_mdp= $_GET['P_mdpClientEnregistré'] ;

  ?>

<section class="container5">
        <div class="item5">
          <br/>
        <?php 
    $local_adresse= $_GET['P_mailClientEnregistré'] ;

    $local_nomClient= trouvernomclient($local_adresse ,$local_mdp, $conn1) ; // création et affectation de la variable php avec l'info issue du formulaire de saisie 
    echo " Votre nom client : <br />" .$local_nomClient."<br />"; // affichage pour contrôle avec un retour à la ligne (balise <br />).
    ?>
    </div>
    <div class="item5">
      <br/>
    <?php
    $local_prenomClient= trouverprenomclient($local_adresse ,$local_mdp, $conn1) ;
    echo "Votre prenom client : <br /> " .$local_prenomClient."<br />";
    ?>
    </div>
    <div class="item5">
    <?php
    echo "Votre adresse mail :<br />" .$local_adresse."";
    ?>
    </div>

    <div style="color:#FF0000;" class="item5">
    </br>
    <?php
    $local_id= @trouveridclient($local_adresse ,$local_mdp, $conn1) ;
    echo "Votre id client :<br />" .$local_id."<br />";
    ?>
    </div>

    </section>


    <!-- 
    Recup de la reservation
    -->

        <?php 

        $local_idv2 = (int)$local_id;

        $local_res= trouverresclient($local_idv2, $conn1);
        $local_resu = $local_res->fetchAll();
        
        ?>

<section class="container5">
  <div id="itemH">
    </br>
    <H2 id=h>Vos reservations :</H2>
      <table border="1" cellpadding="5" cellspacing="5" width="50%" class="tableau">




<tr>
          <td><span style="color: #CF4612;"><strong>Numéro de vos reservations :</strong></span></td>
          <td><strong>
<?php
 foreach ($local_resu as $ligne) {
          $var2=$ligne["idreservation"];
          
           echo " - "; 
           echo $var2;
           echo " - ";  
       
 
  } ?>
  </strong></td>
 </tr>
 
 <tr>
          <td><span style="color: #CF4612;"><strong>Date de vos reservations :</strong></span></td>
          <td><strong>
<?php
 foreach ($local_resu as $ligne) {
          $var1=$ligne["dateréservation"];

           echo " &nbsp&nbsp ";
           echo $var1; 
          
  } ?>
  </strong></td>
 </tr>

  </tr>
 
 <tr>
          <td><span style="color: #CF4612;"><strong>Horaire de vos reservations :</strong></span></td>
          <td><strong>
<?php
 foreach ($local_resu as $ligne) {
          $var6=$ligne["refhoraires"];
            $horaire=trouverhoraire($var6, $conn1);
           echo " &nbsp&nbsp ";
           echo $horaire; 
          
  } ?>
  </strong></td>
 </tr>


 <tr>
          <td><span style="color: #CF4612;"><strong>Maps sélectionés :</strong></span></td>
          <td><strong>
<?php
 foreach ($local_resu as $ligne) {
          $var3=$ligne["refmaps"];
          $nommap = trouvernommap($var3, $conn1);
           echo " - ";
           echo $nommap;  
           echo " - ";
  } ?>
  </strong></td>
 </tr>

 <tr>
          <td><span style="color: #CF4612;"><strong>nombres de joueurs :</strong></span></td>
          <td><strong>
<?php
 foreach ($local_resu as $ligne) {
          $var4=$ligne["nombrejoueurs"];

           echo " - ";
           echo $var4; 
           echo " - ";
  } ?>
  </strong></td>
 </tr>

 <tr>
          <td><span style="color: #CF4612;"><strong>nombres d'équipes :</strong></span></td>
          <td><strong>
<?php
 foreach ($local_resu as $ligne) {
          $var5=$ligne["nombreequipes"];

           echo " - ";
           echo $var5; 
           echo " - ";
  } ?>
  </strong></td>
 </tr>
          </table>
          <br/>
        </div>
      </section>

      <!-- 
    Cration d'une reservation
    -->


  <section class="containerS">
        <div class="itemS" >
          <H2>Creation de votre Reservation  :</H2>
        </br>
          <form action = "enregistreRes.php" method = "GET">
            <tr>
              <td> Votre IdClient : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
              <td> <input type="text" size=20  placeholder="Entrez ici votre id client" name="P_idClient" pattern="\d+" title="1 chiffre minimum" required value=<?php echo $local_idv2  ?>></td>
            </tr>
            </br></br>
            <tr>
              <td> Nom map séléctioné : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
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
            </br></br>
            <tr>
              <td> Date : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td> <input type="text" placeholder="jj/mm/aaaa" size=20 name="P_date" pattern="^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$" title="Attention ecrire sous la forme jj/mm/aaaa ou jj-mm-aaaa"required> </td>
            </tr>
            </br></br>
            <tr>
              <td> Heure :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
              <td> 
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
            </br></br>
            <tr>
              <td> Nombre de joueurs : &nbsp&nbsp&nbsp&nbsp </td>
              <td> <input type="text" placeholder="24 joueurs max" size=20 name="P_nbJoueurs" pattern="^([2-9]|[1][0-9]|2[0-4])$" title="Seulement un chiffre entre 2-24"required></td>
            </tr>
            </br> </br>  
            <tr>
              <td> Nombre d'équipes : &nbsp&nbsp&nbsp&nbsp&nbsp </td>
              <td> <input type="text" placeholder="Choisir en 2 ou 3 équipes" size=20 name="P_nbEquipes" pattern="^([2-3])$" title="Seulement 2 ou 3 équipes"required> </td>
            </tr>   
            <tr>
              </br>
              <td> </br><input class=bouton  type="submit" value="Reserver"></td>
            </tr>
          </form>
        </br>
        </div>
      </section>

       <section class="container">
      
        <div class="item6">
          <a href="../armes_et_maps.php" target="_blank"><h2 class="title">Voir les armes, équipes et maps en détails</h2></a>
        </div>
      </section>





























  </main>
<?php include("../include/footerphp.php") ?>
</body>
</html>
