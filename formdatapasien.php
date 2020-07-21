<?php include ("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pendataan Pasien</title>
</head>
<body>
	<header>
		<h3>Formulir Pendataan Pasien</h3>
	</header>

	<form action="prosespendataanpasien.php" method="POST">

	<fieldset>
		<table>
			<tr>
				<td><label for="id_pasien">ID Pasien</label></td>
				<td>:</td>
				<td><input type="text" name="id_pasien"></td>
			</tr>
			</tr>
				<td><label for="nama_pasien">Nama Pasien</label></td>
				<td>:</td>
				<td><input type="text" name="nama_pasien"></td>
			</tr>
			<tr>
				<td><label for="alamat">Alamat</label></td>
				<td>:</td>
				<td><textarea name="alamat" cols="30" rows="5"></textarea></td>
			</tr>
			<tr>
				<td><label for="umur">Umur</label></td>
				<td>:</td>
				<td><input type="text" name="umur"></td>
			</tr>
			<tr>
				<td><label for="tgl_lahir">Tanggal Lahir</label></td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir"></td>
			</tr>
			<tr>
			<td><label for="jenis_kelamin">Jenis Kelamin</label></td>
			<td>:</td>
			<td><select name="jenis_kelamin">
				<option value="Laki-laki">Laki-laki</option>
				<option value="Perempuan">Perempuan</option>
				</select>
			</td>
			</tr>
			<tr>
			<td><label for="penyakit">Penyakit</label></td>
			<td>:</td>
			<td><select name="penyakit">
				<option value="Sakit Jantung">Sakit Jantung</option>
				<option value="Sakit Maag">Sakit Maag</option>
				<option value="Sakit Liver">Sakit Liver</option>
				</select>
			</td>
			</tr>
			<tr>
				<td><label for="nama_obat">Nama Obat</label></td>
				<td>:</td>
				<td><select name="nama_obat">
				<?php
					$queryobat = "SELECT * FROM obat";
					$query = mysqli_query ($config, $queryobat);
					while ( $obat = mysqli_fetch_array($query )) {
						?>
						<option value="<?=$obat['id_obat']?>"><?=$obat['id_obat']?></option>
						<?php
					}
				?>
				</select></td>
			</tr>
			<tr>
				<td><label for="nama_dokter">Nama Dokter</label></td>
				<td>:</td>
				<td><select name="nama_dokter">
				<?php 
					$querypasien = "SELECT * FROM dokter";
					$query	 = mysqli_query	($config, $querypasien);
					while (	$dokter = mysqli_fetch_array($query	)) {
						?>
						<option value="<?=$dokter['id_dokter']?>"><?=$dokter['id_dokter']?></option>
						<?php 
					}
				?>
				</select></td>
			</tr>
			<tr>
			<td><input type="submit" value="Daftar" name="daftarpasien"></td>
			</tr>
		</table>
	</fieldset>
</form>
</body>
</html>