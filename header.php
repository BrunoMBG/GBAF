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