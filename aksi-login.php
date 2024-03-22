<?php
	$username   = $_POST['username'];
	$pass       = $_POST['password'];

	include 'koneksi.php';

	$user = mysqli_query($koneksi,"select * from ponpes where username='$username' and password='$pass'");
	$chek = mysqli_num_rows($user);
	header("location:admin-page.php");
?>