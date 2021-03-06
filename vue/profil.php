<?php
include '../traitement/trait-profil.php'; //GESTION DE LA PAGE DE PROFIL


?>

<!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
            <title>profil</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
            <link rel="stylesheet" href="../style/style.css" />          
        </head>

        <body>
        
             <!-- HEADER -->
            
    <header class="header">
               
               <a href="accueil.php"><img src="../Images/logo_gbaf.png" alt="Logo du site"></a>

            <nav id="menu">
            
               <a href="profil.php?id=<?php echo $_SESSION['id']; ?>">
                  <i class="fas fa-user-alt icone-profil"></i>  

                  <p>
                  <?php echo $_SESSION['prenom']; ?>   <?php echo $_SESSION['nom']; ?>  
                  </p>
               </a>

               <a href="../traitement/deconnexion.php"><i class="fas fa-sign-out-alt icone-deconnexion"></i></a>
            </nav>
    </header>

              
       
            <!-- PROFIL -->
            
  <main class="page"> 
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
                    ?? propos de moi
                </h2>
        
            <p>
                Nom : <?php echo $userinfo['nom']; ?>
            </p>
            
            <p>
                Prenom : <?php echo $userinfo['prenom']; ?>
            </p>

            <p>
                Nom d'utilisateur : <?php echo $userinfo['nom_utilisateur']; ?>
            </p>
            
            </div>

            <div class="a-propos-de-moi"> 
                <h2>
                    Question Secr??te
                </h2>
                <p>
                    Question secr??te :  <?php echo $userinfo['question']; ?>
                </p>

                <p>
                    R??ponse ?? la question secr??te : <?php echo $userinfo['reponse']; ?>
                </p>
               
            
            </div>
      
             <!-- BUTTON POUR MODIFIER LE PROFIL  -->
            <div id="button-profil">
                <!-- <a href="modifier-profil.php"> <input type=button id="button-page-de-profil" type="button" value="Modifier"></a>           -->
                <form action="modifier-profil.php">
                    <button id="button-page-de-profil"> Modifier </button>
            </form>
            
            </div>
         
            
          
  </main>
    <!-- FOOTER  -->
    <footer>
            <a href="#">
        <p>
           Mentions l??gales
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

      
