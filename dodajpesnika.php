<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Dodajanje pesnika</title>
	</head>
	
	<body>	
		<h1> Dodajanje pesnika</h1>
		<p><a href="pesniki.php">Nazaj na pesnika</a></p>		
	
		<form method="post">
			Ime in priimek:<input name="imeinpriimek" id="imeinpriimek"/><br/>
			Letnica rojstva:<input name="rojstvo" id="rojstvo"/><br/>
			Letnica smrti:<input name="smrt" id="smrt"/><br/>
			<input name="dodaj" id="dodaj" type="submit" value="Dodaj!"/>
		</form>
<?php
	
	/*
				Ime datoteke: 	dodajpesnika.php
				Avtor:			Darko Šokčević
				Vhodni podatki: Ime in priimek, letnici rojstva in smrti
				Opis:			Zapiše podatke na konec dadoteke pesniki.csv
				Izhodni podatki:Poročilo o uspehu
			*/

	
	// odpremo CSV datoteko v načinu append - dodajanje na konec
	$datoteka = fopen('pesniki.csv', 'a');

	// Če je bil kliknjen gumb dodaj - če je bila poslana spremenljivka "dodaj"
	if(isset($_POST['dodaj'])) {
		
		// Preberemo vrednosti iz obrazca
		$pesnik = strip_tags($_POST['imeinpriimek']);
		$leto_rojstva = strip_tags($_POST['rojstvo']);
		$leto_smrti = strip_tags($_POST['smrt']);
		
		// Sestavimo vrstico
		$vrstica = $pesnik . ';' . $leto_rojstva . ';' . $leto_smrti . PHP_EOL;
		
		// Zapišemo vrstico na konec datoteke
		$rezultat = fwrite($datoteka, $vrstica);
		
		// Izpišemo rezultat
		echo 'Zapisano je bilo ' . $rezultat . ' znakov.';
	}


	// zapremo datoteko
	fclose($datoteka);
?>
		
	</body>
</html>