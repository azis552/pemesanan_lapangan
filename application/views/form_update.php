
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">FORM UPDATE PEMESANAN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PEMESANAN</a></li>
              <li class="breadcrumb-item active">UPDATE</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                PEMESANAN
            </div>
            <form action="<?= base_url('pemesanan/update_data')?>" method="post">
              <div class="card-body">
              <?php 
                  $message = $this->session->flashdata('message');
                  
                  if($message == "success"){
                ?>
                    <script>alert('berhasil mengubah data')</script>
                <?php 
                  };
                  foreach ($data as $i) :
                ?>
                  <label for="">ID Transaksi</label>
                  <input  readonly value="<?= $i->id?>" required type="text" class="form-control" name="id">
                  <label for="">Nama Lapangan</label>
                  <input value="<?= $i->nama_lapangan?>" required type="text" class="form-control" name="nama_lapangan">
                  <label for="">Lebar Lapangan</label>
                  <input value="<?= $i->lebar_lapangan?>" required type="text" class="form-control" name="lebar_lapangan">
                  <label for="">Bola</label>
                  <input value="<?= $i->bola?>" required type="text" class="form-control" name="bola">
                  <label for="">Jenis Rumput</label>
                  <select required class="form-control" name="jenis_rumput" id="">
                    <option value="">Pilih Jenis Rumput</option>
                    <option value="Asli">Rumput Asli</option>
                    <option value="Sintetis">Rumput Sintetis</option>
                  </select>
                  <label for="">Tanggal Pemesanan</label>
                  <input value="<?= $i->tanggal_pemesanan?>"required type="date" class="form-control" name="tanggal_pemesanan" >
                  <label for="">Jam Pemesanan</label>
                  <input values="<?= $i->jam_pemesanan?>" required type="TIME" name="jam_pemesanan" class="form-control">
              </div>
              <?php 
                    endforeach;
              ?>
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary" >Update</button>
              </div>
            </form>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  