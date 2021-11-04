<?php
session_start();
include '../traitement/connexion-base-donnees.php';


?>

<?php

if(isset($_GET['type'],$_GET['id']) AND !empty($_GET['type']) AND !empty($_GET['id'])) {
   $getid = (int) $_GET['id'];
   $gett = (int) $_GET['type'];
   $sessionid = $_SESSION['id'];
   $check = $bdd->prepare('SELECT id FROM partenaires WHERE id = ?');
   $check->execute(array($getid));
   if($check->rowCount() == 1) {

      // Likes
      if($gett == 1) {
         $check_like = $bdd->prepare('SELECT id FROM likes WHERE id_partenaire = ? AND id_membre = ?');
         $check_like->execute(array($getid,$sessionid));
         $del = $bdd->prepare('DELETE FROM dislikes WHERE id_partenaire = ? AND id_membre = ?');
         $del->execute(array($getid,$sessionid));
         if($check_like->rowCount() == 1) {
            $del = $bdd->prepare('DELETE FROM likes WHERE id_partenaire = ? AND id_membre = ?');
            $del->execute(array($getid,$sessionid));
         } else {
            $ins = $bdd->prepare('INSERT INTO likes (id_partenaire, id_membre) VALUES (?, ?)');
            $ins->execute(array($getid, $sessionid));
         }
         // Dislikes
      } elseif($gett == 2) {
         $check_like = $bdd->prepare('SELECT id FROM dislikes WHERE id_partenaire = ? AND id_membre = ?');
         $check_like->execute(array($getid,$sessionid));
         $del = $bdd->prepare('DELETE FROM likes WHERE id_partenaire = ? AND id_membre = ?');
         $del->execute(array($getid,$sessionid));
         if($check_like->rowCount() == 1) {
            $del = $bdd->prepare('DELETE FROM dislikes WHERE id_partenaire = ? AND id_membre = ?');
            $del->execute(array($getid,$sessionid));
         } else {
            $ins = $bdd->prepare('INSERT INTO dislikes (id_partenaire, id_membre) VALUES (?, ?)');
            $ins->execute(array($getid, $sessionid));
         }
      }
      header ('Location: http://localhost/GBAF/vue/acteurs.php?partenaire='.$getid);
     
   } else {
      exit('Erreur fatale');
      

   }
} else {
   exit('Erreur fatale');
}