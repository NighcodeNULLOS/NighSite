<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'CodeNight2018');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>