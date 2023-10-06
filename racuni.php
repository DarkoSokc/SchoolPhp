<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Računi</title>
	</head>
	
	<body>	
		<h1>Računi</h1>
		<p><a href="izracunRacunov.php">Dodaj račun</a></p>		
	
<?php
	
	/*
				Ime datoteke: 	racuni.php
				Avtor:			Darko Šokčević
				Vhodni podatki: /
				Opis:			Izpiše seznam računov v tabeli in seštevke vseh kategorij računov
				Izhodni podatki:Tabela
			*/

	
	// odpremo CSV datoteko v načinu samo za branje
	$datoteka = fopen('racuni.csv', 'r');

	// Zapišemo glavo tabele
	echo '<table border="1">';
	echo '<tr><th>Datum</th><th>Podjetje</th><th>Znesek</th><th>Kategorija</th></tr>';
	// Zanka, ki se pomika po vrsticah do konca datoteke
	while(!feof($datoteka)) {
		
		// Preberemo vrstico datoteke in pomaknemo kazalec za vrstico naprej
		$vrstica = fgets($datoteka);
		
		// Ustvarimo spremenljivko s seznamom vrednosti
		$racun = explode(';', $vrstica);
		
		// Izpišemo začetek vrstice + Datum
		echo '<tr><td>' . $racun[0] . '</td>';
		// Izpišemo Podjetje
		echo '<td>' . $racun[1] . '</td>';
		// Izpišemo Znesek
		echo '<td>' . $racun[2] . '</td>';
		// Izpišemo kategorijo + konec vrstice
		echo '<td>' . $racun[3] . '</td></tr>';
	}
	
	// Zapišemo nogo tabele
	echo '</table>';

// Inicializiramo vsoto za vsako kategorijo na 0
$hrana_total = 0;
$bencin_total = 0;
$telefon_total = 0;

	// Preberemo vsako vrstico datoteke in izračunamo vsoto za vsako kategorijo
	while (($line = fgetcsv('racuni.csv')) !== false) {
		// Preskočimo prvo vrstico (naslove stolpcev)
		if ($line[0] == "Datum") {
			continue;
		}

		$sestevek = floatval($line[2]);
		switch ($line[4]) {
			case "hrana":
				$hrana_total += $sestevek;
				break;
			case "energija":
				$bencin_total += $sestevek;
				break;
			case "telekomunikacije":
				$telefon_total += $sestevek;
				break;
			default:
				break;
		}
	}

	// Zapri datoteko
	fclose($datoteka);

	// Izpišemo rezultate
	echo "<h2>Skupni stroški po kategorijah:</h2>";
	echo "<ul>";
	echo "<li>Hrana: " . number_format($hrana_total, 2, ".", "") . " €</li>";
	echo "<li>Bencin: " . number_format($bencin_total, 2, ".", "") . " €</li>";
	echo "<li>Telefon: " . number_format($telefon_total, 2, ".", "") . " €</li>";
	echo "</ul>";
?>
			
		</body>
</html>