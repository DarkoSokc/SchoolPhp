<html>
	<head>
		<meta charset="UTF-8">
		<title>Indeks telesne teže</title>
	</head>

	<body>
		<h1>Indeks telesne teže</h1>
		
		<form method="POST">
			Telesna višina: <input id="visina" name="visina"/> cm<br/>
			Telesna teža: <input id="teza" name="teza"/> kg<br/>
			<input name="izracunaj" type="submit" value="Izračunaj indeks telesne teže"/>
		</form>
		
		
<?php
		/*
				Ime datoteke: 	telesnateza.php
				Avtor:			Darko Šokčević
				Vhodni podatki: Višina in teža osebe
				Opis:			Program, ki izračuna indeks telesne teže osebe
				Izhodni podatki:Prikaz indeksa telesne teže osebe
			*/



		// Če je bil pritisnjen gumb "Izračunaj indeks telesne teže" - če obstaja spremenljivka "izracunaj"
			if (isset($_POST['izracunaj'])) {
	
				// Novi spremenljivki, ki vnešeni vrednosti pretvorita v število
				$visina = $_POST['visina'] * 1.0 / 100; // v metrih
				$teza = $_POST['teza'] * 1.0;
		
				// Izračunamo indeks telesne teže
				$index = $teza / ($visina * $visina);
		
				// Določimo še interpretacijo rezultata
				$rezultat;
			
			if (0 <= $index && $index <=18.5) {
			$rezultat = 'Podhranjenost';
			} else if (18.5 < $index && $index <= 25) {
			$rezultat = 'Normalna teža';
			} else if (25 < $index && $index <= 30) {
			$rezultat = 'Prevelika teža';
			} else if (30 < $index && $index <= 35) {
			$rezultat = 'Debelost (s1)';
			} else {
			$rezultat = 'Debelost (s2)';
			}
		
			// Izpišemo zmnožek
			echo 'Indeks telesne teže: ' . number_format($index, 1) . ' (' . $rezultat . ').';
		}
	
?>

	</body>
</html>