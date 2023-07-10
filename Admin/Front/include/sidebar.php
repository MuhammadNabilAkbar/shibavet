<?php include '../../Back/conn.php';    ?> 
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
                 
      <a href="../dashboard/dashboard.php" class="brand-link">
        <img src="../dist/img/Logo2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Shiba Vet</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/<?php if($_SESSION['username'] == 'dokter'){echo'avatar5.png';}else{echo'avatar4.png';}?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <span style="color: white;"><?php echo $_SESSION['username']; ?></span>
          </div>
        </div>                         
