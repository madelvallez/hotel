<?php 
    require "../connexion.php";


/*  REQUETE PRÉPARÉE  puis EXÉCUTÉE      -> création reservation*/
	$req = $bdd->prepare('INSERT INTO `reservation`(`arrivee`, `depart`, `idClient`) VALUES ("'.$arrivee.'","'.$depart.'","'.$idclient.'");');
    $req->execute();
	
/*  REQUETE PRÉPARÉE  puis EXÉCUTÉE      -> recup id resa*/
	$req = $bdd->prepare('SELECT id FROM `reservation` WHERE arrivee="'.$arrivee.'" AND depart="'.$depart.'" AND idClient="'.$idclient.'";');
    $req->execute();
    $reservation = $req->fetchAll(PDO::FETCH_ASSOC)[0]["id"];
	
/*  REQUETE PRÉPARÉE  puis EXÉCUTÉE      -> recup id chambre*/
	$req = $bdd->prepare('SELECT id FROM `chambre` WHERE numero="'.$chambre.'";');
    $req->execute();
    $reponse_id_chambre = $req->fetchAll(PDO::FETCH_ASSOC);

	$id_chambre = intval($reponse_id_chambre[0]["id"]);

	
/*	REQUETE PRÉPARÉE  puis EXÉCUTÉE      -> ajout des/de la chambre(s)	*/
	$req = $bdd->prepare('INSERT INTO `comporte`(`idReservation`, `idChambre`) VALUES ("'.$reservation.'","'.$id_chambre.'");');
    $req->execute();
	/*idReservation et idChambre sont des clé primaire, il faut qu'elles soient des clés étrangères */
	
	
	
/* Pour voir la reponse renvoyée par la requête : dé-commenter l'instruction suivante */
    /* var_dump($reponse);  */

 
?>