<?php

 include 'gestionserveur/gestion-verification-reponse.php'; //GESTION DE MOT DE PASSE OUBLIÉ
 





?>
 

        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css" />
            <title>Vérification de la réponse secrète</title>
        </head>

        <body>
             <!--------------------------------------------------------------------------------HEADER -------------------------------------------------------------------------------->
            <header class="header">
                
                <a href="index.php"><img src="Images/logo_gbaf.png"></a>
              
            </header>   

            <!--------------------------------------------------------------------------------FORMULAIRE INSCRIPTION-------------------------------------------------------------------------------->
            <div  class="conteneur-formulaire">
            <h2>Vérification de la réponse secrète</h2>

            <form  class="formulaire" method="POST" action="">
            <table>
               
         <!--------------------------------------------------------------------------------NOM D'UTILISATEUR-------------------------------------------------------------------------------->
        <tr>
                <td>
            <label class="label-recuperation-motdepasse" for="nomutilisateur">Nom d'utilisateur :</label>
                </td>

                <td>
            <!-- <input type="text" id="nomutilisateur" name="nomutilisateur"/> -->
            <p>
            <?php echo $_SESSION['nomutilisateur']; ?>
            </p>
                </td>
        </tr>

       

        <!--------------------------------------------------------------------------------QUESTION SECRÈTE-------------------------------------------------------------------------------->
        <tr>
                <td>
            <label class="label-recuperation-motdepasse" for="question">Question secrète :</label>
                </td>

                <td>
            <!-- <input type="text"  id="question" name="question"/> -->
            <p>
            <?php echo $_SESSION['question']; ?>
            </p>                                    
                </td>

        </tr>
         <!--------------------------------------------------------------------------------RÉPONSE A LA QUESTION SECRÈTE---------------------------------------------------------------------->
        <tr>
                <td>
            <label class="label-recuperation-motdepasse" for="reponse">Réponse à la question secrète :</label>
                </td>

                <td>
            <input type="text"  id="reponse" name="recup_reponse" /> 
                </td>
        </tr> 
        
    
     <!--------------------------------------------------------------------------------BOUTTON---------------------------------------------------------------------->
        <tr>
            <td></td>
            <td></br>
            <input type="submit" name="boutton-changer-mdp" value="Changer le mot de passe" class="boutton-formulaire"/>
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

     <!--------------------------------------------------------------------------------FIN DE LA SESSION-------------------------------------------------------------------------------->
        

        </body>

        </html>
