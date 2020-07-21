<?php

include ("config.php");

if (!isset($_GET['id_obat'])) {
	header('Location: listobat.php');
}

$id_obat = $_GET['id_obat'];

$queryobat = "SELECT * FROM obat WHERE id_obat=$id_obat";
$query = mysqli_query($config, $queryobat);
$obat = mysqli_fetch_assoc($query);

// var_dump($obat);

// if (mysqli_num_rows(query) < 1) {
// 	die("data tidak ditemukan...");
// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Pendataan Obat</title>
</head>
<body>
	<header>
		<h3>Formulir Edit Pendataan Obat</h3>
	</header>

	<form action="proseseditobat.php" method="POST">
		
		<fieldset>
			<table>
				
				<input type="hidden" name="id_obat" value="<?php echo $obat['id_obat'] ?>">
				
				<tr>
					<td><label for="nama_obat">Nama Obat</label></td>
					<td>:</td>
					<td><input type="text" name="nama_obat" value="<?php echo $obat['nama_obat'] ?>"></td>
				</tr>
				<tr>
					<td><label for="jenis_obat">Jenis Obat</label></td>
					<td>:</td>
					<td><input type="text" name="jenis_obat" value="<?php echo $obat['jenis_obat'] ?>"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Simpan" name="editobat"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>