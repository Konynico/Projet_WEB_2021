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

		<!--
			Partie Enregistrement du client 
		-->


<?php
	require_once("connexion.php");
	$conn1=connexionBDD();

	require_once("fonctionBDD.php");

		// on récupère les paramètres (elles sont dans un tableau sur le serveur) et on crée une nouvelle variable pour les appeler ultérieurement 
		//(cette opération n'est pas obligatoire - on peut accéder par la suite à la variable par le tableau 
		// on préfère pour des raisons de clareté de code copier la variable du tableau dans une variable (php)
	?>
	<section class="container5">
        <div class="item5">
        <?php	
		$local_nomClient= $_GET['P_nomClient'] ; // création et affectation de la variable php avec l'info issue du formulaire de saisie 
		echo " Nom client : <br />" .$local_nomClient."<br />"; // affichage pour contrôle avec un retour à la ligne (balise <br />).
		?>
		</div>
		<div class="item5">
		<?php
		$local_prenomClient= $_GET['P_prenomClient'] ;
		echo "Prenom client :<br /> " .$local_prenomClient."<br />";
		?>
		</div>
		<div class="item5">
		<?php
		$local_mailClient= $_GET['P_mailClient'] ;
		echo "Mail client :<br />" .$local_mailClient."<br />";
		?>
		</div>
		<div class="item5">
		<?php
		$local_telephoneClient= $_GET['P_telephoneClient'] ;
		echo "Tel client :<br />" .$local_telephoneClient."<br />";
		
    $local_mdp= $_GET['P_mdp'] ;  
    ?>
		</div>
		


		<div class="item5">
    
		<p style="color:#FF0000;"><?php
		$resu=EnregistreNouveauClient($local_nomClient, $local_prenomClient, $local_mailClient, $local_telephoneClient, $local_mdp, $conn1);
         echo "Votre id client : " .$resu. "<br />"  ;
         
         
         	 
        ?>
    </p>
        
    	</div>
        <?php
		deconnexionBDD($conn1);
            
		?>
		</section>
		<!--
			Partie Saisie Reservation 
		-->

		<section class="containerS">
        <div class="itemS" >
          <H2>Creation de votre Reservation  :</H2>
        </br>
          <form action = "enregistreRes.php" method = "GET">
            <tr>
              <td> Votre IdClient : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
              <td> <input type="text" size=20  placeholder="Entrez ici votre id client" name="P_idClient" pattern="\d+" title="1 chiffre minimum" required value=<?php echo $resu ?>></td>
            </tr>
            </br></br>
            <tr>
              <td> Nom map séléctioné : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
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
              <td> Date : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
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
</body>
<?php include("../include/footerphp.php") ?>
</html>
