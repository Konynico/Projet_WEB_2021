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
?>
	
	
        <?php	

    $local_idres= $_GET['P_idRes'];
		$local_idequipe1= $_GET['idequipe1'] ; // création et affectation de la variable php avec l'info issue du <?php
		$local_idarme1= $_GET['idarme1'] ; 
		$local_P_nbJ1= $_GET['P_nbJ1'] ; 
		
		$local_idequipe2= $_GET['idequipe2'] ; // création et affectation de la variable php avec l'info issue du <?php
		$local_idarme2= $_GET['idarme2'] ; 
		$local_P_nbJ2= $_GET['P_nbJ2'] ; 

		
		

		EnregistreFinRes($local_idres,$local_idequipe1,$local_idarme1,$local_P_nbJ1,$conn1);
		EnregistreFinRes($local_idres,$local_idequipe2,$local_idarme2,$local_P_nbJ2,$conn1);


		if(isset($_GET['idequipe3'])){
			$local_idequipe3= $_GET['idequipe3'] ; // création et affectation de la variable php avec l'info issue du <?php
			$local_idarme3= $_GET['idarme3'] ; 
			$local_P_nbJ3= $_GET['P_nbJ3'] ; 
			EnregistreFinRes($local_idres,$local_idequipe3,$local_idarme3,$local_P_nbJ3,$conn1);

		}

	
         
        ?>
    </p>
        
    	</div>
        <?php
		deconnexionBDD($conn1);
            
		?>
		</section>

		 <section class="container5">
        <div class="item5">
          <p>
            <h2>Bravo vous avez fini votre réservation !!!</h2>
          </p>
          <p>
            Vous pouvez allez consulter toutes les information sur votre réservation en vous connectant apres avoir cliqué sur le bouton ci-dessous.  
          </p>
        </div>
      </section>
       <section class="container">
       <div class="item6">
        <a href="../res.php"><h2 class="title2">Voir vos réservations</h2></a>
      </div>

</main>
</br></br></br>
</body>
<?php include("../include/footerphp.php") ?>
</html>
