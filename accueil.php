<?php
session_start();



?>


<!DOCTYPE html>
<html lang="fr">
   <head>
      <!-- <meta name="viewport" content="width=device-width">    -->
      <title>Accueil</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
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


  <!-------------------------------------------------------------------------------PRESENTATION -------------------------------------------------------------------------------->
  <div class="page"> 
      <div id="presentation">
       
            <h1>
               GBAF (Groupement Banque Assurance Français) </br></br>
            </h1>
           
            <h3>
               Le Groupement Banque Assurance Français (GBAF) est une fédérationreprésentant les 6 grands groupes français:
            </h3>
           
            <p>
               BNP Paribas / BPCE / Crédit Agricole / Crédit Mutuel-CIC / Société Générale / La Banque Postale.
            </p>
            <p>
               Même s’il existe une forte concurrence entre ces entités, elles vont toutes travailler
               de la même façon pour gérer près de 80 millions de comptes sur le territoire
               national.
               Le GBAF est le représentant de la profession bancaire et des assureurs sur tous
               les axes de la réglementation financière française. Sa mission est de promouvoir
               l'activité bancaire à l’échelle nationale. C’est aussi un interlocuteur privilégié des
               pouvoirs publics.
            </p>
            
            <img src="images/intro.jpg"!> 

       
    </div>

   <!------------------------------------------------------------------------------- PARTENAIRES -------------------------------------------------------------------------------->
      <section id="conteneur-partenaires"> 

         <h2>
            Acteurs et partenaires du système bancaire français
         </h2>

         <p>
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae pretium est. Duis id euismod mi. 
               Nulla ac vulputate elit. Sed aliquet congue eros id vehicula. In in quam rutrum massa laoreet ultricies. 
               Etiam placerat hendrerit cursus. Ut mollis, arcu et efficitur imperdiet, justo ante vulputate massa, ac ullamcorper ante nunc vel neque.
               Mauris semper rhoncus tristique. 
               Cras pharetra lectus nec risus auctor faucibus. Donec porta, magna in efficitur auctor, nisl velit semper risus, nec mollis elit tellus et arcu. 
               Maecenas felis urna, efficitur eu mi sed, consequat porttitor leo. Sed vestibulum consequat arcu, ut rhoncus augue tempor finibus. 
               Integer eu mollis ante. Vestibulum pellentesque tincidunt risus, sit amet eleifend augue auctor varius. Mauris eget pulvinar nisi. 
               Suspendisse potenti. Duis laoreet quam nunc, ut facilisis turpis congue id. Sed malesuada volutpat odio, sed imperdiet magna ultrices vel. 
               Morbi dignissim suscipit congue. Nunc risus turpis, molestie a fringilla ac, placerat quis libero. Maecenas dapibus sem et ligula congue sollicitudin. 
               Nullam ullamcorper mattis nisi, sit amet sollicitudin lectus. Nullam varius tellus augue, eu interdum leo lacinia vitae.
         </p>

         

            <?php 
                  //CONNEXION A LA BASE DE DONNEES
               include 'gestionserveur/connexion-base-donnees.php';

               //SÉLECTIONNER L'ID, TITRE, CONTENU ET LOGO DE LA TABLE PARTENAIRES
            $req = $bdd->query('SELECT id, titre, contenu, logo FROM partenaires');
               //FAIRE UNE BOUCLE ET RECUPERER LES DONNEES
            while ($donnees = $req->fetch())
            {
            ?>

               <!-- ARTICLES PARTENAIRES -->
         <article class="partenaires">

               <!-- LOGO -->
            <div> 
               <?php
                  echo "<img src='./Images/".$donnees['logo']."' ><br>";  
               ?>
            </div>
               <!-- TITRE ET CONTENU -->
            <div>

               <h2>
                  <?php echo htmlspecialchars($donnees['titre']); ?>
               </h2>

               <p>
                  <?= substr($donnees['contenu'], 0, 69) . '...'; ?>
               </p>
            
            </div>

               <!-- BOUTON LIRE LA SUITE, RECUPERER L'ID DE LA PAGE ET L'ID D'utilisateur -->
            <div>             
               <a href="page_partenaire.php?partenaire=<?php echo $donnees['id']; ?>&id=<?php echo $_SESSION['id']; ?>"><button class="buttonpartenaires">Lire la suite</button></a>
            </div>

         </article>


         <?php
               }   // FIN DE LA BOUCLE PARTENAIRES
             $req->closeCursor();
         ?>
      </section>

      </div>

   <!-------------------------------------------------------------------------------FOOTER -------------------------------------------------------------------------------->
     
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
