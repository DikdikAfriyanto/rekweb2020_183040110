<?php 
$i;
function hitungLuasLingkaran($i){
	echo "<h4>Menghitung Luas Lingkaran</h4>";
	echo "Jari-jari = $i cm<br>";
	echo "LuasLingkaran = " .($i * $i * 3.14). " cm<sup>2</sup>";
	echo "<hr>";
};

function hitungKelilingLingkaran($i){
	echo "<h4>Menghitung Keliling Lingkaran</h4>";
	echo "Jari-jari = $i cm<br>";
	echo "KelilingLingkaran = " .($i * 2 * 3.14). " cm";
	echo "<hr>";
};
hitungLuasLingkaran(10);
hitungKelilingLingkaran(20);


 ?>