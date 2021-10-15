 <!--------------------------------------------------------------------------------CONNEXION A LA BASE DE DONNEES-------------------------------------------------------------------------------->
 <?php

     include '../traitement/trait-modification-profil.php';
     
//      if (!isset($_SESSION['id']))
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
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
            <link rel="stylesheet" href="../style/style.css" />
            <title>Edition de mon profil</title>
        </head>

        <body>
 <!--------------------------------------------------------------------------------HEADER -------------------------------------------------------------------------------->

              
               
        <header class="header">
               
               <a href="accueil.php"><img src="../Images\logo_gbaf.png"></a>

            <div id="menu">
            
               <a href="profil.php?id=<?php echo $_SESSION['id']; ?>">
                  <i class="fas fa-user-alt icone-profil"></i> 

                  <p>
                  <?php echo $_SESSION['prenom']; ?>   <?php echo $_SESSION['nom']; ?>  
                  </p>
               </a>

               <a href="../traitement/deconnexion.php"><i class="fas fa-sign-out-alt icone-deconnexion"></i></a>
            </div>
        </header>

                
        <!--------------------------------------------------------------------------------TITRE DE LA PAGE------------------------------------------------------------->
        <main class="page"> 

             <div id="page-modification"> 
                
                <h1>
                Edition de profil
                </h1>
                
            </div>

            <!--------------------------------------------------------------------------------FORMULAIRE DE MODIFICATION DE DONNÉES------------------------------------------------------------->
            <form class="" method="POST" action="">
               
           

           <div id="conteneur-formulaire-modification">

           <form method="POST" action="">
           <table  id="formulaire-modification">
        <tr>
                <!-- MODIFICATION DU NOM -->
                <td>
                        <label class="label-formulaire-modification" >Nom :</label>
                </td>

                <td>
                        <input type ="text" class="champ-modification-profil" name ="newnom" value="<?php echo $_SESSION['nom']; ?>"/>
                </td>
        </tr>

                 <!-- MODIFICATION DU PRENOM -->
        <tr>
                <td>
                        <label class="label-formulaire-modification" >Prenom :</label>
                </td>

                <td>
                        <input type ="text" class="champ-modification-profil" name ="newprenom"  value="<?php echo $_SESSION['prenom']; ?>"/>
                </td>
        </tr>
                 <!-- MODIFICATION DU NOM D'UTILISATEUR -->
        <tr>
                <td>
                        <label class="label-formulaire-modification" >Nom d'utilisateur :</label>
                </td>

                <td>
                        <input type ="text" class="champ-modification-profil" name ="newnom_utilisateur"  value="<?php echo $_SESSION['nom_utilisateur']; ?>"/>
                </td>
        </tr>
                 <!-- MODIFICATION DU MOT DE PASSE-->
        <tr>
                <td>
                        <label class="label-formulaire-modification">Mot de Passe :</label>
                </td>

                <td>
                        <input type ="password" class="champ-modification-profil" name ="newmdp"/>
                </td>

        </tr>
                 <!-- CONFIRMATION DU MOT DE PASSE -->
        <tr>
                <td>
                        <label class="label-formulaire-modification" >Confirmation du mot de passe :</label>
                </td>

                <td>
                        <input type ="password" class="champ-modification-profil" name ="newmdp2" />
                </td>

        </tr>
                <!-- MODIFICATION DE LA QUESTION SECRETE -->
        <tr>
                <td>
                        <label class="label-formulaire-modification" >Question Secrète :</label>
                </td>

                <td>
                        <input type ="text" class="champ-modification-profil" name ="newquestion" value="<?php echo $_SESSION['question']; ?>"/>
                </td>

        </tr>
               
                <!-- MODIFICATION DE LA REPONSE SECRETE -->
        <tr>
                <td>
                        <label class="label-formulaire-modification">Réponse à la question secrète :</label>
                </td>

                <td>
                        <input type ="text" class="champ-modification-profil" name ="newreponse" value="<?php echo $_SESSION['reponse']; ?>"/>
                </td>
        </tr>
                <!-- BUTTON -->
        <tr>
            <td></td>
            <td>
                <input type="submit" name="forminscription" value="Mettre à jour mon profil" id="button-modification"/>
            </td>

        </tr>
        </table>
       
            </form>

            </div>

       
           
          
          

            </form> 

</main>
            
 <!--------------------------------------------------------------------------------GESTION D'ERREUR-------------------------------------------------------------------------------->
      

      
           
             <!-- </div> 

        </div> -->
        <?php if(isset($msg)) { echo $msg; } ?>
 <!--------------------------------------------------------------------------------FOOTER-------------------------------------------------------------------------------->
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
