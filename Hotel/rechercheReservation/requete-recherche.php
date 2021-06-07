<?php 
    require "../connexion.php";


/*  REQUETE PRÉPARÉE  puis EXÉCUTÉE      */
	$req = $bdd->prepare('SELECT chambre.numero FROM `chambre` WHERE chambre.id NOT IN (SELECT chambre.id FROM chambre LEFT JOIN comporte ON comporte.idChambre=chambre.id LEFT JOIN reservation ON reservation.id=comporte.idReservation WHERE NOT( reservation.arrivee>"'.$depart.'" OR reservation.depart<"'.$arrivee.'"));');
    $req->execute();
    $reponse_chambres_libres = $req->fetchAll(PDO::FETCH_ASSOC);
/* Pour voir la reponse renvoyée par la requête : dé-commenter l'instruction suivante */
    /* var_dump($reponse);  */

 
?>