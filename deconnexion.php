<?php
session_start(); // COMMENCER LA SESSION
$_SESSION = array(); // VIDER TOUTES LES VARIABLES DE SESSION
session_destroy(); //DÉTRUIRE TOUTES LES DONNÉES
header("Location: index.php"); //REDIRIGER L'UTILISATEUR VERS UNE AUTRE PAGE
?>