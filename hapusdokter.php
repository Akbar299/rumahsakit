<?php

include ("config.php");

if (isset($_GET['id_dokter'])) {
	
	$id_dokter = $_GET['id_dokter'];

	$querydokter = "DELETE FROM dokter WHERE id_dokter=$id_dokter";
	$query = mysqli_query($config, $querydokter);

	if ($query) {
		header('Location: listdokter.php');
	} else {
		die("Gagal menghapus...");
	}
} else {
	die("akses dilarang...");
}
?>