<?php
include 'gestionserveur/connexion-base-donnees.php';

if (isset($_POST['forminscription']))

{
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $nomutilisateur = htmlspecialchars($_POST['nomutilisateur']);
    $question = htmlspecialchars($_POST['question']);
    $reponse = htmlspecialchars($_POST['reponse']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);

    if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['nomutilisateur']) and !empty($_POST['mdp']) and !empty($_POST['mdp2']) and !empty($_POST['question']) and !empty($_POST['reponse']))

    {

        $nomlength = strlen($nom);
        if ($nomlength <= 255)
        {
            $reqnomutilisateur = $bdd->prepare("SELECT * FROM membres WHERE nomutilisateur = ?");
            $reqnomutilisateur->execute(array(
                $nomutilisateur
            ));
            $nomutilisateurexist = $reqnomutilisateur->rowCount();
            if ($nomutilisateurexist == 0)
            {
                if ($mdp == $mdp2)

                {
                    $insertmbr = $bdd->prepare("INSERT INTO membres(nom, prenom, nomutilisateur, motdepasse, question, reponse  ) VALUES (?, ?, ?, ?, ?, ?) ");
                    $insertmbr->execute(array(
                        $nom,
                        $prenom,
                        $nomutilisateur,
                        $mdp,
                        $question,
                        $reponse,
                    ));
                    $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                }

                else

                {
                    $erreur = "Vos mots de passe ne correspondent pas !";
                }

            }
            else
            {
                $erreur = "Nom d'utilisateur déjà utiisée !";
            }
        }

        else

        {
            $erreur = "Votre nom ne doit pas dépasser 255 caractères !";
        }

    }

    else

    {
        $erreur = "Tous les champs doivent être complétés !";
    }
}

?>