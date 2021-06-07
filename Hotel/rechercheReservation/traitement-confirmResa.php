<?php 
/* récupération du paramètre */
    $arrivee = htmlspecialchars($_GET['date_arrivee']) ;
	$depart = htmlspecialchars($_GET['date_depart']) ;
	$idclient = htmlspecialchars($_GET['client']);
	$chambre = htmlspecialchars($_GET['chambre']);
	
    require "requete-confirmResa.php";
	
	require "affiche-resaFini.php";
	
?>