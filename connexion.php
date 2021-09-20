 <!--------------------------------------------------------------------------------CONNEXION A LA BASE DE DONNEES-------------------------------------------------------------------------------->
<?php
     include 'gestionserveur/connexion-base-donnees.php';
     include 'gestionserveur/gestion-connexion-utilisateur.php';
     
?>

<!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css" />
            <title>connexion</title>
        </head>

        <body>
 <!--------------------------------------------------------------------------------HEADER -------------------------------------------------------------------------------->
            <header class="header">
                  
                 <a href="connexion.php"><img src="Images/logo_gbaf.png"></a>
               
                
            </header>   
 <!--------------------------------------------------------------------------------FORMULAIRE CONNEXION-------------------------------------------------------------------------------->
             <div class="conteneur-formulaire-connexion-inscription"> 
            
            <form class="formulaire-connexion-inscription" method="POST" action="">
                <h1>
                    Connexion
                </h1>
           
            <input type ="text" name ="utilisateurconnexion" placeholder="Nom d'utilisateur"/> </br></br>
          
           <input type ="password" name ="mdpconnexion" placeholder="Mot de passe"/> </br></br>
          
           <input type ="submit" name ="formconnexion" value="Se connecter" class="boutton-connexion"/> </br>
           
          

           <p>
           
           <a id="mdp-oublie" href="#">Mot de passe oublié ?</a>
          </p>  

          <a href="inscription.php"> <input type="button" value="Créer un compte" class="boutton-connexion"></a>
          

            </form> </br>
            
 <!--------------------------------------------------------------------------------GESTION D'ERREUR-------------------------------------------------------------------------------->
            <?php 
        if (isset($erreur))
        {       
        echo  $erreur;
        }
        ?>

      
           
             </div> 

        </div>

      

        </body>

        </html>
