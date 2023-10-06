<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Seznam slovenskih pesnikov</title>
	</head>
	
	<body>	
		<h1> Seznam slovenskih pesnikov</h1>
		
		
	
<?php
	
	/*
				Ime datoteke: 	pesniki.php
				Avtor:			Darko Šokčević
				Vhodni podatki: /
				Opis:			Izpiše seznam pesnikov v tabeli
				Izhodni podatki:Tabela
			*/

	
	// odpremo CSV datoteko v načinu samo za branje
	$datoteka = fopen('pesniki.csv', 'r');

	// Zapišemo glavo tabele
	echo '<table border="1">';
	echo '<tr><th>Ime in priimek</th><th>Rojstvo</th><th>Smrt</th></tr>';
	// Zanka, ki se pomika po vrsticah do konca datoteke
	while(!feof($datoteka)) {
		
		// Preberemo vrstico datoteke in pomaknemo kazalec za vrstico naprej
		$vrstica = fgets($datoteka);
		
		// Ustvarimo spremenljivko s seznamom vrednosti
		$pesnik	 = explode(';', $vrstica);
		
		// Izpišemo začetek vrstice + ime in priimek pesnika
		echo '<tr><td>' . $pesnik[0] . '</td>';
		// Izpišemo letnico rojstva pesnika
		echo '<td>' . $pesnik[1] . '</td>';
		// Izpišemo letnico smrti  pesnika + konec vrstice
		echo '<td>' . $pesnik[2] . '</td></tr>';
	}
	
	// Zapišemo nogo tabele
	echo '</table>';


	// zapremo datoteko
	fclose($datoteka);
?>
		
	</body>
</html>