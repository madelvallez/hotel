<?php 
    require "../connexion.php";


/*  REQUETE PRÉPARÉE  puis EXÉCUTÉE      */
	$req = $bdd->prepare('SELECT 1 FROM `client` WHERE id='.$idclient.';');
    $req->execute();
    $reponse_client_existe = $req->fetchAll(PDO::FETCH_ASSOC);
/* Pour voir la reponse renvoyée par la requête : dé-commenter l'instruction suivante */
    /* var_dump($reponse);  */

/*  Pour voir comment parcourir chaque ligne de la variable $reponse, 
    dé-commenter l'instruction suivante */
    /*   foreach($reponse as $element) :
            var_dump($element);
            echo "<br>";
    endforeach ; */ 
?>
