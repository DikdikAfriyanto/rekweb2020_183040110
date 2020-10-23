

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3a</title>
	<style>
		.ganti_style{
			font-family: arial;
			font-size: 28px;
			color: #8c782d;
			font-style: italic;
			font-weight: bolder;

		}

		.box_model{
			width: 600px;
			border:1px solid black;
			border-radius: 50px;
			box-shadow: 1px 1px 15px  rgba(0,0,0,0.5);
			padding: 10px;
			margin: 20px 0 0 20px;
			text-align: center;

		}
	</style>
</head>
<body>
	<?php function gantiStyle($tulisan, $style, $style1) {?>
		<div class=' <?= $style ; ?>
		<?= $style1;?>'><?= $tulisan ?></div>
	<?php } ?>
	<?php echo gantiStyle("Selamat datang di praktikum PW 2019","ganti_style","box_model"); ?>

</body>	
</html>