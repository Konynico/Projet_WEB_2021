<?php
function ListerClients($connex) {
// permet de lister les clients
   $sql="SELECT NomClient,idclient FROM CLIENTS ORDER BY NomClient;";					// déclaration de la variable appelee $sql.
   $result=$connex->query($sql); 												// execution de la requête. Le resultat est dans la variable $res.
   return $result;																// retourne a l'appelant le resultat.
}




function EnregistreNouveauClient ($nomClient, $prenomClient, $mailClient, $telephoneClient, $mdp, $connex) {
	$sql="INSERT INTO CLIENTS (nomclient, prenomclient, adresseemail, numerotelephone, mdp) VALUES ('".$nomClient."','".$prenomClient."','".$mailClient."','".$telephoneClient."','".$mdp."') RETURNING idclient;";// initialisation de la variable $sql qui contient la commande à éxécuter
	$resu=$connex->query($sql);				// demande d'execution de la requête sur la base via le connecteur $conn1. Le resultat est dans la variable $resu.
	//Pour récupére l'id affecté automatiquement (à  cause du SERIAL)
  $lire = $resu->fetchColumn(); // retourne l'élément RETURNING
    return $lire; //affiche l'id affecté


}



function EnregistreRes ($idClient, $numMap, $date, $horaire, $nbJoueurs ,$nbEquipes ,$connex) {
  $sql="INSERT INTO RESERVATION (refclient, refmaps ,dateréservation,refhoraires ,nombrejoueurs ,nombreequipes) VALUES ('".$idClient."','".$numMap."','".$date."','".$horaire."','".$nbJoueurs."','".$nbEquipes."') RETURNING idreservation;";// initialisation de la variable $sql qui contient la commande à éxécuter
  $resu=$connex->query($sql);       // demande d'execution de la requête sur la base via le connecteur $conn1. Le resultat est dans la variable $resu.
  //Pour récupére l'id affecté automatiquement (à cause du SERIAL)
    @$lire = $resu->fetchColumn(); // retourne l'élément RETURNING
    return $lire; //affiche l'id affecté


}

function listemaps($connex){

   $sql="SELECT NomMaps,IdMaps FROM MAPS ORDER BY NomMaps ;";          
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   return $result;                                // retourne a l'appelant le resultat.
}

function listehoraires($connex){

   $sql="SELECT horaire,idhoraires FROM horaires;";          
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   return $result;                                // retourne a l'appelant le resultat.
}


function listeequipes($connex){

   $sql="SELECT nomequipe,idequipe FROM EQUIPE ORDER BY nomequipe ;";          
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   return $result;                                // retourne a l'appelant le resultat.
}

function listearmes($connex){

   $sql="SELECT nomarme,idarme FROM ARMES ORDER BY nomarme ;";          
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   return $result;                                // retourne a l'appelant le resultat.
}

/* PARTIE VOIR RESERVATION */


function trouvernomclient($mail, $mdp, $connex){

   $sql="SELECT nomclient FROM clients WHERE adresseemail= '".$mail."' and mdp= '".$mdp."';";          
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   $lire = $result->fetchColumn(); // retourne l'élément RETURNING
    return $lire."<br />"; //affiche l'id affecté
                                 // retourne a l'appelant le resultat.
}

function trouverprenomclient($mail, $mdp, $connex){

   $sql="SELECT prenomclient FROM clients WHERE adresseemail= '".$mail."' and mdp= '".$mdp."';";          
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   $lire = $result->fetchColumn(); // retourne l'élément RETURNING
    return $lire."<br />"; //affiche l'id affecté
                                 // retourne a l'appelant le resultat.
}

function trouverhoraire($idhoraires, $connex){

   $sql="SELECT horaire FROM horaires WHERE idhoraires= '".$idhoraires."';";          
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   $lire = $result->fetchColumn(); // retourne l'élément RETURNING
    return $lire; //affiche l'id affecté
                                 // retourne a l'appelant le resultat.
}


function trouveridclient($mail, $mdp, $connex){

   $sql="SELECT idclient FROM clients WHERE adresseemail= '".$mail."' and mdp= '".$mdp."';";          
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   $lire = $result->fetchColumn(); // retourne l'élément RETURNING
    return $lire."<br />"; //affiche l'id affecté
                                 // retourne a l'appelant le resultat.
}

function trouverresclient($refclient, $connex){

   $sql="SELECT dateréservation,idreservation,refmaps,nombrejoueurs,nombreequipes,refhoraires FROM reservation WHERE refclient= '".$refclient."';";          
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   
    return $result; //affiche l'id affecté
                                 // retourne a l'appelant le resultat.
}


/* ==== PARTIE ADMIN ==== */


function trouverresclientsup($idres, $connex){

   $sql="SELECT idrefequipe,refarmes,nombrejoueursequipe FROM reserver WHERE idrefreservation= '".$idres."';";          
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   
    return $result; //affiche l'id affecté
                                 // retourne a l'appelant le resultat.
}





function trouvernommap($refmap, $connex){

   $sql="SELECT nommaps FROM maps WHERE idmaps= '".$refmap."';";          
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   $lire = $result->fetchColumn(); // retourne l'élément RETURNING
    return $lire; 
                                 
}

function trouvernomE($refE, $connex){

   $sql="SELECT nomequipe FROM equipe WHERE idequipe= '".$refE."';";          
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   $lire = $result->fetchColumn(); // retourne l'élément RETURNING
    return $lire; 
                                 
}

function trouvernomA($refA, $connex){

   $sql="SELECT nomarme FROM armes WHERE idarme= '".$refA."';";          
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   $lire = $result->fetchColumn(); // retourne l'élément RETURNING
    return $lire; 
                                 
}




function trouveridclientv2($mail, $connex){

   $sql="SELECT idclient FROM clients WHERE adresseemail= '".$mail."';";          
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   $lire = $result->fetchColumn(); // retourne l'élément RETURNING
    return $lire."<br />"; //affiche l'id affecté
                                 // retourne a l'appelant le resultat.
}

/* MODIFICATION DES INFOS CLIENTS */ 
function modifierNomClient ($nom, $idClient, $connex) {
  $sql="UPDATE clients SET nomclient = '".$nom."' WHERE idclient = '".$idClient."';";
    $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
}

function modifierPrenomClient ($prenom, $idClient, $connex) {
  $sql="UPDATE clients SET  prenomclient = '".$prenom."' WHERE idclient = '".$idClient."';";
    $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
}

function modifierNumClient ($num, $idClient, $connex) {
  $sql="UPDATE clients SET numerotelephone = '".$num."' WHERE idclient = '".$idClient."';";
    $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
}

function modifierDateRes ($dateRes, $idRes, $connex) {
  $sql="UPDATE reservation SET dateréservation = '".$dateRes."' WHERE idreservation = '".$idRes."';";
    $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
}

function modifierHoraireRes ($horaireRes, $idRes, $connex) {
  $sql="UPDATE reservation SET refhoraires = '".$horaireRes."' WHERE idreservation = '".$idRes."';";
    $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
}

function modifierMapRes ($mapRes, $idRes, $connex) {
  $sql="UPDATE reservation SET refmaps = '".$mapRes."' WHERE idreservation = '".$idRes."';";
    $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
}

function modifierNbJoueur ($nbjoueurRes, $idRes, $connex) {
  $sql="UPDATE reservation SET nombrejoueurs = '".$nbjoueurRes."' WHERE idreservation = '".$idRes."';";
    $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
}

/* SUPPRIMER RESERVATION CLIENT */
function supprimerRes ($idRes, $connex) {
  $sql="DELETE FROM reservation WHERE idreservation ='".$idRes."';";
  $sql2="DELETE FROM reserver WHERE idreservation ='".$idRes."';";
    $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
}


function reservation($id){


        require_once("connexion.php");
        $conn1=connexionBDD();

        $local_res= trouverresclient($id, $conn1);
        $local_resu = $local_res->fetchAll();
        
        
?>



<section class="container5">
  <div id="itemH">
    </br>
    <H2 id=h>Reservations :</H2>
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

<?php  
}


function reservationsup($id){


        require_once("connexion.php");
        $conn1=connexionBDD();

        $local_res= trouverresclientsup($id, $conn1);
        $local_resu = $local_res->fetchAll();
        
        
?>



<section class="container5">
  <div id="itemH">
    </br>
    <H2 id=h>Reservations :</H2>
      <table border="1" cellpadding="5" cellspacing="5" width="50%" class="tableau">




<tr>
          <td><span style="color: #CF4612;"><strong>Numéro des équipes :</strong></span></td>
          <td><strong>
<?php
 foreach ($local_resu as $ligne) {
          $var2=$ligne["idrefequipe"];
          
           $nomE = trouvernomE($var2, $conn1);
           echo " - ";
           echo $nomE;  
           echo " - ";    
       
 
  } ?>
  </strong></td>
 </tr>
 
 <tr>
          <td><span style="color: #CF4612;"><strong>Références des armes :</strong></span></td>
          <td><strong>
<?php
 foreach ($local_resu as $ligne) {
          $var1=$ligne["refarmes"];

           $nomA = trouvernomA($var2, $conn1);
           echo " - ";
           echo $nomA;  
           echo " - "; 
          
  } ?>
  </strong></td>
 </tr>

 <tr>
          <td><span style="color: #CF4612;"><strong>Nombres de joueurs par équipes :</strong></span></td>
          <td><strong>
<?php
 foreach ($local_resu as $ligne) {
          $var4=$ligne["nombrejoueursequipe"];

           echo " - ";
           echo $var4; 
           echo " - ";
  } ?>
  </strong></td>
 </tr>
          </table>
          <br/>
        </div>
      </section>

<?php  
}



function trouvernomclientV2($id, $connex){

   $sql="SELECT nomclient FROM clients WHERE idclient= '".$id."';";          
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   $lire = $result->fetchColumn(); // retourne l'élément RETURNING
    return $lire."<br />"; //affiche l'id affecté
                                 // retourne a l'appelant le resultat.
}

function trouverprenomclientV2($id, $connex){

   $sql="SELECT prenomclient FROM clients WHERE idclient= '".$id."';";        
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   $lire = $result->fetchColumn(); // retourne l'élément RETURNING
    return $lire."<br />"; //affiche l'id affecté
                                 // retourne a l'appelant le resultat.
}

function trouvermailclient($id, $connex){

   $sql="SELECT adresseemail FROM clients WHERE idclient= '".$id."';";        
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   $lire = $result->fetchColumn(); // retourne l'élément RETURNING
    return $lire."<br />"; //affiche l'id affecté
                                 // retourne a l'appelant le resultat.
}

function trouvernumclient($id, $connex){

   $sql="SELECT numerotelephone FROM clients WHERE idclient= '".$id."';";        
   $result=$connex->query($sql);                        // execution de la requête. Le resultat est dans la variable $res.
   $lire = $result->fetchColumn(); // retourne l'élément RETURNING
    return $lire."<br />"; //affiche l'id affecté
                                 // retourne a l'appelant le resultat.
}
      

function info($id, $connex){
 ?>
   
<section class="container5">
        <div class="item5">
          <br/>
    <?php  
    echo "Nom du client : <br />" .trouvernomclientV2($id, $connex)."<br />"; 
    ?>
    </div>
    <div class="item5">
      <br/>
    <?php
    echo "Prénom du client : <br /> " .trouverprenomclientV2($id, $connex)."<br />";
    ?>
    </div>
    <div class="item5">
    <?php
    echo "Adresse mail :<br />".trouvermailclient($id, $connex)."";
    ?>
    </div>
    <div class="item5">
    <?php
    echo "Téléphone:<br />".trouvernumclient($id, $connex)."";
    ?>
    </div>
    <div style="color:#FF0000;" class="item5">
    <?php
    echo "Id du client :<br />" .$id."<br />";
    ?>

    </div>

    </section>

<?php 
}

//page fin res.php


function EnregistreFinRes ($idres, $idequipe, $idarme, $P_nbJ, $connex) {
  $sql="INSERT INTO RESERVER (idrefequipe, idrefreservation, refarmes, nombrejoueursequipe) VALUES ('".$idequipe."','".$idres."','".$idarme."','".$P_nbJ."');";// initialisation de la variable $sql qui contient la commande à éxécuter
  $resu=$connex->query($sql);       // demande d'execution de la requête sur la base via le connecteur $conn1. Le resultat est dans la variable $resu.
  //Pour récupére l'id affecté automatiquement (à  cause du SERIAL)
  


}
