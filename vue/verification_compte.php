<?php

 include '../traitement/trait_verification_compte.php'; //GESTION DE LA FORGOT


?>

<!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
            <link rel="stylesheet" href="../style/style.css" />
            <title>Retrouvez votre compte</title>

        </head>

        <body>
            
             <!-- HEADER -->
            
             <header class="header">                 
                  <a href="../index.php"><img src="../Images/logo_gbaf.png" alt="Logo du site"></a>                               
             </header>   


              
       
        <!-- VERIFICATION QUE LE NOM D'UTILISATEUR EXISTE  -->
        <div id="conteneur-formulaire-retrouvez-compte"> 
        <form id="formulaire-retrouvez-compte" method ="post" >
                <h2>
                Retrouvez votre compte
                </h2>
            <div>

           
            <label id="label-verification-compte"> Nom d'utilisateur : </label>

        <input mtype="text" id="verification" name="recup_nom_utilisateur" placeholder="Entre le nom d'utilisateur"/>  

            </div>
            
        <input type="submit" name="recup_submit" value="Valider" id="boutton-verification-compte"/> 
    
       
 -->


<!-- GESTION D'ERREUR- -->
        <?php 
        if (isset($erreur))
        {       
        echo  '<font color="red">'.$erreur."</font>";
        }
        ?>



        </form>

        </div>

         
            
      
      

        </body>

      

        </html>

      
