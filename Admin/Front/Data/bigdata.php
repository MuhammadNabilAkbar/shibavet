<?php include'../include/session.php';?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<title>Shiba Vet | Big Data</title>

<?php include'../include/header.php';?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <?php include'../include/preloader.php';?>
    <?php include'../include/navbar.php';?>
    <?php include'../include/sidebar.php';?>

    <!-- Sidebar Menu -->
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

        <li class="nav-item <?php if($_SESSION['username'] == 'dokter'){echo'hide';}?>">
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

        <li class="nav-item <?php if($_SESSION['username'] == 'dokter'){echo'hide';}?>">
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
            <li class="nav-item hide">
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
        <li class="nav-item <?php if($_SESSION['username'] == 'dokter'){echo'hide';}?>">
          <a href="../Data/bigdata.php" class="nav-link active">
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
          <div class="col-sm-6">
            <h1 class="m-0">Big Data</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0 table-responsive" style="max-height: 535px; table-layout:fixed; overflow:auto;">
                <div id="accordion">
                  <div class="card card-secondary">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne"
                          aria-expanded="false">
                          Booking Inap
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>No Telepon</th>
                              <th>Kapasitas</th>
                              <th>Jumlah</th>
                              <th>Total</th>
                              <th>Metode Pembayaran</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                      include'../../Back/conn.php';
                      $no = 1;
                      $query = mysqli_query($conn, "SELECT * FROM tb_bookinginap WHERE status_inap='Selesai'");                      
                      while($d = mysqli_fetch_array($query)){
                      ?>
                            <tr>
                              <td><?=$no++;?></td>
                              <td><?php echo $d['nama_inap'];?></td>
                              <td><?php echo $d['telp_inap'];?></td>
                              <td><?php echo $d['kapasitas_inap'];?></td>
                              <td><?php echo $d['jumlah_inap'];?></td>
                              <td><?php echo $d['total_inap'];?></td>
                              <td><?php echo $d['metode_pembayaran'];?></td>
                            </tr>
                            <?php }?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card card-secondary">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                          Booking Dokter
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>No Telepon</th>
                              <th>Pildok</th>
                              <th>Waktu</th>
                              <th>Metode Pembayaran</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                      include'../../Back/conn.php';
                      $no = 1;
                      $query = mysqli_query($conn, "SELECT * FROM tb_bookingdokter WHERE status_bdokter='Selesai'");
                      while($d = mysqli_fetch_array($query)){
                      ?>
                            <tr>
                              <td><?=$no++;?></td>
                              <td><?php echo $d['nama_bdokter'];?></td>
                              <td><?php echo $d['telp_bdokter'];?></td>
                              <td><?php echo $d['pildok'];?></td>
                              <td><?php echo $d['waktu_bdokter'];?></td>
                              <td><?php echo $d['metode_pembayaran'];?></td>
                            </tr>
                            <?php }?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card card-secondary">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                          Booking Grooming
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        <table id="example3" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>No Telepon</th>
                              <th>Kapasitas</th>
                              <th>Jumlah</th>
                              <th>Total</th>
                              <th>Metode Pembayaran</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                      include'../../Back/conn.php';
                      $no = 1;
                      $query = mysqli_query($conn, "SELECT * FROM tb_grooming WHERE status_grooming='Selesai'");
                      while($d = mysqli_fetch_array($query)){
                      ?>
                            <tr>
                              <td><?=$no++;?></td>
                              <td><?php echo $d['nama_grooming'];?></td>
                              <td><?php echo $d['telp_grooming'];?></td>
                              <td><?php echo $d['jumlah_grooming'];?></td>
                              <td><?php echo $d['jenis_grooming'];?></td>
                              <td><?php echo $d['total_grooming'];?></td>
                              <td><?php echo $d['metode_pembayaran'];?></td>
                            </tr>
                            <?php }?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card card-secondary">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                          Booking Konsulon
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        <table id="example4" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>No Telepon</th>
                              <th>Pildok</th>
                              <th>Keluhan</th>
                              <th>Jenis</th>
                              <th>Total</th>
                              <th>Metode Pembayaran</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                                    include'../../Back/conn.php';
                                    $no = 1;
                                    $query = mysqli_query($conn, "SELECT * FROM tb_konsulon WHERE status_konsulon='Selesai'");
                                    while($d = mysqli_fetch_array($query)){
                                    ?>
                            <tr>
                              <td><?=$no++;?></td>
                              <td><?php echo $d['nama_konsulon'];?></td>
                              <td><?php echo $d['telp_konsulon'];?></td>
                              <td><?php echo $d['pildok'];?></td>
                              <td><?php echo $d['keluhan'];?></td>
                              <td><?php echo $d['jenis_konsulon'];?></td>
                              <td><?php echo $d['total_konsulon'];?></td>
                              <td><?php echo $d['metode_pembayaran'];?></td>
                            </tr>
                            <?php }?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.row -->
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <?php include'../include/footer.php'; ?>
  </div>
  <!-- /.content-wrapper -->

</body>

</html>
