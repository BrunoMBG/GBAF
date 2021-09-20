 <!--------------------------------------------------------------------------------CONNEXION A LA BASE DE DONNEES-------------------------------------------------------------------------------->
<?php
session_start();
include 'gestionserveur/connexion-base-donnees.php';
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

      <?php
      include 'header.php';
      ?>

  <!-------------------------------------------------------------------------------PRESENTATION -------------------------------------------------------------------------------->
  <div id="page"> 
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
               <button class="buttonpartenaires">Lire la suite</button>
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
            <button class="buttonpartenaires">Lire la suite</button>
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
            <button class="buttonpartenaires">Lire la suite</button>
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
            <button class="buttonpartenaires">Lire la suite</button>
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
