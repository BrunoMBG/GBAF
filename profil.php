<?php
// include 'gestionserveur/connexion-base-donnees.php'; //CONNEXION A LA BASE DE DONNÉES
include 'gestionserveur/gestion-profil.php'; //GESTION DE LA PAGE DE PROFIL

if (!isset($_SESSION['id']))
{
   header('Location: index.php');
}

?>

<!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
            <title>profil</title>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
            <link rel="stylesheet" href="style/style.css" />          
        </head>

        <body>
             <!--------------------------------------------------------------------------------HEADER -------------------------------------------------------------------------------->
            
    <header class="header">
               
               <a href="accueil.php"><img src="Images\logo_gbaf.png"></a>

            <div id="menu">
            
               <a href="profil.php?id=<?php echo $_SESSION['id']; ?>">
                  <i class="fas fa-user-alt icone-profil"></i>  

                  <p>
                  <?php echo $_SESSION['prenom']; ?>   <?php echo $_SESSION['nom']; ?>  
                  </p>
               </a>

               <a href="deconnexion.php"><i class="fas fa-sign-out-alt icone-deconnexion"></i></a>
            </div>
    </header>

              
            <!--------------------------------------------------------------------------------PROFIL -------------------------------------------------------------------------------->
            <div id="page-modification"> 
                
                <h1>
                  Profil
                </h1>
                   
               </div>
               
            <div id="nom-du-profil">
                <i class="fas fa-user-alt icone-page-profil"></i> 
            
            <h2>Profil de  <?php echo $_SESSION['prenom']; ?>   <?php echo $_SESSION['nom']; ?> </h2>
            </div>

            <div class="a-propos-de-moi"> 
                
                <h2>
                    À propos de moi
                </h2>
        
            <p>
                Nom : <?php echo $userinfo['nom']; ?>
            </p>
            
            <p>
                Prenom : <?php echo $userinfo['prenom']; ?>
            </p>

            <p>
                Nom d'utilisateur : <?php echo $userinfo['nomutilisateur']; ?>
            </p>
            
            </div>

            <div class="a-propos-de-moi"> 
                <h2>
                    Question Secrète
                </h2>
                <p>
                    Question secrète :  <?php echo $userinfo['question']; ?>
                </p>

                <p>
                    Réponse à la question secrète : <?php echo $userinfo['reponse']; ?>
                </p>
               
            
            </div>
             <!--------------------------------------------------------------------------------BUTTON POUR MODIFIER LE PROFIL ----------------------------------------------------------------->
            <div id="button-profil">
                <a href="modifier-profil.php"> <input button id="button-page-de-profil" type="button" value="Modifier"></a>          
            </div>
            
            <!--------------------------------------------------------------------------------FOOTER ----------------------------------------------------------------->
    <footer>
            <a href="#">
        <p>
           Mentions légales
        </p>
            </a>
       
            <a href="#">
        <p id="contactfooter">
           Contact
        </p>
            </a>
    </footer>


        </body>

      

        </html>

      
