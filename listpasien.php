<?php include ("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pasien</title>
</head>
<body>
	<header><h2>Daftar Pasien</h2></header>

	<nav>
		<a href="formdatapasien.php">[+] Tambah Data Pasien</a>
	</nav>
	<br>
	<table border="1">
		<thead>
			<tr>
				<td>ID Pasien</td>
				<td>Nama Pasien</td>
				<td>Alamat</td>
				<td>Umur</td>
				<td>Tanggal Lahir</td>
				<td>Jenis Kelamin</td>
				<td>Penyakit</td>
				<td>Nama Dokter</td>
				<td>Nama Obat</td>
				<td>Aksi</td>
			</tr>
		</thead>
		<tbody>
			<?php
			
			$querypasien = "SELECT pasien.id_pasien, pasien.nama_pasien, pasien.alamat, pasien.umur, pasien.tgl_lahir, pasien.jenis_kelamin, pasien.penyakit, dokter.nama_dokter, obat.nama_obat FROM pasien
			INNER JOIN dokter ON pasien.id_dokter=dokter.id_dokter INNER JOIN obat ON pasien.id_obat=obat.id_obat";
			$query = mysqli_query ($config, $querypasien);

			while ($pasien = mysqli_fetch_array($query)){
				echo "<tr>";
				echo "<td>".$pasien['id_pasien']."</td>";
				echo "<td>".$pasien['nama_pasien']."</td>";
				echo "<td>".$pasien['alamat']."</td>";
				echo "<td>".$pasien['umur']."</td>";
				echo "<td>".$pasien['tgl_lahir']."</td>";
				echo "<td>".$pasien['jenis_kelamin']."</td>";
				echo "<td>".$pasien['penyakit']."</td>";
				echo "<td>".$pasien['nama_dokter']."</td>";
				echo "<td>".$pasien['nama_obat']."</td>";

				echo "<td>";
				echo "<a href='formeditpasien.php?id_pasien=".$pasien['id_pasien']."'>Edit</a> |";
				echo "<a href='hapuspasien.php?id_pasien=".$pasien['id_pasien']."'>Hapus</a>";
				echo "</td>";
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>