<?php 

include ("config.php");

if (isset($_POST['daftardokter'])) {
	
	$id_dokter = $_POST['id_dokter'];
	$nama_dokter = $_POST['nama_dokter'];
	$spesialis = $_POST['spesialis'];

	$querydokter = "INSERT INTO dokter (id_dokter, nama_dokter, spesialis) VALUE ('$id_dokter','$nama_dokter','$spesialis')";
	$query = mysqli_query($config, $querydokter);

	if( $query ){
		header('Location: listdokter.php?status=sukses');
	} else {
		header('Location: listdokter.php?status=gagal');
	}

} else {
	die("Akses Dilarang...");
}
?>