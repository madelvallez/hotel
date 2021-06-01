<?php 
/* récupération du paramètre */
    $arrivee = htmlspecialchars($_GET['date_arrivee']) ;
	$depart = htmlspecialchars($_GET['date_depart']) ;
	$place = htmlspecialchars($_GET['place']) ;

		/* définition de la variable $reponse_mot_du_titre  grâce à une requête SQL*/
    require "requete-recherche.php";

	

/* affichage des titres trouvés dans une liste déroulante de formulaire */
    require "affiche-recherche.php";

?>
