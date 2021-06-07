<?php    /*   CONNEXION A LA BASE*/
try
{   
    $bdd = new PDO("mysql:host=localhost;dbname=hotel;charset=utf8", 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	//var_dump($bdd);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
