<?php 
		$nim    =$_POST['nim'];
		$nama   =$_POST['Nama'];
		$prodi  =$_POST['prodi'];
		
	include('koneksi.php');
	$simpan = mysql_query("insert into mahasiswa values ('$nim','$nama','$prodi')");
	echo "data berhasil disimpan.....";

	include ('tampil.php');

 ?>