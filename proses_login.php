<?php
	include('koneksi.php');
	session_start();

	if(isset($_POST['log'])){
		$un = $_POST['username'];
		$pw = $_POST['password'];

		/** Fungsi mysql_num_rows pada php adalah untuk mengetahui berapa jumlah baris di dalam tabel database yang dipanggil oleh perintah mysql_query() sehingga nilai dapat ditampilkan dalam bentuk angka numerik.**/

		$data = mysqli_query($db, "SELECT * FROM `login` WHERE username = '$un' AND password = '$pw' ");
		$cek = mysqli_num_rows($data);

		if($cek > 0){
			$data = mysqli_fetch_assoc($data);

			if($data['level'] == "admin"){
				$_SESSION['nama'] = $data['nama'];
				$_SESSION['nim'] = $data['nim'];
	 			echo "<script> alert('Login Berhasil') </script>";
				echo "<meta http-equiv='refresh' content='0; url=page/home.php'>";

			}else if($data['level'] == "user"){
	 			$_SESSION['nama'] = $data['nama'];
	 			$_SESSION['nim'] = $data['nim'];
	 			echo "<script> alert('Login Berhasil') </script>";
				echo "<meta http-equiv='refresh' content='0; url=page/home.php'>";
	 		}else{
	 			echo "<script> alert('login gagal') </script>";
				echo "<meta http-equiv='refresh' content='0; url=index.php'>";
	 		}

	 	}else{
	 		echo "<script> alert('login gagal') </script>";
			echo "<meta http-equiv='refresh' content='0; url=index.php'>";
		} 
	}
?>
