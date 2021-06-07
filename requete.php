<?php 
    require "../connexion.php";

	$req = $bdd->prepare('INSERT INTO Client (nom,prenom)VALUES("'.$nom.'","'.$prenom.'");');
    $req->execute();


//$id = $bdd->lastInsertId();

?>