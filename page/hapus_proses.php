<?php
	include '../koneksi.php';

	if (isset($_GET['id'])) {
		# code...
		$id = $_GET['id'];

		$query = mysqli_query($db, "DELETE FROM `data_pasien` WHERE `id` = '$id' ");

		if ($query) {
			echo "<script> alert('Data berhasil Dihapus') </script>";
			echo "<meta http-equiv='refresh' content='0; url=home.php?page=hapus'>";	
		} else {
			echo "<script> alert('Data Gagal Dihapus') </script>";
			echo "<meta http-equiv='refresh' content='0; url=home.php?page=hapus'>";
		}
	}
?>