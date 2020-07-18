<?php
  include '../koneksi.php';
  $id = $_GET['id'];
  $query   = mysqli_query($db, "SELECT * FROM `provinsi`");
  $data   = mysqli_fetch_assoc($query);
  $query2  = mysqli_query($db, "SELECT * FROM `data_pasien` WHERE `id` = '$id' ");
  $data2   = mysqli_fetch_assoc($query2);
?>
<div class="col-md-8">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit data</h3>
            </div>

            <form role="form" action="edit_proses.php" method="post">
              <div class="box-body">

                <div class="form-group">
                  <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?php echo $data2['id'];?>" name="id" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Wilayah Sebelumnya</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="jumlah positif..." name="" value="<?php echo $data2['area'];?>" disabled>
                </div>

                <div class="form-group">
                  <label>Nama Wilayah</label>
                  <select name="wilayah" class="form-control select2" required="">
                      <option value="" selected="selected">-</option>
                    <?php while($data = mysqli_fetch_assoc($query)){?>
                      <option value="<?php echo $data['nama']; ?>"><?php echo $data['nama'];?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Positif</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="jumlah positif..." name="positif" value="<?php echo $data2['positif'];?>" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Dirawat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Dirawat..." name="dirawat" value="<?php echo $data2['rawat'];?>" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Sembuh</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Sembuh..." name="sembuh" value="<?php echo $data2['sembuh'];?>" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Meninggal</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Meninggal..." name="meninggal" value="<?php echo $data2['meninggal'];?>" required>
                </div>

            <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="edit">edit</button>
              </div>
            </form>
          </div>
</div>