<?php
 include '../traitement/trait-verification-reponse.php'; //GESTION DE MOT DE PASSE OUBLIÉ
 


//  if (!isset($_SESSION['id']))
// {
//    header('Location: index.php');
// }
?>
        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../style/style.css" />
            <title>Vérification de la réponse secrète</title>
        </head>

        <body>
             <!--------------------------------------------------------------------------------HEADER -------------------------------------------------------------------------------->
             <header class="header">
                
                <a href="../index.php"><img src="../Images\logo_gbaf.png"></a>
            </header>

            <!--------------------------------------------------------------------------------FORMULAIRE INSCRIPTION-------------------------------------------------------------------------------->
            <div  id="conteneur-formulaire-verification-reponse">
            <h2>Vérification de la réponse secrète</h2>

            <form  id="formulaire-verification-reponse" method="POST" action="">
            <table>
               
         <!--------------------------------------------------------------------------------NOM D'UTILISATEUR-------------------------------------------------------------------------------->
        <tr>
                <td>
                    <label class="label-verification-reponse" for="nom_utilisateur">Nom d'utilisateur :</label>
                </td>

                <td>
    
            <p>
            <?php echo $_SESSION['nom_utilisateur']; ?>
            </p>
                </td>
        </tr>

       

        <!--------------------------------------------------------------------------------QUESTION SECRÈTE-------------------------------------------------------------------------------->
        <tr>
                <td>
                    <label class="label-verification-reponse" for="question">Question secrète :</label>
                </td>

                <td>
         
            <p>
            <?php echo $_SESSION['question']; ?>
            </p>                                    
                </td>

        </tr>
         <!--------------------------------------------------------------------------------RÉPONSE A LA QUESTION SECRÈTE---------------------------------------------------------------------->
        <tr>
                <td>
                    <label class="label-verification-reponse" for="reponse">Réponse à la question secrète :</label>
                </td>

                <td>
                    <input type="text"  id="champ-verification-reponse"  name="recup_reponse" /> 
                </td>
        </tr> 
        
    
     <!--------------------------------------------------------------------------------BOUTTON---------------------------------------------------------------------->
        <tr>
            <td></td>
            <td></br>
            <input type="submit" name="boutton-changer-mdp" value="Valider" id="boutton-formulaire-verification-reponse"/>
            </td>

        </tr>
        </table>
       
            </form> </br>   

     <!--------------------------------------------------------------------------------GESTION D'ERREUR-------------------------------------------------------------------------------->
            <?php
   if (isset($erreur))
   {       
   echo  '<font color="red">'.$erreur."</font>";
   }
   ?>

        </div>

     
        

        </body>

        </html>
