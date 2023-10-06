<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Dodajanje računa</title>
	</head>
	
	<body>	
		<h1> Dodajanje računa</h1>
		<p><a href="racuni.php">Nazaj račune</a></p>		
	
		<form method="post">
			Datum:<input name="datum" id="datum"/><br/>
			Podjetje:<input name="podjetje" id="podjetje"/><br/>
			Znesek:<input name="znesek" id="znesek"/><br/>
			Kategorija:<input name="kategorija" id="kategorija"/><br/>
			<input name="dodaj" id="dodaj" type="submit" value="Dodaj!"/>
		</form>
<?php
	
	/*
				Ime datoteke: 	izracunRacunov.php
				Avtor:			Darko Šokčević
				Vhodni podatki: Datum, Podjetje, Znesek, Kategorija
				Opis:			Zapiše podatke na konec dadoteke racuni.csv
				Izhodni podatki:Izpis uspešnega dodajanja
			*/

	
	// odpremo CSV datoteko v načinu append - dodajanje na konec
	$datoteka = fopen('racuni.csv', 'a');

	// Če je bil kliknjen gumb dodaj - če je bila poslana spremenljivka "dodaj"
	if(isset($_POST['dodaj'])) {
		
		// Preberemo vrednosti iz obrazca
		$datum = strip_tags($_POST['datum']);
		$podjetje = strip_tags($_POST['podjetje']);
		$znesek = strip_tags($_POST['znesek']);
		$kategorija = strip_tags($_POST['kategorija']);
		
		// Sestavimo vrstico
		$vrstica = $datum . ';' . $podjetje . ';' . $znesek . ';' . $kategorija . PHP_EOL;
		
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