<?php 

  $arrivee = htmlspecialchars($_GET['date_arrivee']) ;
	$depart = htmlspecialchars($_GET['date_depart']) ;
	$place = htmlspecialchars($_GET['place']) ;
	$idclient = htmlspecialchars($_GET['identifiant']);
	$chambre = htmlspecialchars($_GET['chambre']);
	


	/* définition de la variable $reponse_client_existe  grâce à une requête SQL*/
    require "requete-identificationClient.php";
	
	$client_existe = $reponse_client_existe[0]["COUNT(*)"];
	
	if ($client_existe=="1")//si le client existe
	{
		require "../rechercheReservation/affiche-confirmResa.php";
	}
	else
	{
		require "affiche-identificationClient.php";
	}
	
?>