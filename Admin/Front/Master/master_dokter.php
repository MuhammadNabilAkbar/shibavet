<?php include'../include/session.php' ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<?php include'../include/header.php'; ?>


<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">



    <?php include'../include/preloader.php'; ?>

    <?php include'../include/navbar.php'; ?>

    <?php include'../include/sidebar.php'; ?>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="../dashboard/dashboard.php" class="nav-link">
            <i class="nav-icon fas fa-solid fa-home"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../Data/process.php" class="nav-link">
            <i class="nav-icon fas fa-solid fa-recycle"></i>
            <p>
              Process
            </p>
          </a>
        </li>

        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-solid fa-folder"></i>
            <p>
              Master
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../Master/master_account.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Account</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../Master/master_dokter.php" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Dokter</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../Master/master_jenisgrooming.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Jenis Grooming</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-solid fa-file"></i>
            <p>
              Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../Data/datainap.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inap</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../Data/datadokter.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dokter</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../Data/datagrooming.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Grooming</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../Data/datakonsulon.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Konsulon</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="../Data/bigdata.php" class="nav-link">
            <i class="nav-icon fas fa-solid fa-database"></i>
            <p>
              Big Data
            </p>
          </a>
        </li>

      </ul>
    </nav>
  </div>
  <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1 class="m-0">Master / Dokter</h1>
          </div><!-- /.col -->
          <div class="col-sm-2">
            <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-md"><i
                class="fas fa-solid fa-plus"></i>&nbsp;&nbsp;Buat Dokter Baru</button>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0 table-responsive" style="max-height: 540px; table-layout:fixed; overflow:auto;">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px;">No</th>
                      <th style="width: 10px;">Nama</th>
                      <th style="width: 0px;">Keahlian</th>                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include'../../Back/conn.php';
                      $no = 1;
                      $query = mysqli_query($conn, "SELECT * FROM tb_mst_dokter");
                      while($d = mysqli_fetch_array($query)){
                      ?>
                    <tr>
                      <td><?=$no++;?></td>
                      <td><?php echo $d['nama_dokter'];?></td>
                      <td><?php echo $d['keahlian_dokter'];?></td>                      
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.row -->
        </div>
      </div><!-- /.container-fluid -->
      <!-- /.modal -->
      <div class="modal fade" id="modal-md">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Buat Dokter</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../../Back/exc-addmstdokter.php" method="POST">
              <div class="modal-body">
                <div class="container-fluid">
                  <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                      <!-- jquery validation -->
                      <!-- form start -->
                      <form id="quickForm">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="nama">Nama</label>
                            <input required type="text" name="nama_dokter" class="form-control" placeholder="Nama">
                          </div>

                          <div class="form-group">
                            <label for="keahlian">Keahlian</label>
                            <select class="custom-select rounded-0" id="keahlian" name="keahlian_dokter">
                              <option disabled selected>Keahlian</option>
                              <option value="Umum">Dokter Umum</option>
                              <option value="Spesialis Kandungan">Dokter Spesialis Kandungan</option>
                              <option value="Spesialis Operasi">Dokter Spesialis Operasi</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="keahlian">Harga</label>
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Rp</span>
                              <input required type="text" name="harga_dokter" class="form-control" placeholder="Harga">
                            </div>
                            </div>


                            <div class="form-group">
                              <label for="keahlian">Keterangan</label>
                              <input required type="text" name="keterangan_dokter" class="form-control"
                                placeholder="Keterangan">
                            </div>

                          </div>
                        </div>
                        <div class="form-group col-sm-6 text-left" style="padding-left:25px;">
                          <!-- <button type="submit" class="btn btn-danger" data-dismiss="modal"></button>  -->
                        </div>
                        <div class="form-group col-sm-6 text-right" style="padding-right:25px;">

                          <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <!-- /.card-body -->
                      </form>
                      <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                  </div>
                  <!-- /.row -->
                </div><!-- /.container-fluid -->
            </form>
          </div>

        </div>
        <!-- /.modal-content -->
      </div>      
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>
  <!-- /.content -->
  <?php include'../include/footer.php';?>
  </div>
  <!-- /.content-wrapper -->


</body>

</html>
