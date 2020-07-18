<?php
  session_start();
  include '../koneksi.php';
  $id = $_GET['id'];
  $query = mysqli_query($db, "SELECT * FROM `data_pasien` WHERE `id` = '$id' ");
  $query2 = mysqli_query($db, "SELECT * FROM `data_pasien` WHERE `id` = '$id' ");
  $data  = mysqli_fetch_assoc($query);

      function tgl_indo($tanggal){
      $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
      );
      $pecahkan = explode('-', $tanggal);
      
      // variabel pecahkan 0 = tanggal
      // variabel pecahkan 1 = bulan
      // variabel pecahkan 2 = tahun
     
      return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
?> 

    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">             
             <center>
               
               Data Pemantauan Covid-19 Wilayah <?php echo $data['area'];?><br>
               <?php date_default_timezone_set('Asia/Jakarta'); ?>
               Per <?php echo tgl_indo(date('Y-m-d'))." ".date('h:i:sa');?><br>
               <?php echo $_SESSION['nama']."/".$_SESSION['nim'];?>
               
             </center>
          </h2>
        </div>

      </div>

 
    <table class="table table-striped">
        <tr>
          <th>Positif</th>
          <th>Dirawat</th>
          <th>Sembuh</th>
          <th>Meninggal</th>
        <?php
          $no = 0;
          while($data2 = mysqli_fetch_array($query2)){?>
          <tr>
            <td><?php echo $data2['positif'];?></td>
            <td><?php echo $data2['rawat'];?></td>
            <td><?php echo $data2['sembuh'];?></td>
            <td><?php echo $data2['meninggal'];?></td>
          </tr>
          <?php } ?>    
      </table>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
  <script>
    window.print();
  </script>
    </section>
