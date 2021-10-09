    <?php
//Commencer la SESSION
 session_start();
//Connexion a la base de données
include '../traitement/connexion-base-donnees.php';


//Vérifier si la variable existe
if(isset($_POST['boutton-changer-mdp']))

{

     //Si les champs sont remplis
   
    if (!empty($_POST['recup_reponse']))
    {   
        //Proteger les variables et les simplifier
        $recup_reponse = htmlspecialchars($_POST['recup_reponse']);
       
        // echo $recup_mdp;

        {
            // $recup_reponse = htmlspecialchars($_POST['recup_reponse']);

            $req_recup_reponse = $bdd->prepare("SELECT * FORM membres WHERE reponse = ?");
            $req_recup_reponse->execute(array($recup_reponse));
            

            if($recup_reponse == $_SESSION['reponse'])
           {
            
            header("Location: changer-mdp.php?id=".$_SESSION['id']);
           }
           else
           {
               $erreur="Votre réponse n'est pas correct";
           }

        
                  

            
        }
    }
    else{
        $erreur ="Tous les champs doivent être complétés";
    }
    
    
}


?>
