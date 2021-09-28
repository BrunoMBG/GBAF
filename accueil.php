 <!--------------------------------------------------------------------------------CONNEXION A LA BASE DE DONNEES-------------------------------------------------------------------------------->
<?php
session_start();
include 'gestionserveur/connexion-base-donnees.php';

//REDIRIGER VERS LA PAGE D'ACCUEIL POUR LES UTILISATEURS QUi NE SONT PAS CONNECTÉ

if (!isset($_SESSION['id']))
{
   header('Location: index.php');
}



?>


<!DOCTYPE html>
<html lang="fr">
   <head>
      <link rel="stylesheet" href="style.css" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
      <title>Accueil</title>
   </head>
   <body>
   <!--------------------------------------------------------------------------------HEADER -------------------------------------------------------------------------------->

         <header class="header">
               
               <a href="accueil.php"><img src="Images/logo_gbaf.png"></a>

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

         <article class="partenaires">
            <div> 
               <img src="Images/CDE.png">
            </div>
            <div>
               <h3>
                  CDE
               </h3>
               <p>
                  Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriale...
               </p>
            </div>
            <div>
               
               <a href="cde.php?id=$_SESSION['id]"><button class="buttonpartenaires">Lire la suite</button></a>
               
            </div>
         </article>

       
         <article class="partenaires">
         <div> 
            <img src="Images/protectpeople.png">
        </div>
            <div>
               <h3>
                  Protectpeople
               </h3>
               <p>
                  Protectpeople finance la solidarité nationale....
               </p>
            </div>
            <div>
            <!-- <button class="buttonpartenaires">Lire la suite</button> -->

            <a href="protectpeople.php?id=$_SESSION['id]"><button class="buttonpartenaires">Lire la suite</button></a>
            
            </div>
         </article>


         <article class="partenaires">
            <div>
            <img src="Images/Dsa_france.png">
            </div>
            <div>
            <h3>
               DSA France
            </h3>
            <p>
               Dsa France accélère la croissance du territoire et s’engage av...
            </p>
            </div>
            <!-- <button class="buttonpartenaires">Lire la suite</button> -->
            
            <a href=" dsa_france.php?id=$_SESSION['id]"><button class="buttonpartenaires">Lire la suite</button></a>

           
         </article>

         <article class="partenaires">
            <div>
            <img src="Images/formation_co.png">
            </div>
            <div>
            <h3>
               Formation&Co
            </h3>
            <p>
               Formation&co est une association française présente sur tout le territoire. Nous proposons à des...
            </p>
         </div>
            <!-- <button class="buttonpartenaires">Lire la suite</button> -->
            <a href="formation&co.php?id=$_SESSION['id]"><button class="buttonpartenaires">Lire la suite</button></a>

            
         </article>
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
