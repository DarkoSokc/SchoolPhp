<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Evidenca</title>
	</head>
	
	<body>	
		<h1>Seznam učencev</h1>
		<p><a href="udelezenci.php">Dodaj učenca</a></p>		
	
<?php
	
	/*
				Ime datoteke: 	evidenca.php
				Avtor:			Darko Šokčević
				Vhodni podatki: /
				Opis:			Izpiše seznam učencev v tabeli
				Izhodni podatki:Tabela
			*/

	
	// odpremo CSV datoteko v načinu samo za branje
	$datoteka = fopen('udelezenci.csv', 'r');

	// Zapišemo glavo tabele
	echo '<table border="1">';
	echo '<tr><th>Ime</th><th>Priimek</th><th>Elektronski naslov</th><th>Ocena</th></tr>';
	// Zanka, ki se pomika po vrsticah do konca datoteke
	while(!feof($datoteka)) {
		
		// Preberemo vrstico datoteke in pomaknemo kazalec za vrstico naprej
		$vrstica = fgets($datoteka);
		
		// Ustvarimo spremenljivko s seznamom vrednosti
		$ucenec	 = explode(';', $vrstica);
		
		// Izpišemo začetek vrstice + ime ucenca
		echo '<tr><td>' . $ucenec[0] . '</td>';
		// Izpišemo priimek ucenca
		echo '<td>' . $ucenec[1] . '</td>';
		// Izpišemo elektronski naslov ucenca
		echo '<td>' . $ucenec[2] . '</td>';
		// Izpišemo oceno ucenca + konec vrstice
		echo '<td>' . $ucenec[3] . '</td></tr>';
	}
	
	// Zapišemo nogo tabele
	echo '</table>';

	// sestavimo račun za povprečje ocen ucencev
	
	$ocena = array(); // prazen array za shranjevanje ocen
	rewind($datoteka); // premik datoteke nazaj na začetek
	while (!feof($datoteka)) {
		$vrstica = fgets($datoteka);
		$ucenec = explode(';', $vrstica);
		$ocenaDva = floatval($ucenec[3]); // sprememba v float
    array_push($ocena, $ocenaDva); // dodajanje ocenaDva v array
	}
	$avg_grade = array_sum($ocena) / count($ocena); // $avg_grade za računanje povprečja
	echo 'Povprečna ocena vseh učencev je ' . $avg_grade;
	
	// zapremo datoteko
	fclose($datoteka);
?>
		
	</body>
</html>