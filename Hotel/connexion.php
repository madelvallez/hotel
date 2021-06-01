<?php    /*   CONNEXION A LA BASE*/
try
{   
    $bdd = new PDO("mysql:host=10.10.20.25;dbname=hotel;charset=utf8", 'nsi', 'nsi', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	//var_dump($bdd);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
