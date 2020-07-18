# UAS PEMROGRAMAN WEB 2
KELOMPOK 6
171011401469    Muhamad Ihsan Ashari
2016142099      Muhamad Juliyanto
171011401427    Muhammad Dinul Fikri
2015140323      Muhammad Saebani
171011401462    Muhammad Yusron

Fungsi login: 
username :	1. ihsan
			2. juli
			3. dinul
			4. saebani
			5. yusron

password : admin

 Penjelasan menu dan fungsi pada aplikasi Pendataan Covid 19 : 
•	index.php 
sebagai default landing page saat membuka website.
berisi script bootstrap untuk membuat tampilan website agar lebih menarik.
•	koneksi.php
sebagai menu/halaman untuk menghubungkan website dengan database.
berisi informasi mengenai informasi dasar database dan proses koneksi website kedatabase menggunakan 
$db = mysqli_connect($host, $user, $pass, $name);
•	proses_login.php
halaman website yang menampilkan login page.
if(isset($_POST['log'])){ ~> digunakan untuk mengepost informasi dari database yang digunakan untuk melakukan login.

$_SESSION['nama'] = $data['nama']; ~> digunakan untuk menyimpan informasi login pada website.
echo "<script> alert('Login Berhasil') </script>"; ~> alert berfungs untuk memberikan tanda/warning seteah berhasil/gagal login.
•	Home.php
Berisi menu-menu pada website.
•	Hal_home.php
Halaman utama sebagai landing page setelah login
•	Input.php
Merupakan halaman untuk melakukan inputan data pemantauan.
<form role="form" action="input_proses.php" method="post"> ~> merupakan script untuk melakukan perintah post pada data yang telah di input.
<select name="wilayah" class="form-control select2" required=""> ~> script untuk menampilkan menu dropdown provinsi.
<button type="submit" class="btn btn-primary" name="input">Simpan</button> ~> script untuk membuat tombol submit dan menyimpan nilai inputan kedalam database.
•	Input_proses.php
Merupakan halaman yang dibuat untuk memproses inputan data kedalam website.
$query 		= mysqli_query($db,"INSERT INTO `data_pasien` ~> script untuk mengirim data inputan kedalam database.
•	Edit.php
Digunakan untuk menampilkan data yang telah diinput pada menu edit.
$query = mysqli_query($db, "SELECT * FROM data_pasien"); ~> script untuk menampilkan data dari database.
•	Edit_form.php
Digunakan untuk menampilkan menu edit data.
$id = $_GET['id']; ~> digunakan untuk mengambil data dari database.
•	Edit_proses.php
Halaman yang dibuat sebagai proses penyimpanan data setelah proses editing.
Prosesnya sama dengan input data, hanya saja proses edit mengganti data yang lama dengan data baru yang sebelumnya telah di input.
•	Hapus.php
Digunakan untuk menampilkan halaman hapus pada menu.
•	Hapus_proses.php
Halaman untuk menghapus data yang sebelumnya telah diinput kedalam database. 
•	Laporan.php
Halaman untuk menampilkan data yang telah diinput.
$no++; ?> ~> digunakan untuk melakukan perulangan data sejumlah data yang telah diinput.
<p>Jumlah Data : <?php echo mysqli_num_rows($query) ?> ~> digunakan untuk menghitung jumlah data yang telah diinput.
•	Cetak.php
Halaman yang berfungsi untuk menampilkan data pada website.
<?php echo $data['area'];?> ~> untuk menampilkan informasi provinsi dari menu dropdown.
<?php date_default_timezone_set('Asia/Jakarta'); ?> ~> untuk menampilkan informasi zona waktu yang digunakan.
<?php echo tgl_indo(date('Y-m-d'))." ~> script untuk menampilkan informasi tanggal sekarang.
".date('h:i:sa');?><br> ~> untuk menampilkan informasi tanggal, jam, menit dan detik saat ini.
$no = 0; ~> digunakan sebagai perulangan nomor secara otomatis.
•	Cetak_pdf.php
Digunakan untuk halaman print dokumen kedalam bentuk file pdf.
window.print(); ~> script untuk mencetak halaman.
•	Logout.php
Halaman logout yang berfungsi untuk keluar dari sistem/website.
session_unset(); ~> berfungsi untuk menghapus data pada session.
session_destroy(); ~> sama dengan session unset, session destroy juga berfungsi untuk menghapus/menghancurkan data yang tersimpan pada session sebelumnya.




