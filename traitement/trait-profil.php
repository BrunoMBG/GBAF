<?php
session_start();
include '../traitement/connexion-base-donnees.php';

//REDIRIGER VERS LA PAGE D'ACCUEIL POUR LES UTILISATEURS QUi NE SONT PAS CONNECTÉ
// if (!isset($_SESSION['id']))
// {
//    header('Location: ../index.php');
// }

//RECUPERATION DE DONNÉES POUR LE PROFIL D'UTILISATEUR
if(isset($_GET['id']) AND $_GET['id'] > 0)
{
$getid = intval($_GET['id']);
$requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
$requser->execute(array($getid));
$userinfo = $requser->fetch();

}

?>


<?php
