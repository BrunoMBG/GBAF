<?php

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', 'root');

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
            $reqnomutilisateur = $bdd->prepare("SELECT * FROM inscription WHERE nomutilisateur = ?");    
            $reqnomutilisateur->execute(array($nomutilisateur));
            $nomutilisateurexist = $reqnomutilisateur->rowCount();
            if ($nomutilisateurexist == 0)
            {
            if ($mdp == $mdp2)

            {
                $insertmbr = $bdd->prepare("INSERT INTO inscription(nom, prenom, nomutilisateur, motdepasse, question, reponse  ) VALUES (?, ?, ?, ?, ?, ?) ");
                $insertmbr->execute(array(
                    $nom,
                    $prenom,
                    $nomutilisateur,
                    $mdp,
                    $question,
                    $reponse,
                ));
                $erreur = "Votre compte a bien été créé !";
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

        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Inscription</title>
        </head>

        <body>
            <header>
                <img src="Images/logo_gbaf.png">
                <p>
                    Le Groupement Banque Assurance Français
                </p>
            </header>   

            <div>
            <h2>Inscription</h2>

            <form method="POST" action="">
            <table>
                <tr>

                <td>
            <label for="nom">Nom :</label>
                </td>

                <td>
            <input type="text" id="nom" name="nom" value="<?php if (isset($nom))
{
    echo $nom;
} ?>"/>
                </td>
        </tr>

        <tr>
                <td>
            <label for="prenom">Prénom :</label>
                </td>

                <td>
            <input type="text" id="prenom" name="prenom" value="<?php if (isset($prenom))
{
    echo $prenom;
} ?>"/>
                </td>
        </tr>
        
        <tr>
                <td>
            <label for="nomutilisateur">Nom d'utilisateur:</label>
                </td>

                <td>
            <input type="text" id="nomutilisateur" name="nomutilisateur" value="<?php if (isset($nomutilisateur))
{
    echo $nomutilisateur;
} ?>" />
                </td>
        </tr>

        <tr>
                <td>
            <label for="mdp">Mot de passe:</label>
                </td>

                <td>
            <input type="password" id="mdp" name="mdp" />
                </td>

        </tr>

        <tr>
                <td>
            <label for="mdp2">Confirmation du mot de passe:</label>
                </td>

                <td>
            <input type="password" id="mdp2" name="mdp2" />
                </td>

        </tr>

        <tr>
                <td>
            <label for="question">Question secreète :</label>
                </td>

                <td>
            <input type="text"  id="question" name="question" value="<?php if (isset($question))
{
    echo $question;
} ?>" />
                </td>

        </tr>

        <tr>
                <td>
            <label for="reponse">Réponse à la question secrète :</label>
                </td>

                <td>
            <input type="text"  id="reponse" name="reponse" value="<?php if (isset($reponse))
{
    echo $reponse;
} ?>" />
                </td>
        </tr>
        
        <tr>
            <td></td>
            <td>
            <input type="submit" name="forminscription" value="Je m'inscris" />
            </td>

        </tr>
        </table>
       
            </form>
            
            <?php
if (isset($erreur))
{
    echo $erreur;
}
?>
        </div>

        </body>

        </html>
