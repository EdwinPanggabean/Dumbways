<!DOCTYPE html>
<html>
<head>
	<title>Jawaban Soal Nomor 1</title>
</head>
<body>
	<?php
	$gaji = 3000000;
	$bunga =2.5/100; 
		for ($x = 1; $x <= 12; $x++) {
			$total = ($gaji + ($gaji * $bunga));
		     
		     echo "<br>Gaji ".$x.' = Rp.'.  number_format($total).'</br>';

			$gaji = $total;
		}
	?>
		
</body>
</html>