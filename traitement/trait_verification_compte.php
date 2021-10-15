<?php
//Commencer la SESSION
session_start();
//Connexion a la base de données
include '../traitement/connexion-base-donnees.php';

//Vérifier si la variable existe
if(isset($_POST['recup_submit']))

{
    //Proteger la variable et le simplifier
    $recup_nom_utilisateur = htmlspecialchars($_POST['recup_nom_utilisateur']);
   //Si le champ est remplis
    if(!empty($recup_nom_utilisateur))

    {
        //Sectionne toutes les entre de la table membres (nom de la base de données) avec le nom d'utilisateur pour vérifier si le nom d'utilisateur existe
        $requser = $bdd->prepare("SELECT * FROM membres WHERE nom_utilisateur = ?");
        $requser->execute(array($recup_nom_utilisateur));
        //Compter les numéro de colonne qu'existe
        $userexist = $requser->rowCount();
        if($userexist == 1)
        {
            //Recuperer les informations
            $userinfo = $requser->fetch();

            //Recevoir les informations dans les variables de SESSION
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['nom_utilisateur'] = $userinfo['nom_utilisateur'];
            $_SESSION['mot_de_passe	'] = $userinfo['mot_de_passe	'];
            $_SESSION['question'] = $userinfo['question'];
            $_SESSION['reponse'] = $userinfo['reponse'];
            
            //Lien pour rediriger vers une autre page si l'id existe
            header("Location: ../vue/verification-reponse.php?id=".$_SESSION['id']);
        }
        else
        //Message qui s'affiche quand le nom d'utilisateur n'existe pas
        {
            $erreur = "Nom d'utilisateur n'existe pas !";
        }
    }
    else
    //Message qui s'affiche quand les champs ne sont pas complétés
    {
        $erreur ="Tous les champs doivent être complétés !";
    }
}
?>
