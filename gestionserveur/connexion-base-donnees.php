<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=gbaf', 'root', 'root'); //CONNEXION A LA BASE DE DONNÉES
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>