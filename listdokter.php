<?php include ("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Dokter</title>
</head>
<body>
	<header><h2>Daftar Dokter</h2></header>

	<nav>
		<a href="formdatadokter.php">[+] Tambah Data Dokter</a>
	</nav>
	<br>
	<table border="1">
		<thead>
			<tr>
				<th>ID Dokter</th>
				<th>Nama</th>
				<th>Spesialis</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$querydokter = "SELECT id_dokter, nama_dokter, spesialis FROM dokter";
			$query = mysqli_query($config, $querydokter);
			// $querydokter = mysqli_query ($config, "SELECT id_dokter, nama, spesialis FROM dokter");
			// if ($querydokter == false) {
			// 	die("Terjadi Kesalahan : ". mysqli_error());
			// }
			while ($dokter = mysqli_fetch_array($query)){
				echo "<tr>";
				echo "<td>".$dokter['id_dokter']."</td>";
				echo "<td>".$dokter['nama_dokter']."</td>";
				echo "<td>".$dokter['spesialis']."</td>";

				echo "<td>";
				echo "<a href='formeditdokter.php?id_dokter=".$dokter['id_dokter']."'>Edit</a> |";
				echo "<a href='hapusdokter.php?id_dokter=".$dokter['id_dokter']."'>Hapus</a>";
				echo "</td>";
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>