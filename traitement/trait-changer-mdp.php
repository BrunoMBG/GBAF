<?php
    session_start();
    include '../traitement/connexion-base-donnees.php';
    if(isset($_POST['boutton-changer-mdp']))
    
    {

  
    
    
    if(isset($_POST['recup_mdp']) AND !empty($_POST['recup_mdp']) AND isset($_POST['recup_mdp2']) AND !empty($_POST['recup_mdp2']))
        {
           
            // $recup_reponse = htmlspecialchars($_POST['recup_reponse']);
            $recup_mdp = sha1($_POST['recup_mdp']);
            $recup_mdp2 = sha1($_POST['recup_mdp2']);
            // $recup_mdp = password_hash($_POST['recup_mdp'], PASSWORD_DEFAULT);
            // $recup_mdp2 = password_hash($_POST['recup_mdp2'], PASSWORD_DEFAULT);
    
       
          
            //Changement de mot de passe
            if($recup_mdp == $recup_mdp2)
            {
                $reqrecup_mdp = $bdd->prepare("UPDATE utilisateurs SET mot_de_passe	 = ? WHERE id = ?");
                $reqrecup_mdp->execute(array($recup_mdp, $_SESSION['id']));
                // header('Location: profil.php?id='.$_SESSION['id']);
                // 
                // $erreur = "ok";
                $message ="";
                
            }
           else
           {
               $erreur ="Vos mots de passe ne correspondent pas";
           }
        }
        else{
            $erreur ="Tous les champs doivent être complétés";
        }

    }

   



?>