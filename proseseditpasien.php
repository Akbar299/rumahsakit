<?php

include ("config.php");

if (isset($_POST['editpasien'])) {
	
	$id_pasien = $_POST['id_pasien'];
	$nama_pasien = $_POST['nama_pasien'];
	$alamat = $_POST['alamat'];
	$umur = $_POST['umur'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$penyakit = $_POST['penyakit'];
	$nama_obat = $_POST['nama_obat'];
	$nama_dokter = $_POST['nama_dokter'];


	$querypasien = "UPDATE pasien SET nama_pasien='$nama_pasien',alamat='$alamat',umur='$umur',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',penyakit='$penyakit', id_obat = '$nama_obat', id_dokter = '$nama_dokter' WHERE id_pasien=$id_pasien";
	$query = mysqli_query ($config, $querypasien);

	if ($query) {
		header('Location: listpasien.php');
	} else {
		die("Gagal menyimpan perubahan...");
	}
} else {
	die("Akses Dilarang...");
}
?>