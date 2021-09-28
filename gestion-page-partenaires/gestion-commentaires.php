<?php
//Commencer la SESSION
// session_start();
//Connexion a la base de données
// include 'gestionserveur/connexion-base-donnees.php';
// $bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', 'root');
// // echo 'ok';

// if(isset($_GET['id']) AND !empty($_GET['id'])) {
// $getid = htmlspecialchars($_GET['id']);

// $article = $bdd->prepare("SELECT * FROM commentaire WHERE id = ?");
// $article->execute(array($getid));
// $article = $article->fetch();

// if(isset($_POST['submit_commentaire']))  {
//     if(isset($_POST['commentaire']) AND !empty($_POST['commentaire']))
//     {
        
//     }


// else
// {
//     $commentaire_erreur ="Tous les champs doivent être complétés";
// }

// }

// }
?>
<!-- 

<?php
// session_start();
// include 'gestionserveur/connexion-base-donnees.php';


// include 'gestion-page-partenaires/gestion-commentaires.php';

// $bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', 'root');
// if(isset($_GET['id']) AND !empty($_GET['id'])) {

//    $article = $bdd->prepare("SELECT * FROM commentaires WHERE id = ?");
//    $article->execute(array($_SESSION['id']));
//    $article = $article->fetch();

//   if(isset($_POST['submit_commentaire'])){ 

//       if(isset($_POST['commentaire']) AND !empty($_POST['commentaire']
//       )) {
//          $commentaire = htmlspecialchars($_POST['commentaire']);

//          // if(strlen($nom) < 255)
//          if(isset($_GET['id'])) {

//                $ins = $bdd->prepare('INSERT INTO commentaires (date_time, commentaire, id_article, id) VALUES(NOW(), ?, ?, ?');;
//                $ins->execute(array($date_time, $commentaire, $id_article, $_SESSION['id']));
//                $commentaire_erreur ="Votre commentaire à bien été posté";
//          }
//          else{

//          }

//       } else
//       {
//          $commentaire_erreur ="Tous les champs doivent être complétés";
//      }
//    }

// if(isset($_POST['submit_commentaire']))
// $commentaire = htmlspecialchars($_POST['commentaire']);{
//    $ins = $bdd->prepare('INSERT INTO commentaires (date_time, commentaire, id_article, id) VALUES(NOW(), ?, ?, ?');;
//                   $ins->execute(array($commentaire, $id_article, $_SESSION['id']));
//                   $commentaire_erreur ="Votre commentaire à bien été posté";
// } -->

?>