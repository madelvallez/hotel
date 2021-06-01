<?php 
/* récupération du paramètre */
    $arrivee = htmlspecialchars($_GET['date_arrivee']) ;
	$depart = htmlspecialchars($_GET['date_depart']) ;
	$place = htmlspecialchars($_GET['place']) ;
	$idclient = htmlspecialchars($_GET['idClient']);

		/* définition de la variable $reponse_mot_du_titre  grâce à une requête SQL*/
    require "requete-identificationClient.php";

	if ($reponse_client_existe=1)//si le client existe
	{
		require "affiche-identificationClient.php";
	}
	else

/* affichage des titres trouvés dans une liste déroulante de formulaire */
    

?>
