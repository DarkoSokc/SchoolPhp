<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Dodajanje ucenca</title>
	</head>
	
	<body>	
		<h1> Dodajanje ucenca</h1>
		<p><a href="evidenca.php">Nazaj na ucence</a></p>		
	
		<form method="post">
			Ime:<input name="ime" id="ime"/><br/>
			Priimek:<input name="priimek" id="priimek"/><br/>
			Elektronski naslov:<input name="enaslov" id="enaslov"/><br/>
			Ocena:<input name="ocena" id="ocena"/><br/>
			<input name="dodaj" id="dodaj" type="submit" value="Dodaj!"/>
		</form>
<?php
	
	/*
				Ime datoteke: 	udelezenci.php
				Avtor:			Darko Šokčević
				Vhodni podatki: Ime, priimek, e-naslov in ocena
				Opis:			Zapiše podatke na konec dadoteke udelezenci.csv
				Izhodni podatki:Poročilo o uspehu
			*/

	
	// odpremo CSV datoteko v načinu append - dodajanje na konec
	$datoteka = fopen('udelezenci.csv', 'a');

	// Če je bil kliknjen gumb dodaj - če je bila poslana spremenljivka "dodaj"
	if(isset($_POST['dodaj'])) {
		
		// Preberemo vrednosti iz obrazca
		$ime = strip_tags($_POST['ime']);
		$priimek = strip_tags($_POST['priimek']);
		$enaslov = strip_tags($_POST['enaslov']);
		$ocena = strip_tags($_POST['ocena']);
		
		// Sestavimo vrstico
		$vrstica = $ime . ';' . $priimek . ';' . $enaslov . ';' . $ocena . PHP_EOL;
		
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