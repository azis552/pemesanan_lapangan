
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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
              <h3>Data Pemesanan</h3>
              <?php 
                  $message = $this->session->flashdata('message');
                  
                  if($message == "success"){
                ?>
                    <script>alert('berhasil memasukkan data')</script>
                <?php 
                  }else if($message == "success update"){
                ?>
                  <script>alert('berhasil merubah data')</script>
                <?php
                  }else if($message == "success delete"){
                ?>
                  <script>alert('berhasil menghapus data')</script>
                <?php
                  };
                ?>
            </div>
            <div class="card-body">
              <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Lapangan</th>
                      <th>Bola</th>
                      <th>Tanggal & Jam</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i = 1;
                      foreach($data as $d) :
                    ?>
                      <tr>
                        <td><?= $i ?></td>
                        <td><?= $d->nama_lapangan ?></td>
                        <td><?= $d->bola ?></td>
                        <td><?= $d->tanggal_pemesanan."JAM".$d->jam_pemesanan ?></td>
                        <td>
                            <a href="<?= base_url()?>pemesanan/update_pemesanan?id=<?= $d->id ?>" type="button" class="btn btn-warning"><i class="fas fa-pencil-ruler"></i></a>
                            <a href="<?= base_url()?>pemesanan/delete_pemesanan?id=<?= $d->id ?>" type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php
                      $i++;
                      endforeach;
                    ?>
                  </tbody>
              </table>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  