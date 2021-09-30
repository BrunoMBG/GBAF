<?php
include 'gestionserveur/gestion-changer-mdp.php'; 
?>



<!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css" />
            <title>Changer le mot de passe</title>
        </head>

        <body>
             <!--------------------------------------------------------------------------------HEADER -------------------------------------------------------------------------------->
             <?php
            include 'header/header.php'
            ?>
 

            <!--------------------------------------------------------------------------------FORMULAIRE POUR CHANGER LE MOT DE PASSE-------------------------------------------------------------------------------->
            <div class="conteneur-formulaire">
            <h2>Choisissez votre nouveau mot de passe</h2>

            <form class="formulaire" method="POST" action="">
            <table>
        
         <!--------------------------------------------------------------------------------NOUVEAU MOT DE PASSE---------------------------------------------------------------------->
        <tr>
                <td>
            <label class="label-recuperation-motdepasse" for="recuperation-mdp"> Nouveau Mot de passe :</label>
                </td>

                <td>
            <input type="password" id="mdp" name="recup_mdp" />
                </td>

        </tr>

        <!--------------------------------------------------------------------------------CONFIRMATION DU MOT DE PASSE---------------------------------------------------------------------->
        <tr>
                <td>
            <label class="label-recuperation-motdepasse" for="recuperation-mdp2">Confirmation du mot de passe :</label>
                </td>

                <td>
            <input type="password" id="mdp2" name="recup_mdp2" /></br></br>
                </td>

        </tr> 

     <!--------------------------------------------------------------------------------BOUTTON---------------------------------------------------------------------->
        <tr>
            <td></td>
            <td>
            <input type="submit" name="boutton-changer-mdp" value="Changer le mot de passe" class="boutton-formulaire"/>
            </td>

        </tr>
        </table>    
       
        <?php  if(isset($message))
   {
       echo '<a href="index.php">   <input type=button value="Se connectar" class="boutton-formulaire" /> </a>';
   }?> 
  
            </form>   

     <!--------------------------------------------------------------------------------GESTION D'ERREUR-------------------------------------------------------------------------------->
            <?php
   if (isset($erreur))
   {       
   echo  '<font color="red">'.$erreur."</font>";
   }

  
   ?>
  

   <!-- <button class="boutton-formulaire"> Se connectar</button> -->
        </div>

    
      

        </body>

        <?php
        include 'footer/footer.php';
        ?>


        </html>
