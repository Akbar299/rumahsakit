<?php

$server = "fdb26.awardspace.net";
$user = "3071826_rumahsakit";
$password = "akbar123";
$name = "3071826_rumahsakit";

// $db = mysqli_connect($server, $user, $password, $name);

// if ( !db ) {
// 	die("Gagal terhubung dengan database: " . mysqli_connect_error());
// }

$config = mysqli_connect($server, $user, $password) or die("Koneksi ke database Gagal!");
mysqli_select_db($config, $name) or die("Tidak ada database yang dipilih");
?>