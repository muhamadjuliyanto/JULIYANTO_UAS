<?php
	session_start();
	$_SESSION['nama'] = '';
	unset($_SESSION['nama']);
	$_SESSION['nim'] = '';
	unset($_SESSION['nim']);
	session_unset();
	session_destroy();
	echo "<script> alert('Logout Berhasil') </script>";
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
?>