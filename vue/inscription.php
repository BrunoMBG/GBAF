<?php
 include '../traitement/trait-inscription-utilisateur.php'; //GESTION DE LA D'INSCRIPTION
 
?>

        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../style/style.css" />
            <title>Inscription</title>
        </head>

        <body>
             <!--------------------------------------------------------------------------------HEADER -------------------------------------------------------------------------------->
            <header class="header">                 
                 <a href="../index.php"><img src="../Images/logo_gbaf.png"></a>     
            </header>   
            
 

            <!--------------------------------------------------------------------------------FORMULAIRE INSCRIPTION-------------------------------------------------------------------------------->
            <div id="conteneur-formulaire-inscription">
            <h1>Inscription</h1>

            <form id="formulaire-inscription" method="POST" action="">
            <table>

            <!-- CHAMP NOM -->
                <tr>

                <td>
                    <label class="label-inscription" for="nom">Nom :</label>
                </td>

                <td>
                    <input type="text" class="champs" id="nom" name="nom" value="<?php if (isset($nom)) 
{
    echo $nom;
} ?>"/>
                </td>
        </tr>

             <!-- CHAMP PRENOM -->
        <tr>
                <td>
                    <label class="label-inscription" for="prenom">Prénom :</label>
                </td>

                <td>
                    <input type="text" class="champs" id="prenom" name="prenom" value="<?php if (isset($prenom))
{
    echo $prenom;
} ?>"/>
                </td>
        </tr>

             <!-- CHAMP NOM D'UTILISATEUR -->
        <tr>
                <td>
                    <label class="label-inscription" for="nomutilisateur">Nom d'utilisateur:</label>
                </td>

                <td>
                    <input type="text" class="champs" id="nomutilisateur" name="nomutilisateur" value="<?php if (isset($nomutilisateur))
{
    echo $nomutilisateur;
} ?>" />
                </td>
        </tr>

             <!-- CHAMP MOT DE PASSE -->
        <tr>
                <td>
                    <label class="label-inscription" for="mdp">Mot de passe:</label>
                </td>

                <td>
                    <input type="password" class="champs" id="mdp" name="mdp" />
                </td>

        </tr>

             <!-- CHAMP CONFIRMATION DU MOT DE PASSE -->
        <tr>
                <td>
                    <label class="label-inscription" for="mdp2">Confirmation du mot de passe:</label>
                </td>

                <td>
                    <input type="password" class="champs" id="mdp2" name="mdp2" />
                </td>

        </tr>

             <!-- CHAMP QUESTION SECRETE -->
        <tr>
                <td>
                    <label class="label-inscription" for="question">Question secrète :</label>
                </td>

                <td>
                    <input type="text"  class="champs" id="question" name="question" value="<?php if (isset($question))
{
    echo $question;
} ?>" />
                </td>

        </tr>

             <!-- CHAMP REPONSE A LA QUESTION SECRETE -->
        <tr>
                <td>
                    <label class="label-inscription" for="reponse">Réponse à la question secrète :</label>
                </td>

                <td>
                    <input type="text" class="champs" id="reponse" name="reponse" value="<?php if (isset($reponse))
{
    echo $reponse;
} ?>" />
                </td>
        </tr>
        
             <!-- BOUTON -->
        <tr>
            <td></td>
            <td>    </br>
                    <input type="submit" name="boutton_inscription" value="Je m'inscris" id="boutton-formulaire-inscription"/>
            </td>

        </tr>
        </table>
       
            </form>
            
         <!--------------------------------------------------------------------------------GESTION D'ERREUR-------------------------------------------------------------------------------->
            <?php
   if (isset($erreur))
   {       
   echo  '<font color="red">'.$erreur."</font>";
   }
   ?>
        </div>

        </body>

        </html>
