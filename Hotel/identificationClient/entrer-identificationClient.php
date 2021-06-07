<?php 
/* récupération du paramètre */
    $arrivee = htmlspecialchars($_GET['date_arrivee']) ;
	$depart = htmlspecialchars($_GET['date_depart']) ;
	$place = htmlspecialchars($_GET['place']) ;
	$chambre = htmlspecialchars($_GET['chambre']);

	
?>
<html>
	<h1>Identifiez le client</h1>
	
	<form method="get" action="traitement-identificationClient.php">
		<label>Identifiant du client</label>
		<input type="text" id="idClent" name="identifiant" placeholder="Entrez l'id du client"  />
		</br>
		<input type="hidden" name="date_arrivee" value="<?=$arrivee?>"/>
		<input type="hidden" name="date_depart" value="<?=$depart?>"/>
		<input type="hidden" name="place" value="<?=$place?>"/>
		<input type="hidden" name="chambre" value="<?=$chambre?>"/>
		<input type="submit" value="Valider"/>
	</form>

</html>