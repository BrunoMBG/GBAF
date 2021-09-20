<?php
session_start();
include 'gestionserveur/connexion-base-donnees.php'; //CONNEXION A LA BASE DE DONNÉES

if(isset($_SESSION['id']))

{
    //DEMANDER LES INFORMATIONS DANS LA BASE DE DONNÉES
    $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
    //EXÉCUTER LA DEMANDE
    $requser->execute(array($_SESSION['id']));
    //RECUPERATION DE DONNÉES
    $user = $requser->fetch();

    //MODIFIER LE NOM
    if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != $user['nom']) 
    {
        $newnom = htmlspecialchars($_POST['newnom']);
        $insertnom = $bdd->prepare("UPDATE membres SET nom = ? WHERE id = ?");
        $insertnom->execute(array($newnom, $_SESSION['id']));
        header('Location: profil.php?id='.$_SESSION['id']);
    }
    //MODIFIER LE PRENOM
    if(isset($_POST['newprenom']) AND !empty($_POST['newprenom']) AND $_POST['newprenom'] != $user['prenom']) 
    {
        $newprenom = htmlspecialchars($_POST['newprenom']);
        $insertprenom = $bdd->prepare("UPDATE membres SET prenom = ? WHERE id = ?");
        $insertprenom->execute(array($newprenom, $_SESSION['id']));
        header('Location: profil.php?id='.$_SESSION['id']);
    }
     //MODIFIER LE NOM D'UTILISATEUR
    if(isset($_POST['newnomutilisateur']) AND !empty($_POST['newnomutilisateur']) AND $_POST['newnomutilisateur'] != $user['nomutilisateur']) 
    {
        $newnomutilisateur = htmlspecialchars($_POST['newnomutilisateur']);
        $insertutilisateur = $bdd->prepare("UPDATE membres SET nomutilisateur = ? WHERE id = ?");
        $insertutilisateur->execute(array($newnomutilisateur, $_SESSION['id']));
        header('Location: profil.php?id='.$_SESSION['id']);
    }
     //MODIFIER LE MOT DE PASSE
     if(isset($_POST['newmdp']) AND !empty($_POST['newmdp']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2']))
    {
        $mdp = sha1 ($_POST['newmdp']);
        $mdp2 = sha1 ($_POST['newmdp2']);
        
        if($mdp == $mdp2)
        {
            $insetmdp = $bdd->prepare("UPDATE membres SET motdepasse = ? WHERE id = ?");
            $insetmdp->execute(array($mdp, $_SESSION['id']));
            header('Location: profil.php?id='.$_SESSION['id']);
        }
       else{
           $msg ="Vos mots de passe ne correspondent pas";
       }
    }
     //MODIFIER LA QUESTION SECRÈTE 
     if(isset($_POST['newquestion']) AND !empty($_POST['newquestion']) AND $_POST['newquestion'] != $user['question']) 
     {
         $newquestion = htmlspecialchars($_POST['newquestion']);
         $insertquestion = $bdd->prepare("UPDATE membres SET question = ? WHERE id = ?");
         $insertquestion->execute(array($newquestion, $_SESSION['id']));
         header('Location: profil.php?id='.$_SESSION['id']);
     }

     //MODIFIER LA RÉPONSE DE LA QUESTION SECRÈTE
     if(isset($_POST['newreponse']) AND !empty($_POST['newreponse']) AND $_POST['newreponse'] != $user['reponse']) 
     {
         $newreponse = htmlspecialchars($_POST['newreponse']);
         $insertreponse = $bdd->prepare("UPDATE membres SET reponse = ? WHERE id = ?");
         $insertreponse->execute(array($newreponse, $_SESSION['id']));
         header('Location: profil.php?id='.$_SESSION['id']);
     }



}

?>