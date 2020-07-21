<!DOCTYPE html>
<html>
<head>
	<title>Pendataan Dokter</title>
</head>
<body>
	<header>
		<h3>Formulir Pendataan Dokter</h3>
	</header>

	<form action="prosespendataandokter.php" method="POST">

		<fieldset>
			<table>
			<tr>
				<td><label for="id_dokter">ID Dokter</label></td>
				<td>:</td>
				<td><input type="text" name="id_dokter"></td>
			</tr>
			<tr>
				<td><label for="nama_dokter">Nama Dokter</label></td>
				<td>:</td>
				<td><input type="text" name="nama_dokter"></td>
			</tr>
			<tr>
				<td><label for="spesialis">Spesialis</label></td>
				<td>:</td>
				<td><input type="text" name="spesialis"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Daftar" name="daftardokter"><td>
			</tr>
			</table>
			<!-- <p>
				<label for="id_dokter">ID Dokter: </label>
				<input type="text" name="id_dokter">
			</p>
			<p>
				<label for="nama_dokter">Nama Dokter: </label>
				<input type="text" name="nama_dokter">
			</p>
			<p>
				<label for="spesialis">Spesialis: </label>
				<input type="text" name="spesialis">
			</p>
			<p>
				<input type="submit" value="Daftar" name="daftardokter">
			</p> -->
		</fieldset>
	</form>
</body>
</html>