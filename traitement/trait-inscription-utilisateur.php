<?php
//Connexion à la base de données
include '../traitement/connexion-base-donnees.php';

//Vérifier si la variable existe
if (isset($_POST['boutton_inscription'])) 

    //Proteger les variables et les simplifier
{
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom_utilisateur = htmlspecialchars($_POST['nom_utilisateur']);
    $question = htmlspecialchars($_POST['question']);
    $reponse = htmlspecialchars($_POST['reponse']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);
    // $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
    // $mdp2 = password_hash($_POST['mdp2'], PASSWORD_DEFAULT);

    //Si les champs sont remplis
    if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['nom_utilisateur']) and !empty($_POST['mdp']) and !empty($_POST['mdp2']) and !empty($_POST['question']) and !empty($_POST['reponse']))

    {
        //Ajouter une limite de numero des caractères
        $nomlength = strlen($nom);
        if ($nomlength <= 255)

        // Sectionne toutes les entre de la table membres (nom de la base de données) avec le nom d'utilisateur pour vérifier si le nom d'utilisateur existe
        {
            $reqnom_utilisateur = $bdd->prepare("SELECT * FROM membres WHERE nom_utilisateur = ?");
            $reqnom_utilisateur->execute(array(
                $nom_utilisateur
            ));

            //Compter les numéro de colonne qu'existe
            $nom_utilisateurexist = $reqnom_utilisateur->rowCount();
            if ($nom_utilisateurexist == 0)
            //Le mot de passe et la confirmation de mot de passe doivent être égale
            {
                if ($mdp == $mdp2)

                {
                    //Si toutes les conditions sont respecter, les données sont ajouter dans la base de données
                    $insertmbr = $bdd->prepare("INSERT INTO membres(nom, prenom, nom_utilisateur, mot_de_passe	, question, reponse  ) VALUES (?, ?, ?, ?, ?, ?) ");
                    $insertmbr->execute(array(
                        $nom,
                        $prenom,
                        $nom_utilisateur,
                        $mdp,
                        $question,
                        $reponse,
                    ));

                    //Message qui s'affiche quand le compte à été créé et lien que rediriger vers la paga de connexion
                    $erreur = "Votre compte a bien été créé ! <a href=\"../index.php\">Se connecter</a>";
                }

                else
                
                //Message qui s'affiche quand les mots de passe ne correspondent pas
                {
                    $erreur = "Vos mots de passe ne correspondent pas !";
                }

            }
            else

             //Message qui s'affiche quand le nom d'utilisateur est déjà utilisée
            {
                $erreur = "Nom d'utilisateur déjà utiisée !";
            }
        }

        else
        //Message qui s'affiche quand les le nom dépasser 255 caractères
        {
            $erreur = "Votre nom ne doit pas dépasser 255 caractères !";
        }

    }

    else

    //Message qui s'affiche quand les champs ne sont pas remplis
    {   
        $erreur = "Tous les champs doivent être complétés !";
    }
}

?>