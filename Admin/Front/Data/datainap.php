<?php include'../include/session.php'; ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<title>Shiba Vet | Data Inap</title>

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

        <li class="nav-item">
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
              <a href="../Master/master_dokter.php" class="nav-link">
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

        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-solid fa-file"></i>
            <p>
              Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../Data/datainap.php" class="nav-link active">
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
  <!-- /.sidebar-menu -->

  <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Booking Inap</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Telepon</th>
                  <th>Kapasitas</th>
                  <th>Hari</th>
                  <th>Waktu</th>
                </tr>
              </thead>
              <tbody>
                <?php
                      include'../../Back/conn.php';
                      $no = 1;
                      $query = mysqli_query($conn, "SELECT * FROM tb_bookinginap");
                      while($d = mysqli_fetch_array($query)){
                      ?>
                <tr>
                  <td><?=$no++;?></td>
                  <td><?php echo $d['nama_inap'];?></td>
                  <td><?php echo $d['telp_inap'];?></td>
                  <td><?php echo $d['kapasitas_inap'];?></td>
                  <td><?php echo $d['jumlah_inap'];?></td>
                  <td><?php echo $d['waktu_inap'];?></td>


                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <?php include'../include/footer.php';?>
  <!-- /.content-wrapper -->


</body>

</html>
