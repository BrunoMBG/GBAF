<!-- <?php
 include 'traitement/trait-connexion-utilisateur.php';
 
//  if (isset($_SESSION['id']))
//  {
//     header('Location: ./vue/accueil.php');
//  }


?> -->

<!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
           
            <title>Connexion</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style/style.css" />
        </head>

        <body>

 <!-- HEADER  -->
            <header class="header">                 
                 <a href="index.php"><img src="Images/logo_gbaf.png" alt="Logo du site"></a>
            </header>   
            

 <!-- FORMULAIRE CONNEXION- -->
             <div id="conteneur-formulaire-connexion"> 
            
            <form class="formulaire-connexion" method="POST" action="#">
                <h1>
                    Connexion
                </h1>
           
                <!-- CHAMP POUR TAPER LE NOM D'UTILISATEUR -->
            <input type ="text" name ="utilisateurconnexion" placeholder="Nom d'utilisateur" id="nom-utilisateur-connexion"/> 
        <!-- </br></br> -->


                <!-- CHAMP POUR TAPER LE MOT DE PASSE -->
           <input type ="password" name ="mdpconnexion" placeholder="Mot de passe" id="mdp-connexion"/> 
        <!-- </br></br> -->


                <!-- BOUTTON POUR SE COONECTER -->
           <input type ="submit" name ="boutton_connexion" value="Se connecter" id="boutton-formulaire-connexion-connecter"/> 
        <!-- </br> -->
           
          
                <!-- RECUPERATION DE MOT DE PASSE -->
            <p>          
                <a id="mdp-oublie" href="./vue/verification_compte.php">Mot de passe oublié ?</a>
            </p>  


                <!-- BOUTTON POUR CREER UN COMPTE -->
          <!-- <a href="./vue/inscription.php"> <input type="button" value="Créer un compte" id="boutton-formulaire_connexion-creer-compte"></a> -->
          <!-- <a href="./vue/inscription.php"> <button type="button" id="boutton-formulaire_connexion-creer-compte"> Créer un compte </button> </a> -->
       
          

            </form> 

            <form class="formulaire-connexion" action="./vue/inscription.php">
          <input id="boutton-formulaire_connexion-creer-compte" type="submit" value="Créer un compte">
            
          </form>
     
            

 <!-- GESTION D'ERREUR- -->
            <!-- <?php 
        if (isset($erreur))
        {       
        echo  '<font color="red">'.$erreur."</font>";
        }
            ?> -->

      
           
             </div> 
      

        </body>

        </html>
