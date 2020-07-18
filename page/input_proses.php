<?php
	if (isset($_POST['input'])) {

		include '../koneksi.php';
		$wilayah	= $_POST['wilayah'];
		$positif	= $_POST['positif'];
		$dirawat 	= $_POST['dirawat'];
		$sembuh 	= $_POST['sembuh'];
		$meninggal 	= $_POST['meninggal'];

		$query 		= mysqli_query($db,"INSERT INTO `data_pasien` (`id`, `area`, `positif`, `rawat`, `sembuh`, `meninggal`) VALUES (NULL, '$wilayah', '$positif', '$dirawat', '$sembuh', '$meninggal')");

		if ($query) {
			echo "<script> alert('Data berhasil Disimpan') </script>";
			echo "<meta http-equiv='refresh' content='0; url=home.php?page=input'>";	
		} else {
			echo "<script> alert('Data Gagal Disimpan') </script>";
			echo "<meta http-equiv='refresh' content='0; url=home.php?page=input'>";
		}

	}
?>