<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Title</title>
</head>
<body>
	<div>
		<h1>KONVERSI MATA UANG</h1>
		<form action="" method="GET">
			<table>
				<tr>
					<td>Masukan Dolar: </td>
					<td><input type="text" name="dolar"></td>
				</tr>
				<br>
				<tr>
					<td>Masukan Rupiah</td>
					<td><input type="text" name="rupiah"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="" value="proses"></td>
				</tr>
			</table>
		</form>
	</div>
<!--CODINGAN DOLAR DAN RUPIAH GES-->
<?php
	$rupiah = 14200;
	$nilaidolar = $_GET['dolar'];
	$nilairupiah = $_GET['rupiah'];

	$doru = $nilaidolar * $rupiah;
	$rudo = $nilairupiah / $rupiah;


	
?>
<!-- ENDING CODINGAN -->
	<div>
			<table>
				<tr>
					<td>Hasil <?php echo "$$nilaidolar"; ?></td>
					<td>: Rp.<?php echo "$doru"; ?></td>
				</tr>
				<br>
				<tr>
					<td>Hasil Rp.<?php echo "$nilairupiah"; ?></td>
					<td>: <?php echo "$$rudo"; ?></td>
				</tr>
			</table>		
	</div>


<!-- ENDING MATAUANG -->
<br>
<br>
<br>
<div class="Jam">
	<h1>KOVERSI WAKTU</h1>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Masukan detik: </td>
				<td><input type="text" name="detik"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="" value="proses"></td>
			</tr>
		</table>
<!--CODINGAN JAM-->
<?php
	$detik = $_POST['detik'];
	$jam = $detik / 3600;
	$menit = ($detik % 3600) / 60;
	$d_detik = ($detik % 3600) % 60;
?>
<!--ENDING CODINGAN-->
		<table>
			<tr>
				<td><?php echo "$detik"; ?> detik = <?php echo floor($jam); ?> jam, <?php echo floor($menit); ?> menit <?php echo "$d_detik"; ?> detik</td>
			</tr>
		</table>
	</form>
</div>




</body>
</html>