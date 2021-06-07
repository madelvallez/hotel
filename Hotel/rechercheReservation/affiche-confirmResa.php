<!-- ce fichier suppose définie la variable php $reponse_chambres_libres -->
<!doctype html>
<html>
	<head>
		<title>
			Reserver
		</title>
		<meta charset="utf8">
	</head>
	<body>
		<h1>Voulez vous reserver:</h1>
		<p>Chambre: 
			<?= $chambre ?>
		</p>
		
		<p>Arrivée: 
			<?= $arrivee ?>
			(soir)
		</p>
		
		<p>Depart: 
			<?= $depart ?>
			(matin)
		</p>
		
		<p>Client: 
			<?= $idclient ?>
		</p>
		
		<form method="get" action="../rechercheReservation/traitement-confirmResa.php">
			<input type="hidden" name="date_arrivee" value="<?=$arrivee?>"/>
			<input type="hidden" name="date_depart" value="<?=$depart?>"/>
			<input type="hidden" name="client" value="<?=$idclient?>"/>
			<input type="hidden" name="chambre" value="<?=$chambre?>"/>
			<input type="submit" value="Valider"/>
		</form>
		
	</body>
</html>