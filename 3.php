<html>
	<head>
		
	</head>
	<body>
		<?php 
			

			function Cetak($param){

				if ($param % 2!==0) {
					echo "Bilangan Yang di input harus Bilangan Genap";
				}
				else{

				for ($i=1; $i<=$param ; $i++) { 
					for ($j=1; $j <=$param ; $j++) { 
						if ($i==1 || $i==$param ||$j%3==0 ){
							echo "<b>+<b> ";
						}
						else{
							echo "<b>=<b> ";
						}
					
					}
					echo "<br>";
				}
			}
			

			}
			Cetak(8);


			


			
		?>
	</body>
</html>