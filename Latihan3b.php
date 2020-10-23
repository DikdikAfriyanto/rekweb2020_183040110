<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3b</title>
	<style >
		.box_model{
			padding: 10px;
			border:1px solid black;
			height: 60px;
		}
	</style>
</head>
<body>

	<?php 
	$GLOBALS['issetGlobal']="Isset adalah = Berfungsi untuk mengecek apakah sebuah variabel sudah pernah dideklarasikan sebelumnya <br><br>";
	$GLOBALS['emptyGlobal']="Empty adalah = Berfungsi untuk mengecek apakah sebuah variabel yang telah dideklarasikan kosong atau tidak <br><br>";

	function soal($style){
		echo "<div class='$style'>
		".$GLOBALS['issetGlobal'].$GLOBALS['emptyGlobal']."

		</div>";
	}
	echo soal("box_model");




	 ?>

</body>
</html>