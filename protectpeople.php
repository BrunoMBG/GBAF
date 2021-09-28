<?php
 include 'gestionserveur/gestion-connexion-utilisateur.php';
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>CDE</title>
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
     <!--------------------------------------------------------------------------------PRESENTATION DU PARTENAIRE---------------------------------------------------------------------------->
   <div class="page">
  <section class="conteneur-page-partenaires">

         <div class="conteneur-image-partenaires"> 
            <img src="images\protectpeople.png">
         </div>

            <div>
               <h2> 
               Protectpeople finance la solidarité nationale.
                Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une protection sociale.

               </h2>
               
               <p>
                  Plus d'information de la  <a href="https://data.undp.org">Protectpeople</a>
               </p>

               <p>
            Chez Protectpeople, chacun cotise selon ses moyens et reçoit selon ses besoins.
            Proectecpeople est ouvert à tous, sans considération d’âge ou d’état de santé.
            Nous garantissons un accès aux soins et une retraite.
            Chaque année, nous collectons et répartissons 300 milliards d’euros.
            Notre mission est double :  </p>

            <ul>
                <li>
                sociale : nous garantissons la fiabilité des données sociales.
                </li>

                <li>
                économique : nous apportons une contribution aux activités économiques.


                </li>
            </ul>


             
            </div>



    </section>
    

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

   
</body>
</html>



