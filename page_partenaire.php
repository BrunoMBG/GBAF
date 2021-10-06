
<?php 
session_start();

if (!isset($_SESSION['id']))
{
   header('Location: index.php');
}

      //CONNEXION A LA BASE DE DONNÉES
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=gbaf', 'root', 'root'); 
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
      //RECUPERER LES DONNES DE LA TABLE PARTENAIRE
            $req = $bdd->prepare('SELECT id, titre, contenu, logo, lien FROM partenaires WHERE id = ?');
            $req->execute(array($_GET['partenaire']));
            $donnees = $req->fetch();
      
      //RECUPERER LES DONNES DE LA TABLE LIKES
            $likes = $bdd->prepare('SELECT id FROM likes WHERE id_partenaire = ?');
            $likes->execute(array($_GET['partenaire']));
            $likes = $likes->rowCount();

       //RECUPERER LES DONNES DE LA TABLE DISLIKES      
            $dislikes = $bdd->prepare('SELECT id FROM dislikes WHERE id_partenaire = ?');
            $dislikes->execute(array($_GET['partenaire']));
            $dislikes = $dislikes->rowCount();
         
      //RECUPERER LES DONNES DE LA TABLE COMMENTAIRES    
            $num_commentaires = $bdd->prepare('SELECT * FROM commentaires WHERE commentaires.id_partenaire = ?');
            $num_commentaires->execute(array($_GET['partenaire']));
            $num_commentaires = $num_commentaires->rowCount();

         ?>

<!DOCTYPE html>
<html lang="fr">
   <head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
     
      <title> <?php echo htmlspecialchars($donnees['titre']); ?></title>

      <link rel="stylesheet" href="style/style.css" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
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
       <!--------------------------------------------------------------------------------PRESENTATION DES PARTENAIRES-------------------------------------------------------------------------------->
   <div class="page">
         <!--------------------------------------------------------------------------------PRESENTATION DU PARTENAIRE---------------------------------------------------------------------------->
        
  <section class="conteneur-page-partenaires">

         <div class="conteneur-image-partenaires"> 
            <!-- <img src="images\CDE.png"> -->

            <?php

                echo "<img src='./Images/".$donnees['logo']."' ><br>";
     
             ?>
         </div>

            <div>
               <h2> 
               <?php echo htmlspecialchars($donnees['titre']); ?>
               </h2>
               
               <p>
                  Plus d'information de la  <a href=" <?php echo htmlspecialchars($donnees['lien']); ?>">   <?php echo htmlspecialchars($donnees['titre']); ?></a>
               </p>

               <p>
              
               <?php echo nl2br(htmlspecialchars($donnees['contenu'])); ?>
               </p>
            </div>



    </section>
    <!-- Fin de la boucle -->
    <?php
   $req->closeCursor(); 
   ?>
       <!--------------------------------------------------------------------------------SECTION DE COMMENTAIRE--------------------------------------------------------------------------->   
       
       

    <section class="section_formulaire">
               <div class="conteneur-commentaire">
                        <div class="conteneur-commentaire-like">
                     
                  <div>
                  <p>
                     <?=  $num_commentaires ?> commentaires               
                  </p>
                  </div>

                  <div class="bouton_commentaires_like">

                     <div class="nouveau_commentaire">
                        <a href="#aller_EnBas"> <input class="bouton_commentaires" type="button" value="Nouveau commentaire"> </a>
                     </div>
                      <!--------------------------------------------------------------------------------LIKES ET DISLEKES------------------------------------------------------------------------->
                  <div class="likes">
                     <!-- Like -->
                      <a  href="gestionserveur/action.php?type=1&id=<?=  $_GET['partenaire'] ?>">
                      <i class="fas fa-thumbs-up likes_commentaires"></i></a>
                      <span class ="numero-like-dislike">  <?= $likes ?></span>
                     <!-- Dislike -->
                      <a href="gestionserveur/action.php?type=2&id=<?=$_GET['partenaire'] ?>">
                      <i class="fas fa-thumbs-down dislikes_commentaires"></i> </i></a> 
                       <span class ="numero-like-dislike"><?= $dislikes ?></span>
                  </div>

                  </div>

                        </div> </br>


                  <div>
            <!--------------------------------------------------------------------------------AFFICHER LES COMMENTAIRES-------------------------------------------------------------------------->
                  <?php

                  $req = $bdd->prepare('SELECT prenom, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') 
                  AS date_commentaire_fr FROM commentaires WHERE id_partenaire = ? ORDER BY id DESC');

                  $req->execute(array($_GET['partenaire']));

               while ($donnees = $req->fetch())
               {
               ?>
               <div class="commentaires"> 
            
              
                  <h3><strong><?php echo htmlspecialchars($donnees['prenom']); ?></strong> </h3>

                  <label><strong>le <?php  echo $donnees['date_commentaire_fr']; ?> </strong></label>

                  <p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>
                  
              
               
             
             
               </div>

               <?php
               } // Fin de la boucle des commentaires
               $req->closeCursor();
               ?>
                                
                 
                  <?php
                  
                  //Ajouter des commentaires
               
                  if(isset($_POST['submit_commentaire'])) { 
                     if(isset($_POST['commentaire']) AND !empty($_POST['commentaire']))
                     {
                        $commentaire =htmlspecialchars($_POST['commentaire']);
                        $prenom = $_SESSION['prenom'];
                        $date_commentaire = date('d/m/Y');
                   
                     $getid = $_GET['partenaire'];
                       
                     
                        if (isset($_SESSION['id'])) {
                           $insert_commentaire =$bdd->prepare('INSERT INTO  commentaires ( id_partenaire,  prenom, commentaire, date_commentaire) VALUES (?, ?, ?, NOW())');
                         
                           $insert_commentaire->execute(array( $getid ,$prenom,  $commentaire));
                        
                          
                        }
                     
                     }
                 

               }
            
                  ?>
                   <!--------------------------------------------------------------------------------FORMULAIRE-------------------------------------------------------------------------->
                  <form  id="aller_EnBas" class="conteneur-form-commentaire" method="POST"> 

                  <textarea   name="commentaire" placeholder="Votre commentaire" class="form-commentaire"></textarea> </br></br>
             
                     <input class="submit-form" type="submit" value="Poster mon commentaire" name="submit_commentaire"/></br></br>

                  <?php
                  if(isset($commentaire_erreur)) { echo $commentaire_erreur; } 
                   ?> </br>
                  </form>
               </div>


    </section>

    </div>

                <!--------------------------------------------------------------------------------FOOTER-------------------------------------------------------------------------->
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



