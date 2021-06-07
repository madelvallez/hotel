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
	<h1> Ce Client n'existe pas </h1>
		<form method="get" action="../CreerClient/CreerClient.html">
			<input type="submit"  value="Créer un client"/>
		</form>
		<form method="get" action="../identificationClient/entrer-identificationClient.php">
			<input type="hidden" name="date_arrivee" value="<?=$arrivee?>"/>
			<input type="hidden" name="date_depart" value="<?=$depart?>"/>
			<input type="hidden" name="place" value="<?=$place?>"/>
			<input type="hidden" name="chambre" value="<?=$chambre?>"/>
			<input type="submit" value="Saisir un autre client"/>
		</form>
	</body>
</html>