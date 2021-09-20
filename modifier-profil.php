 <!--------------------------------------------------------------------------------CONNEXION A LA BASE DE DONNEES-------------------------------------------------------------------------------->
 <?php
     include 'gestionserveur/connexion-base-donnees.php';
     include 'gestionserveur/gestion-modification-profil.php';
     
?>

<!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
            <link rel="stylesheet" href="style.css" />
            <title>Edition de mon profil</title>
        </head>

        <body>
 <!--------------------------------------------------------------------------------HEADER -------------------------------------------------------------------------------->
                    <?php
                    include 'header.php';
                    ?>  
 <!--------------------------------------------------------------------------------FORMULAIRE CONNEXION-------------------------------------------------------------------------------->
             <div id="page-modification"> 
                
             <h1>
                Edition de profil
                </h1>
                
            </div>

            <form class="" method="POST" action="">
               
           

           <div id="conteneur-formulaire-modification">

           <!-- <h2>Edition de profil</h2> -->

           <form method="POST" action="">
           <table  id="formulaire-modification">
        <tr>

                <td>
                <label class="label-formulaire-modification" >Nom :</label>
                </td>

                <td>
                <input type ="text" name ="newnom" value="<?php echo $_SESSION['nom']; ?>"/>
                </td>
        </tr>

        <tr>
                <td>
                <label class="label-formulaire-modification" >Prenom :</label>
                </td>

                <td>
                <input type ="text" name ="newprenom"  value="<?php echo $_SESSION['prenom']; ?>"/>
                </td>
        </tr>
        
        <tr>
                <td>
                <label class="label-formulaire-modification" >Nom d'utilisateur :</label>
                </td>

                <td>
                <input type ="text" name ="newnomutilisateur"  value="<?php echo $_SESSION['nomutilisateur']; ?>"/>
                </td>
        </tr>

        <tr>
                <td>
                <label class="label-formulaire-modification">Mot de Passe :</label>
                </td>

                <td>
                <input type ="password" name ="newmdp"/>
                </td>

        </tr>

        <tr>
                <td>
                <label class="label-formulaire-modification" >Confirmation du mot de passe :</label>
                </td>

                <td>
                <input type ="password" name ="newmdp2" />
                </td>

        </tr>

        <tr>
                <td>
                <label class="label-formulaire-modification" >Question Secrète :</label>
                </td>

                <td>
                <input type ="text" name ="newquestion" value="<?php echo $_SESSION['question']; ?>"/>
                </td>

        </tr>

        <tr>
                <td>
                <label class="label-formulaire-modification">Réponse à la question secrète :</label>
                </td>

                <td>
                <input type ="text" name ="newreponse" value="<?php echo $_SESSION['reponse']; ?>"/>
                </td>
        </tr>
        
        <tr>
            <td></td>
            <td id="test">
            <input type="submit" name="forminscription" value="Mettre à jour mon profil" id="button-modification"/>
            </td>

        </tr>
        </table>
       
            </form>

            </div>
           
          
<!-- 
           <p>
           
           <a id="mdp-oublie" href="#">Mot de passe oublié ?</a>
          </p>   -->

          <!-- <a href="inscription.php"> <input type="button" value="Créer un compte" class="boutton-connexion"></a> -->
          

            </form> </br>
            
 <!--------------------------------------------------------------------------------GESTION D'ERREUR-------------------------------------------------------------------------------->
      

      
           
             </div> 

        </div>
        <?php if(isset($msg)) { echo $msg; } ?>

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
