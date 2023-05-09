<?php

    session_start();
    require_once 'connexion.php';                                    
    $conn1=connexionBDD();

    if(isset($_POST['bouton']))        
    {
        $P_loginA = htmlspecialchars($_POST['P_loginAdmin']);                 
        $P_mdpA = htmlspecialchars($_POST['P_mdpAdmin']);

        $sql="SELECT * FROM ADMINISTRATION WHERE loginadmin = '$P_loginAdmin' and mdpadmin = '$P_mdpAdmin'";
    
        $result = $conn1 -> prepare($sql);
        $result -> execute();

        if ($result -> rowCount() > 0)
        {
            $data = $result->fetch();
            $_SESSION['P_loginAdmin']=$P_loginA;
		    $_SESSION['message'] = "Vous etes connectÃ©(e), bienvenu(e)";

		header("Location:https://srv-prj-new.iut-acy.local/RT/1projet2/Site%20projet/php/admin.php");

        }
        else{

            #echo "Erreur lors de l'autentification, vous allez etre rediriger vers l'acceuille";
		 $_SESSION['P_loginAdmin']=$P_loginA;
		 $_SESSION['message'] = "Erreur lors de l'autentification, votre addresse mail et/ou mot de passe est incorecte";

		header("Location:https://srv-prj-new.iut-acy.local/RT/1projet2/Site%20projet/php/admin.php");

		exit();
	
        }

    }
    
?>

