<?php

include ("config.php");

if (isset($_GET['id_obat'])) {
	
	$id_obat = $_GET['id_obat'];

	$queryobat = "DELETE FROM obat WHERE id_obat=$id_obat";
	$query = mysqli_query($config, $queryobat);

	if ($query) {
		header('Location: listobat.php');
	} else {
		die("Gagal menghapus...");
	}
} else {
	die("akses dilarang...");
}
?>