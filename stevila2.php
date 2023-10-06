<html>
	<head>
		<meta charset="UTF-8">
		<title>Poljubno število</title>
	</head>

	<body>
		<h1>Poljubno število</h1>
		
		<form method="POST">
			Poljubno število: <input id="stevilo" name="stevilo"/>
			<input name="rezultat" type="submit" value="Lastnosti števila"/>
		</form>
		
		
<?php
		/*
				Ime datoteke: 	stevila2.php
				Avtor:			Darko Šokčević
				Vhodni podatki: Poljubno število
				Opis:			Program, ki prikaže lastnosti poljubnega števila
				Izhodni podatki:Prikaz ali je število sodo/liho in ali je število pozitivno ali negativno
			*/



		// Če je bil pritisnjen gumb "Izračunaj indeks telesne teže" - če obstaja spremenljivka "izracunaj"
			if (isset($_POST['stevilo'])) {
				
				$stevilo = $_POST['stevilo'] * 1.0;
				
				if($stevilo % 2 == 0) {
					echo 'Sodo število, ';
				} else { 
					echo 'Liho število, ';
			}
			
				if($stevilo>=0) {
					echo 'pozitivno in ';
				} else {
					echo 'negativno in ';
				}
						
			
			$praSt = true;
			if(abs($stevilo) == 1) {
					$praSt = false;
			} else {
				for($c=2;$c<=ceil($stevilo/2);$c++) {
					if($stevilo % $c == 0) {
						$praSt = false;
					}
				}
			}
			if($praSt == true) {
				echo 'praštevilo.';
			} else { 
				echo 'ni praštevilo.';
			}
		}
?>

	</body>
</html>