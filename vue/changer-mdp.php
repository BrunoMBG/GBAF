<?php

include '../traitement/trait-changer-mdp.php'; 

// S'IL N'A PAS UNE SESSION DE, L'UTILISATEUR EST DIRIGÉ VERS LA PAGE DE CONNEXION
// if (!isset($_SESSION['id']))
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
            <title>Changer le mot de passe</title>
        </head>

        <body>
             <!--------------------------------------------------------------------------------HEADER -------------------------------------------------------------------------------->
             <header class="header">  
                  <a href="../index.php"><img src="../Images/logo_gbaf.png"></a>
             </header>   

            <!--------------------------------------------------------------------------------FORMULAIRE POUR CHANGER LE MOT DE PASSE-------------------------------------------------------------->

            <div id="conteneur-formulaire-changer-mdp">
                <h2>Choisissez votre nouveau mot de passe</h2>

            <form id="formulaire-changer-mdp" method="POST" action="">

            <table>
        
         <!--------------------------------------------------------------------------------NOUVEAU MOT DE PASSE---------------------------------------------------------------------->
        <tr>
                <td>
                    <label class="label-changer-mdp" for="recuperation-mdp"> Nouveau Mot de passe :</label>
                </td>

                <td>
                    <input type="password" class="champ_mdp" id="mdp" name="recup_mdp" />
                </td>

        </tr>

        <!--------------------------------------------------------------------------------CONFIRMATION DU MOT DE PASSE---------------------------------------------------------------------->
        <tr>
                <td>
                    <label class="label-changer-mdp" for="recuperation-mdp2">Confirmation du mot de passe :</label>
                </td>

                <td>
                    <input type="password" class="champ_mdp" id="mdp2" name="recup_mdp2" /></br></br>
                </td>

        </tr> 

     <!--------------------------------------------------------------------------------BOUTTON---------------------------------------------------------------------->
        <tr>
            <td></td>

            <td>
                    <input type="submit" name="boutton-changer-mdp" value="Changer le mot de passe" id="boutton-formulaire-changer_mdp"/>
            </td>

        </tr>

        </table>    
        <!-- BOUTON QUI APPARAIT APRES AVOIR CHANGER LE MOT DE PASSE -->
        <?php  if(isset($message))
   {
       echo '<a href="../index.php">   <input type=button value="Se connectar" id="boutton-formulaire-changer_mdp" /> </a>';
   }    ?> 
  
            </form>   

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
