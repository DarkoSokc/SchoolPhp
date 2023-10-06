<html>
	<head>
		<meta charset="UTF-8">
		<title>Barve</title>
	</head>
	
	<body>
		<h1>Barve</h1>
		<table border="1">

<?php

	/*
		Ime datoteke: 	barve.php
		Avtor:			Darko Šokčević
		Vhodni podatki: /
		Opis: 			Program, ki v tabeli prikaže barve od 00 do FF
		Izhodni podatki:Izpis tabele z barvami
	*/
	
	// Deklariramo in inicializiramo spremenljivke
	$osnova = array('1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F');
	$barva = array();
	
	// 
	foreach ($osnova as $i) {
		foreach ($osnova as $j) {
			array_push($barva, $i . $j);
			
		}
		
	}
	
	// s kombinacijo osnove in barve in 00 dobimo vsak kvadratek posebaj, in z zanko for se to ponavlja dokler ne pridemo do konca FF, vse nato prikazemo v tabeli
	for ($c=0; $c<count($barva); $c++) {
		echo '<tr>';
		for ($d=count($barva)-1; $d>=0; $d--) {
			$barvaDva = '#' . $barva[$c] . '00' . $barva[$d];
			echo '<td bgColor="' . $barvaDva . '">&nbsp;</td>';
		}
		echo '</tr>';
	}

?>

		</table>
	
	</body>
	
</html>