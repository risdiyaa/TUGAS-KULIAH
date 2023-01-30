</!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<p aligh=center>Laporan Data Mahasiswa</p><br>
	<a href="tambah.php">tambah data</a>
	<table border=1>1
		<tr>
			<th>NO</th><th>NIM</th><th>NAMA MAHASISWA</th><th>PRODI</th>
		</tr>
		<?php
			$no=0;
			include("koneksi.php");
			$query=mysqli_query($konek, "select * from mahasiswa");
			while ($row=mysqli_fetch_array($query)) {
				$no++;
		?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $row['nim']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['prodi']; ?></td>
				<?php } ?>
				</tr>
	</table>
</body>
</html>