<?php
//Commencer la SESSION
session_start();

//Connexion a la base de données
include 'traitement/connexion-base-donnees.php';

//Vérifier si la variable existe
if(isset($_POST['boutton_connexion']))
{
   
     //Proteger les variables et les simplifier
    $utilisateurconnexion = htmlspecialchars($_POST['utilisateurconnexion']);
    // $mdpconnexion = sha1($_POST['mdpconnexion']);
    $mdpconnexion = hash('sha256', $_POST['mdpconnexion']);
    // $mdpconnexion = password_hash($_POST['mdpconnexion'], PASSWORD_DEFAULT);

     //Si le champ est remplis
    if(!empty($utilisateurconnexion) AND !empty($mdpconnexion))
    {
         
         //Vérifier si le nom d'utilisateur et le mot de passe existe dans la base de données
        $requser = $bdd->prepare("SELECT * FROM utilisateurs WHERE nom_utilisateur = ? AND mot_de_passe	 = ?");
        $requser->execute(array($utilisateurconnexion, $mdpconnexion));

         //Compter les numéro de colonne qu'existe
        $userexist = $requser->rowCount();
        if($userexist == 1)
        {   
             //Recuperer les informations
            $userinfo = $requser->fetch();

            //Recevoir les informations dans les variables de SESSION
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['nom'] = $userinfo['nom'];
            $_SESSION['prenom'] = $userinfo['prenom'];
            $_SESSION['nom_utilisateur'] = $userinfo['nom_utilisateur'];
            $_SESSION['mot_de_passe	'] = $userinfo['mot_de_passe	'];
            $_SESSION['question'] = $userinfo['question'];
            $_SESSION['reponse'] = $userinfo['reponse'];
            
             //Lien pour rediriger vers une autre page si l'id existe
            header("Location: ./vue/accueil.php?id=".$_SESSION['id']);
        }
        else
        {    //Message qui s'affiche quand le nom d'utilisateur ou le mot de passe ne sont pas correct
            $erreur = "Mot de passe ou nom d'utilisateur incorrect !";
        }
    }
    else
    {   //Message qui s'affice quand tous les champs ne sont pas remplis
        $erreur ="Tous les champs doivent être complétés !";
    }
}
?>



