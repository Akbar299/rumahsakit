<?php

include ("config.php");

if (!isset($_GET['id_pasien'])) {
	header('Location: listpasien.php');
}

$id_pasien = $_GET['id_pasien'];

$querypasien = "SELECT * FROM pasien WHERE id_pasien=$id_pasien";
$query = mysqli_query($config, $querypasien);
$pasien = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Pendataan Pasien</title>
</head>
<body>
	<header>
		<h3>Formulir Edit Pendataan Pasien</h3>
	</header>

	<form action="proseseditpasien.php" method="POST">

	<fieldset>
		<table>
			
			<input type="hidden" name="id_pasien" value="<?php echo $pasien['id_pasien'] ?>">
		
			<tr>
				<td><label for="nama_pasien">Nama Pasien</label></td>
				<td>:</td>
				<td><input type="text" name="nama_pasien" value="<?php echo $pasien['nama_pasien'] ?>"></td>
			</tr>
			<tr>
				<td><label for="alamat">Alamat</label></td>
				<td>:</td>
				<td><textarea name="alamat" cols="30" rows="5"><?php echo $pasien['alamat'] ?></textarea></td>
			</tr>
			<tr>
				<td><label for="umur">Umur</label></td>
				<td>:</td>
				<td><input type="text" name="umur" value="<?php echo $pasien['umur'] ?>"></td>
			</tr>
			<tr>
				<td><label for="tgl_lahir">Tanggal Lahir</label></td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir" value="<?php echo $pasien['tgl_lahir'] ?>"></td>
			</tr>
			<tr>
				<td><label for="jenis_kelamin">Jenis Kelamin</label></td>
				<td>:</td>
				<?php $jenis_kelamin = $pasien['jenis_kelamin']; ?>
				<td><select name="jenis_kelamin">
					<option <?php echo ($jenis_kelamin == 'Laki-laki') ? "selected": "" ?>>Laki-laki</option>
					<option <?php echo ($jenis_kelamin == 'Perempuan') ? "selected": "" ?>>Perempuan</option>
				</select></td>
			</tr>
			<tr>
				<td><label for="penyakit">Penyakit</label></td>
				<td>:</td>
				<?php $penyakit = $pasien['penyakit']; ?>
				<td><select name="penyakit">
					<option <?php echo ($penyakit == 'Sakit Jantung') ? "selected": ""?>>Sakit Jantung</option>
					<option <?php echo ($penyakit == 'Sakit Maag') ? "selected": "" ?>>Sakit Maag</option>
					<option <?php echo ($penyakit == 'Sakit Liver') ? "selected": "" ?>>Sakit Liver</option>
				</select></td>
			</tr>
			<tr>
				<td><label for="nama_obat">Nama Obat</label></td>
				<td>:</td>
				<td><select name="nama_obat">
					<?php
						$queryobat = "SELECT * FROM obat";
						$query = mysqli_query ($config, $queryobat);
						while ( $obat = mysqli_fetch_array($query)) {
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
						while (	$dokter = mysqli_fetch_array($query)) {
							?>
							<option value="<?=$dokter['id_dokter']?>"><?=$dokter['id_dokter']?></option>
							<?php 
						}
					?>
				</select></td>
			</tr>
			<tr>
				<td><input type="submit" value="Simpan" name="editpasien"></td>
			</tr>
		</table>
	</fieldset>
</form>
</body>
</html>