<!-- ce fichier suppose définie la variable php $reponse_chambres_libres -->
<!doctype html>
<html>
	<head>
		<title>
			Chambres trouvées
		</title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<h1>
			Votre réservation a été confirmé
		</h1>
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
	</body>
</html>