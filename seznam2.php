<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Seznam</title>
	</head>
	
	<body>	
		<h1>Seznam</h1>
		
		
<?php
	
	/*
				Ime datoteke: 	seznam.php
				Avtor:			Darko Šokčević
				Vhodni podatki: /
				Opis:			Primer dela s seznami
				Izhodni podatki:Izpis seznama
			*/


	// Deklariramo in inicializiramo spremenljivko - seznam
	$avtomobili = array('Golf', 'Polo', 'Jetta');
	
	// Deklariramo in inicializiramo asociativni seznam
	$prevozeni_km = array('Polo'=>240000, 'Golf'=>370000, 'Jetta'=>210000);
	
	// Preberemo dolžino seznama
	$st_avtov = count($avtomobili);
	
	// Izpišemo dolžino seznama
	echo 'V garaži je ' . $st_avtov . ' avtomobilov.<br/>';

	// Izpišemo seznam vseh avtov v garaži s prevoženimi km
	for($c=0; $c<$st_avtov; $c++) {
		
		// Preberemo trenutni avtomobili
		$avto = $avtomobili[$c];
		
		// Izpišemo trenutni avtomobili
		echo $c+1 . ' ' . $avto;

		// Izpišemo prevožene km trenutnega avta
		echo ' Prevoženo: ' . $prevozeni_km[$avto] . ' ' . ' km<br/>';
		
		
	}
	
	
?>
		
	</body>
</html>