<?php

 include 'gestionserveur/gestion_verification_compte.php'; //GESTION DE LA FORGOT

//  if (!isset($_SESSION['id']))
// {
//    header('Location: index.php');
// }
 
// if(isset($_POST['recup_nomutilisateur']) AND empty($_POST['recup_nomutilisateur'])) {
//     header ('Location: http://localhost/GBAF/index.php');
//     // header ('Location: http://localhost/GBAF/page_partenaire.php?partenaire='.$getid);
// }
?>

<!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
            <link rel="stylesheet" href="style/style.css" />
            <title>Retrouvez votre compte</title>

        </head>

        <body>
             <!--------------------------------------------------------------------------------HEADER -------------------------------------------------------------------------------->
            
             <header class="header">
                  
                  <a href="index.php"><img src="Images/logo_gbaf.png"></a>
                
                 
             </header>   


              
        <!--------------------------------------------------------------------------------VERIFICATION QUE LE NOM D'UTILISATEUR EXISTE ---------------------------------------------------->
        <div class="conteneur-formulaire"> 
        <form class="formulaire" method ="post" >
                <h2>
                Retrouvez votre compte
                </h2>
            <div>

           
            <label> Nom d'utilisateur : </label>

        <input mtype="text" id="verification" name="recup_nomutilisateur" placeholder="Entre le nom d'utilisateur"/>  </br></br>

            </div>
            
        <input type="submit" name="recup_submit" value="Valider" id="boutton-verification-compte"/> </br></br>
       


<!--------------------------------------------------------------------------------GESTION D'ERREUR-------------------------------------------------------------------------------->
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

      
