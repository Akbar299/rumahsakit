<?php

include ("config.php");

if (isset($_POST['editdokter'])) {
	
	$id_dokter = $_POST['id_dokter'];
	$nama_dokter = $_POST['nama_dokter'];
	$spesialis = $_POST['spesialis'];

	$querydokter = "UPDATE dokter SET nama_dokter='$nama_dokter',spesialis='$spesialis' WHERE id_dokter=$id_dokter";
	$query = mysqli_query ($config, $querydokter);

	if ($query) {
		header('Location: listdokter.php');
	} else {
		die("Gagal menyimpan perubahan...");
	}
} else {
	die("Akses Dilarang...");
}
?>