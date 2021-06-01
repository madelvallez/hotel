<!-- ce fichier suppose définie la variable php $reponse_chambres_libres -->
<!doctype html>
<html>
	<head>
		<title>
			Chambres trouvées
		</title>
		<meta charset="utf8">
	</head>
	<body>
		<?php
			if (count($reponse_chambres_libres) == 0)
			{
				echo "<h1>Pas de chambres libres</h1>";
			}
			else
			{
				echo "<h1>Chambres libres trouvées : </h1>";
			}
		?>
		 <ul>
		 <?php
		 foreach($reponse_chambres_libres as $element) : 
		?>
		<li>
			<form method="get" action="../identificationClient/entrer-identificationClient.php">
				<?php
					foreach($element as $chambres)
					{
						echo ($chambres);
					}
				?>
				<input type="submit" value="Reserver"/>
				<input type="hidden" name="date_arrivee" value="<?$date_arrivee?>"/>
				<input type="hidden" name="date_depart" value="<?$date_depart?>"/>
				<input type="hidden" name="place" value="<?$place?>"/>
				<input type="hidden" name="chambre" value="<?$chambres?>"/>

			</form>
		</li>
			 <?php endforeach ;?>
		 </ul>
	</body>
</html>
