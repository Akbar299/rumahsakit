<?php include ("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Obat</title>
</head>
<body>
	<header><h2>Daftar Obat</h2></header>

	<nav>
		<a href="formdataobat.php">[+] Tambah Data Obat</a>
	</nav>
	<br>
	<table border="1">
		<thead>
			<tr>
				<td>ID Obat</td>
				<td>Nama Obat</td>
				<td>Jenis Obat</td>
				<td>Aksi</td>
			</tr>
		</thead>
		<tbody>
			<?php
			$queryobat = "SELECT id_obat, nama_obat, jenis_obat FROM obat";
			$query = mysqli_query ($config, $queryobat);

			while ($obat = mysqli_fetch_array($query)){
				echo "<tr>";
				echo "<td>".$obat['id_obat']."</td>";
				echo "<td>".$obat['nama_obat']."</td>";
				echo "<td>".$obat['jenis_obat']."</td>";

				echo "<td>";
				echo "<a href='formeditobat.php?id_obat=".$obat['id_obat']."'>Edit</a> |";
				echo "<a href='hapusobat.php?id_obat=".$obat['id_obat']."'>Hapus</a>";
				echo "</td>";
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>