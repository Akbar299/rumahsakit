<?php

include ("config.php");

if (isset($_POST['daftarpasien'])) {

	$id_pasien = $_POST['id_pasien'];
	$nama_pasien = $_POST['nama_pasien'];
	$alamat = $_POST['alamat'];
	$umur = $_POST['umur'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$penyakit = $_POST['penyakit'];
	$nama_obat	= $_POST['nama_obat'];
	$nama_dokter = $_POST['nama_dokter'];
	

	$querypasien = "INSERT INTO pasien (id_pasien, nama_pasien, alamat, umur, tgl_lahir, jenis_kelamin, penyakit, id_obat, id_dokter) VALUE ('$id_pasien','$nama_pasien','$alamat','$umur','$tgl_lahir','$jenis_kelamin','$penyakit', '$nama_obat', '$nama_dokter')";
	$query = mysqli_query($config, $querypasien);

	if ( $query ) {
		header('Location: listpasien.php?status=sukses');
	} else {
		header('Location: listpasien.php?status=gagal');
	}

} else {
	die("Akses Dilarang...");
}
?>