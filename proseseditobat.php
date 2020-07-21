<?php

include ("config.php");

if (isset($_POST['editobat'])) {
	
	$id_obat = $_POST['id_obat'];
	$nama_obat = $_POST['nama_obat'];
	$jenis_obat = $_POST['jenis_obat'];

	$queryobat = "UPDATE obat SET nama_obat='$nama_obat',jenis_obat='$jenis_obat' WHERE id_obat=$id_obat";
	$query = mysqli_query ($config, $queryobat);

	if ($query) {
		header('Location: listobat.php');
	} else {
		die("Gagal menyimpan perubahan...");
	}
} else {
	die("Akses Dilarang...");
}
?>