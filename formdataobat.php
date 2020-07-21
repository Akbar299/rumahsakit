<!DOCTYPE html>
<html>
<head>
	<title>Pendataan Obat</title>
</head>
<body>
	<header>
		<h3>Formulir Pendataan Obat</h3>
	</header>

	<form action="prosespendataanobat.php" method="POST">
		
		<fieldset>
			<table>
				<tr>
					<td><label for="id_obat">ID Obat</label></td>
					<td>:</td>
					<td><input type="text" name="id_obat"></td>
				</tr>
				<tr>
					<td><label for="nama_obat">Nama Obat: </label></td>
					<td>:</td>
					<td><input type="text" name="nama_obat"></td>
				</tr>
				<tr>
					<td><label for="jenis_obat">Jenis Obat</label></td>
					<td>:</td>
					<td><input type="text" name="jenis_obat"></td>
				</tr>
				<tr>
				<td><input type="submit" value="Daftar" name="daftarobat"><td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>