<?php

include ("config.php");

if (!isset($_GET['id_dokter'])) {
	header('Location: listdokter.php');
}

$id_dokter = $_GET['id_dokter'];

$querydokter = "SELECT * FROM dokter WHERE id_dokter=$id_dokter";
$query = mysqli_query($config, $querydokter);
$dokter = mysqli_fetch_assoc($query);

// if (mysqli_num_rows(query) < 1) {
// 	die("data tidak ditemukan...");
// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Pendataan Dokter</title>
</head>
<body>
	<header>
		<h3>Formulir Edit Pendataan Dokter</h3>
	</header>

	<form action="proseseditdokter.php" method="POST">

		<fieldset>
			<table>
			
				<input type="hidden" name="id_dokter" value="<?php echo $dokter['id_dokter'] ?>">
			
			<tr>
				<td><label for="nama_dokter">Nama Dokter</label></td>
				<td>:</td>
				<td><input type="text" name="nama_dokter" value="<?php echo $dokter['nama_dokter'] ?>"></td>
			</tr>
			<tr>
				<td><label for="spesialis">Spesialis</label></td>
				<td>:</td>
				<td><input type="text" name="spesialis" value="<?php echo $dokter['spesialis'] ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Simpan" name="editdokter"></td>
			</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>