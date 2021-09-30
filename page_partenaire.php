
<?php 
session_start();
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=gbaf', 'root', 'root'); //CONNEXION A LA BASE DE DONNÉES
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }

            $req = $bdd->prepare('SELECT id, titre, contenu, logo, lien FROM partenaires WHERE id = ?');
            $req->execute(array($_GET['partenaire']));
            $donnees = $req->fetch();

         ?>

<?php
include 'head/head.php'; 
?>

<body>
     <!--------------------------------------------------------------------------------HEADER -------------------------------------------------------------------------------->
        <?php
            include 'header/header.php'
        ?>

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
              
               <?php echo htmlspecialchars($donnees['contenu']); ?>
               </p>
            </div>



    </section>
    <?php
$req->closeCursor(); 
?>
       <!--------------------------------------------------------------------------------SECTION DE COMMENTAIRE--------------------------------------------------------------------------->              
    <section class="section_formulaire">
               <div class="conteneur-commentaire">
                        <div class="conteneur-commentaire-like">
                     
                  <div>
                  <p>
                     X commentaires
                  </p>
                  </div>

                  <div class="bouton_commentaires_like">

                     <div class="nouveau_commentaire">
                  <input class="bouton_commentaires" type="button" value="Nouveau commentaire">
                  </div>
                     
                  <div class="likes">
                  <i class="fas fa-thumbs-up"></i>
                  <i class="fas fa-thumbs-down"></i> 
                  </div>

                  </div>

                        </div>


                  <div>
                     
                  </div>
                  <h2>
                     Ajouter un commentaire
                  </h2>
                   <!--------------------------------------------------------------------------------FORMULAIRE-------------------------------------------------------------------------->
                  <form class="conteneur-form-commentaire" method="POST">

                  <textarea name="commentaire" placeholder="Votre commentaire" class="form-commentaire"></textarea> </br></br>
                  
                  <input class="submit-form" type="submit" value="Poster mon commentaire" name="submit_commentaire"/> </br></br>

                  <?php
                  if(isset($commentaire_erreur)) { echo $commentaire_erreur; } 
                   ?> </br>
                  </form>
               </div>


    </section>

    </div>

    
    <?php
        include 'footer/footer.php';
    ?>

   
</body>
</html>



