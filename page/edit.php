<div class="menu">
	<h3>EDIT DATA</h3><br>
	<div class="kotak_list">
	<table class="table table-striped">
		<tr>
			<th>No</th>
			<th>Nama Wilayah</th>
			<th>Positif</th>
			<th>Dirawat</th>
			<th>Sembuh</th>
			<th>Meninggal</th>
			<th>Aksi</th>
		<?php
			include '../koneksi.php';
			$query = mysqli_query($db, "SELECT * FROM data_pasien");
			$no = 0;
			while($data = mysqli_fetch_array($query)){
				$no++; ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['area'];?></td>
				<td><?php echo $data['positif'];?></td>
				<td><?php echo $data['rawat'];?></td>
				<td><?php echo $data['sembuh'];?></td>
				<td><?php echo $data['meninggal'];?></td>
				<td>
					<a href="?page=edit_form&id=<?php echo $data['id'];?>" class="btn bg-orange" onclick="return confirm('Ubah Data ini?');">Edit</a>
				</td>
			</tr>
	    <?php } ?>		
	</table>
	</div>
	<p>Jumlah Data : <?php echo mysqli_num_rows($query) ?>
</div>