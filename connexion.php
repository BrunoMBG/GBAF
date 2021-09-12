<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', 'root');

if(isset($_POST['formconnexion']))
{
    $utilisateurconnexion = htmlspecialchars($_POST['utilisateurconnexion']);
    $mdpconnexion = sha1($_POST['mdpconnexion']);
    if(!empty($utilisateurconnexion) AND !empty($mdpconnexion))
    {
        $requser = $bdd->prepare("SELECT * FROM inscription WHERE nomutilisateur = ? AND motdepasse = ?");
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
            header("Location: profil.php?id=".$_SESSION['id']);
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

<!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css" />
            <title>connexion</title>
        </head>

        <body>
            <header id="headerconnexion">
                <img src="Images/logo_gbaf.png">
                <p>
                    Le Groupement Banque Assurance Français
                </p>
            </header>   

            <div id="formulaireconnexion">
            <h2>Connectez-vous</h2>

            <form method="POST" action="">
            <label> Nom d'utilisateur</label></br>
           <input type ="text" name ="utilisateurconnexion" /> </br>

           <label> Mot de passe</label></br>
           <input type ="password" name ="mdpconnexion" /> </br>
           <input type ="submit" name ="formconnexion" value="Se connecter !"/>
           
       
            </form>
            </div>

            <div>
            <a href="inscription.php"><input type ="submit" name ="formconnexion" value="Créer un compte !"/></a>
            </div>

            <?php
if (isset($erreur))
{
    echo  $erreur;
}
?>
            
           


        </div>

        </body>

        </html>
