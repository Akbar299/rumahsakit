<?php

include ("config.php");

if (isset($_POST['daftarobat'])) {
	
	$id_obat = $_POST['id_obat'];
	$nama_obat = $_POST['nama_obat'];
	$jenis_obat = $_POST['jenis_obat'];

	$queryobat = "INSERT INTO obat (id_obat, nama_obat, jenis_obat) VALUE ('$id_obat','$nama_obat','$jenis_obat')";
	$query = mysqli_query($config, $queryobat);

	if ( $query ) {
		header('Location: listobat.php?status=sukses');
	} else {
		header('Location: listobat.php?status=gagal');
	}

} else {
	die("Akses Dilarang...");
}
?>