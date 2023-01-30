<?php 
	session_start();
	incude "koneksi.php";
	#jika ditekan tombol login
	if (isset($_post['login'])) {
	$username = $_post['username'];
	$password = md5($_post['password']);
	$sql =mysql_query("select * from user WHERE username='$username' && password
		='$password'");
	$num =mysql_query($sql);
	if ($num==)


 ?>