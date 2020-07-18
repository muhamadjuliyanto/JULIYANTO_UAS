<?php
  include '../koneksi.php';
  $query  = mysqli_query($db, "SELECT * FROM `provinsi`");
?>
<div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">INPUT DATA</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="input_proses.php" method="post">
              <div class="box-body">

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
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="jumlah positif..." name="positif" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Dirawat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Dirawat..." name="dirawat" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Sembuh</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Sembuh..." name="sembuh" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Meninggal</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Meninggal..." name="meninggal" required>
                </div>

            <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="input">Simpan</button>
              </div>
            </form>
          </div>
</div>