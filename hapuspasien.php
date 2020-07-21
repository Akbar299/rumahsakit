<?php

include ("config.php");

if (isset($_GET['id_pasien'])) {
	
	$id_pasien = $_GET['id_pasien'];

	$querypasien = "DELETE FROM pasien WHERE id_pasien=$id_pasien";
	$query = mysqli_query($config, $querypasien);

	if ($query) {
		header('Location: listpasien.php');
	} else {
		die("Gagal menghapus...");
	}
} else {
	die("akses dilarang...");
}
?>