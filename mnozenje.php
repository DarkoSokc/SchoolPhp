<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title> Množenje</title>
	</head>
	
	<body>	
		<h1>Množenje</h1>
		
		<form method ="POST">
			Vnesi število: <input id="stevilo" name="stevilo"/>
			<input name="poslji" type="submit" value="Izračunaj!"/>
		</form>
<?php
	
	/*
				Ime datoteke: 	mnozenje.php
				Avtor:			Darko Šokčević
				Vhodni podatki: Poljubno število
				Opis:			Množi število s 3
				Izhodni podatki:Vrne rezultat
			*/


	// Deklariramo in inicializiramo spremenljivko
	$mnozenec1 = 3;
	
	// Če je bil pritisnjen gumb Izračunaj! - če obstaja spremenljivka "poslji"
	if(isset($_POST['stevilo'])) {

		// Nova spremenljivka, ki vnešeno vrednost pretvori v število
		$mnozenec2 = $_POST['stevilo'] * 1.0;

		// Izpišemo vrednosti, poslane preko obrazca
		echo  'Vnešeno število je ' . $mnozenec2 . '<br/>';
		
		// Izračunamo zmnožek
		$zmnozek = $mnozenec1 * $mnozenec2;
		
		// Izpišemo zmnožek
		echo $mnozenec1 . '-kratnik števila ' . $mnozenec2 . ' je ' . $zmnozek;
	}

?>
		
	</body>
</html>