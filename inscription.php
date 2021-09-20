<?php
 include 'gestionserveur/connexion-base-donnees.php'; //CONNEXION A LA BASE DE DONNÉES
 include 'gestionserveur/gestion-inscription-utilisateur.php'; //GESTION DE LA D'INSCRIPTION
 
?>

        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css" />
            <title>Inscription</title>
        </head>

        <body>
             <!--------------------------------------------------------------------------------HEADER -------------------------------------------------------------------------------->
            <header class="header">
                
                <a href="connexion.php"><img src="Images/logo_gbaf.png"></a>
              
            </header>   

            <!--------------------------------------------------------------------------------FORMULAIRE INSCRIPTION-------------------------------------------------------------------------------->
            <div class="conteneur-formulaire-connexion-inscription">
            <h2>Inscription</h2>

            <form class="formulaire-connexion-inscription" method="POST" action="">
            <table>
                <tr>

                <td>
            <label class="label-inscription" for="nom">Nom :</label>
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
            <label class="label-inscription" for="prenom">Prénom :</label>
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
            <label class="label-inscription" for="nomutilisateur">Nom d'utilisateur:</label>
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
            <label class="label-inscription" for="mdp">Mot de passe:</label>
                </td>

                <td>
            <input type="password" id="mdp" name="mdp" />
                </td>

        </tr>

        <tr>
                <td>
            <label class="label-inscription" for="mdp2">Confirmation du mot de passe:</label>
                </td>

                <td>
            <input type="password" id="mdp2" name="mdp2" />
                </td>

        </tr>

        <tr>
                <td>
            <label class="label-inscription" for="question">Question secreète :</label>
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
            <label class="label-inscription" for="reponse">Réponse à la question secrète :</label>
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
            <input type="submit" name="forminscription" value="Je m'inscris" class="boutton-connexion"/>
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
