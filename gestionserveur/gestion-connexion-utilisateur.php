<?php
session_start();
include 'gestionserveur/connexion-base-donnees.php';

if(isset($_POST['formconnexion']))
{
    $utilisateurconnexion = htmlspecialchars($_POST['utilisateurconnexion']);
    $mdpconnexion = sha1($_POST['mdpconnexion']);
    if(!empty($utilisateurconnexion) AND !empty($mdpconnexion))
    {
        $requser = $bdd->prepare("SELECT * FROM membres WHERE nomutilisateur = ? AND motdepasse = ?");
        $requser->execute(array($utilisateurconnexion, $mdpconnexion));
        $userexist = $requser->rowCount();
        if($userexist == 1)
        {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['nom'] = $userinfo['nom'];
            $_SESSION['prenom'] = $userinfo['prenom'];
            $_SESSION['nomutilisateur'] = $userinfo['nomutilisateur'];
            $_SESSION['motdepasse'] = $userinfo['motdepasse'];
            $_SESSION['question'] = $userinfo['question'];
            $_SESSION['reponse'] = $userinfo['reponse'];
         
            header("Location: accueil.php?id=".$_SESSION['id']);
        }
        else
        {
            $erreur = "Mot de passe ou nom d'utilisateur incorrect !";
        }
    }
    else
    {
        $erreur ="Tous les champs doivent être complétés !";
    }
}
?>