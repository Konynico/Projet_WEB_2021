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

		<!--
			Partie Enregistrement de la reservation 
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
		$local_idClient= $_GET['P_idClient'] ; // création et affectation de la variable php avec l'info issue du formulaire de saisie 
		echo " Votre id client : <br />" .$local_idClient."<br />"; // affichage pour contrôle avec un retour à la ligne (balise <br />).
		?>
		</div>
		<div class="item5">
		<?php
		$local_idMap= $_GET['idmaps'] ;
		echo "Votre map sélectionné :<br /> " .$local_idMap."<br />";
		?>
		</div>
		<div class="item5">
		<?php
		$local_date= $_GET['P_date'] ;
		echo "Date de votre réservation :<br />" .$local_date."<br />";
		?>
		</div>
    <div class="item5">
    <?php
    $local_horaire= $_GET['idhoraire'] ;
    echo "Horaire de votre réservation :<br />" .$local_date."<br />";
    ?>
    </div>


		<div class="item5">
		<?php
		$local_nbJoueurs= $_GET['P_nbJoueurs'] ;
		echo "Nombre de joueurs :<br />" .$local_nbJoueurs."<br />";
		?>
		</div>

		<div class="item5">
		<?php
		$local_nbEquipes= $_GET['P_nbEquipes'] ;
		echo "Nombre d'équipes :<br />" .$local_nbEquipes."<br />";
		?>
		</div>
		

		<div class="item5" style="color:#FF0000;">
		<?php
		
         
         $resu=EnregistreRes($local_idClient, $local_idMap, $local_date, $local_horaire, $local_nbJoueurs, $local_nbEquipes, $conn1);
         echo "Id reservation : " .$resu ;
         $local_id_res = (int)$resu; 
        ?>
        
    	</div>
        <?php
		deconnexionBDD($conn1);
            
		?>
		</section>


	<!--
			Partie Enregistrement Maps et arme 
	-->

		<section class="containerS">
        <div class="itemS">
          <form action = "finres.php" method = "GET">
          <H2>Séléction des équipes et des armes :</H2>
          </br>
          <form action = "enregistreRes.php" method = "GET">
            <tr>
            	<td> Nom équipe 1 : &nbsp </td>
              <td> 
                <?php
                            
                $res=listeequipes($conn1);
                $resu = $res->fetchAll(); // on récupère le tout dans un tableau. Dans le tableau résultat, la 1ère ligne est associée à chaque ligne qui suit.
    
                // fabrication de lliste déroulante (balise SELECT) à partir des clients (infos issues de la bdd)
                print( '<select name="idequipe1">'); // envoyé comme paramètre dans le formulaire
                foreach ($resu as $ligne) {
                        print( '<option value="'.$ligne["idequipe"].'">'.$ligne["nomequipe"].'</option>'); // pour créer chaque ligne de choix
                }
                print( "</select>");
                ?> 
              </td>
            </tr>
            <tr>
              <td> &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp Arme séléctioné : &nbsp</td>
              <td> 
                <?php
                            
                $res=listearmes($conn1);
                $resu = $res->fetchAll(); // on récupère le tout dans un tableau. Dans le tableau résultat, la 1ère ligne est associée à chaque ligne qui suit.
    
                // fabrication de lliste déroulante (balise SELECT) à partir des clients (infos issues de la bdd)
                print( '<select name="idarme1">'); // envoyé comme paramètre dans le formulaire
                foreach ($resu as $ligne) {
                        print( '<option value="'.$ligne["idarme"].'">'.$ligne["nomarme"].'</option>'); // pour créer chaque ligne de choix
                }
                print( "</select>");
                ?> 
              </td>
              <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Nombre de joueurs dans l'équipe 1 :  </td>
              <td> <input type="text" placeholder="8 joueurs max" size=20 name="P_nbJ1" pattern="^([1-8])$" title="Seulement un chiffre entre 1-8"required> </td>
            <tr>
            </br></br></br>
              <td> Nom équipe 2 : &nbsp </td>
              <td> 
                <?php
                            
                $res=listeequipes($conn1);
                $resu = $res->fetchAll(); // on récupère le tout dans un tableau. Dans le tableau résultat, la 1ère ligne est associée à chaque ligne qui suit.
    
                // fabrication de lliste déroulante (balise SELECT) à partir des clients (infos issues de la bdd)
                print( '<select name="idequipe2">'); // envoyé comme paramètre dans le formulaire
                foreach ($resu as $ligne) {
                        print( '<option value="'.$ligne["idequipe"].'">'.$ligne["nomequipe"].'</option>'); // pour créer chaque ligne de choix
                }
                print( "</select>");
                ?> 
              </td>
            </tr>
            <tr>
              <td> &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp Arme séléctioné : &nbsp</td>
              <td> 
                <?php
                            
                $res=listearmes($conn1);
                $resu = $res->fetchAll(); // on récupère le tout dans un tableau. Dans le tableau résultat, la 1ère ligne est associée à chaque ligne qui suit.
    
                // fabrication de lliste déroulante (balise SELECT) à partir des clients (infos issues de la bdd)
                print( '<select name="idarme2">'); // envoyé comme paramètre dans le formulaire
                foreach ($resu as $ligne) {
                        print( '<option value="'.$ligne["idarme"].'">'.$ligne["nomarme"].'</option>'); // pour créer chaque ligne de choix
                }
                print( "</select>");
                ?> 
              </td>
              <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Nombre de joueurs dans l'équipe 2 :  </td>
              <td> <input type="text" placeholder="8 joueurs max" size=20 name="P_nbJ2" pattern="^([1-8])$" title="Seulement un chiffre entre 1-8"required> </td>
            </tr>
                        <?php 
            if ($local_nbEquipes==3) { ?>
              </br></br></br>

             <td> Nom équipe 3 : &nbsp </td>
              <td> 
                <?php
                            
                $res=listeequipes($conn1);
                $resu = $res->fetchAll(); // on récupère le tout dans un tableau. Dans le tableau résultat, la 1ère ligne est associée à chaque ligne qui suit.
    
                // fabrication de lliste déroulante (balise SELECT) à partir des clients (infos issues de la bdd)
                print( '<select name="idequipe3">'); // envoyé comme paramètre dans le formulaire
                foreach ($resu as $ligne) {
                        print( '<option value="'.$ligne["idequipe"].'">'.$ligne["nomequipe"].'</option>'); // pour créer chaque ligne de choix
                }
                print( "</select>");
                ?> 
              </td>
            </tr>
            <tr>
              <td> &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp Arme séléctioné : &nbsp</td>
              <td> 
                <?php
                            
                $res=listearmes($conn1);
                $resu = $res->fetchAll(); // on récupère le tout dans un tableau. Dans le tableau résultat, la 1ère ligne est associée à chaque ligne qui suit.
    
                // fabrication de lliste déroulante (balise SELECT) à partir des clients (infos issues de la bdd)
                print( '<select name="idarme3">'); // envoyé comme paramètre dans le formulaire
                foreach ($resu as $ligne) {
                        print( '<option value="'.$ligne["idarme"].'">'.$ligne["nomarme"].'</option>'); // pour créer chaque ligne de choix
                }
                print( "</select>");
                ?> 
              </td>
              <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Nombre de joueurs dans l'équipe 3 :  </td>
              <td> <input type="text" placeholder="8 joueurs max" size=20 name="P_nbJ3" pattern="^([1-8])$" title="Seulement un chiffre entre 1-8"required> </td>
      
              <?php }
           ?>

            <tr>
              </br>
</br>
              <td> </br>Id reservation : <input type="text" size=5  placeholder="Entrez ici votre id client" name="P_idRes" pattern="\d+" title="1 chiffre minimum" required value=<?php  echo $local_id_res ?>></td>
            </tr>

            <tr>
              </br>
              <td> </br><input class=bouton  type="submit" value="Finaliser la reservation"></td>
            </tr>
            
          
          </form>

              
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
