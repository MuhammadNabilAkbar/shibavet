<?php include'../include/session.php'; ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<title>TDP | Dashboard</title>

<?php include'../include/header.php'; ?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">



    <?php include'../include/navbar.php'; ?>
    <?php include'../include/sidebar.php'; ?>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="../dashboard/dashboard.php" class="nav-link active">
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

        <li class="nav-item <?php if($_SESSION['username'] == 'admin'){echo'';}else{echo'hide';}?>">
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

        <li class="nav-item <?php if($_SESSION['username'] == 'admin'){echo'';}else{echo'hide';}?>">
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
        <li class="nav-item <?php if($_SESSION['username'] == 'admin'){echo'';}else{echo'hide';}?>">
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
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <?php  include'../../Back/conn.php';  ?>
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                  $result = mysqli_query($conn,"SELECT COUNT(1) FROM tb_bookinginap");
                  $row = mysqli_fetch_array($result);
                  
                  $total = $row[0];
                  echo "<h3>$total</h3>";
                  ?>

                <p>Inap</p>
              </div>
              <div class="icon">
                <i class="fas fa-building"></i>
              </div>
              <?php if($_SESSION['username'] == 'admin'){
                echo'<a href="../Data/datainap.php" class="small-box-footer">
                Detail <i class="fas fa-arrow-circle-right"></i>
              </a>';
                } ?>
              

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">

                <?php
                  $result = mysqli_query($conn,"SELECT COUNT(1) FROM tb_bookingdokter");
                  $row = mysqli_fetch_array($result);
                  
                  $total = $row[0];
                  echo "<h3>$total</h3>";
                  ?>
                <p>Dokter</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-md"></i>
              </div>

              <?php if($_SESSION['username'] == 'admin'){
                echo'<a href="../Data/datadokter.php" class="small-box-footer">
                Detail <i class="fas fa-arrow-circle-right"></i>
              </a>';
                
              }?>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <?php
                  $result = mysqli_query($conn,"SELECT COUNT(1) FROM tb_grooming");
                  $row = mysqli_fetch_array($result);
                  
                  $total = $row[0];
                  echo "<h3>$total</h3>";
                  ?>

                <p>Grooming</p>
              </div>
              <div class="icon">
                <i class="fas fa-cat"></i>
              </div>

              <?php if($_SESSION['username'] == 'admin'){
              echo'<a href="../Data/datagrooming.php" class="small-box-footer">
              Detail <i class="fas fa-arrow-circle-right"></i>
            </a>';
              }?>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php
                  $result = mysqli_query($conn,"SELECT COUNT(1) FROM tb_konsulon");
                  $row = mysqli_fetch_array($result);
                  
                  $total = $row[0];
                  echo "<h3>$total</h3>";
                  mysqli_close($conn);
                  ?>

                <p>Konsul Online</p>
              </div>
              <div class="icon">
                <i class="fas fa-comment-medical"></i>
              </div>

              <?php if($_SESSION['username'] == 'admin'){
              echo'<a href="../Data/datakonsulon.php" class="small-box-footer">
              Detail <i class="fas fa-arrow-circle-right"></i>
            </a>';
              }?>

            </div>
          </div>
          <!-- ./col -->
        </div>



        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include'../include/footer.php'; ?>

</body>

</html>
