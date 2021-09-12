<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', 'root');

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
$getid = intval($_GET['id']);
$requser = $bdd->prepare('SELECT * FROM inscription WHERE id = ?');
$requser->execute(array($getid));
$userinfo = $requser->fetch();


?>

<!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css" />
            <link href="main.css" rel="style.css">
            <title>connexion</title>

        </head>

        <body>
            <header>
                <img src="Images/logo_gbaf.png">
                <p>
                    Le Groupement Banque Assurance Français
                </p>
            </header>   

            <div>
            <h2>Profil de <?php echo $userinfo['nomutilisateur']?></h2>
            
            <p>
            nom = <?php echo $userinfo['nom']?>
            </p>
            prenom = <?php echo $userinfo['prenom']?>
            <p>
            </p>
        
            <?php
            if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
            {
                ?>
                <a href="#">Editer mon profil</a>
                <a href="deconnexion.php">Se déconnecter</a>
                <?php
                
            }
            ?>
            
           


        </div>

        </body>

        </html>

        <?php
        }
        ?>
