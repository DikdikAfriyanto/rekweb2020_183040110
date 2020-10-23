<?php 

function r($row){
	$angka = 1;
	$x = 0;
	for ($i=1; $i <= $row; $i++){
		while ($x < $i) {
			echo "$angka ";
			$angka++;
			$x++;
		}
		echo "<br>";
		$x=0;

	}
}

r(5);
 ?>