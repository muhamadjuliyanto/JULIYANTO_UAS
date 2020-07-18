<?php
	include '../koneksi.php';
	if (isset($_POST['edit'])) {
		# code...
		$id = $_POST['id'];
		$wilayah	= $_POST['wilayah'];
		$positif	= $_POST['positif'];
		$dirawat 	= $_POST['dirawat'];
		$sembuh 	= $_POST['sembuh'];
		$meninggal 	= $_POST['meninggal'];

		$query = mysqli_query($db,"UPDATE `data_pasien` SET `area` = '$wilayah', `positif` = '$positif', `rawat` = '$dirawat', `sembuh` = '$sembuh', `meninggal` = '$meninggal' WHERE `data_pasien`.`id` = '$id' ");

		if ($query) {
			echo "<script> alert('Data berhasil Di Update') </script>";
			echo "<meta http-equiv='refresh' content='0; url=home.php?page=edit'>";	
		} else {
			echo "<script> alert('Data Gagal Di Update') </script>";
			echo "<meta http-equiv='refresh' content='0; url=home.php?page=edit'>";
		}
	}
?>