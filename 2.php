<!DOCTYPE html>
<html>
<head>
	<title>Jawaban Soal Nomor 2</title>
</head>
<body>
	<?php 
		
		$data = 'DUMBWAYSDOTID';
        $arr = array('Keren', 'D', 'W', 'B', 'T', 'A', 'S', 'U', 'M', 'O', 'Y', 'D', 'I', 'D', 'Sekali');

        echo "ARRAY SEBELUM DI SORT   : ";
		foreach ($arr as $item) {
			echo  ' ' . $item;
		}

		echo '<br><br>';
		$i = 0;
		$x = 0;
            $temp = "";
            while ($i <= strlen($data) -1)
            {
                if ($data[$i]== $arr[$x])
                {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$x];
                    $arr[$x] = $temp;

                    $i++;
                    $x = $i;
                }
                else{
                    $x++;
                }
            }
            echo "ARRAY SESUDAH DI SORT   :";
		foreach ($arr as $item) {
			echo  ' ' . $item;
		}
	?>
</body>
</html>