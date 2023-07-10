<!DOCTYPE html>
<html lang="en">

<?php include'../include/header.php'; ?>

<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Selamat datang di Shiba Vet</h1>
      <h2>Semua keperluan untuk kucing anda ada disini</h2>
      <a href="../forms/konsulon.php" class="btn-get-started scrollto">Konsultansi Sekarang</a>
    </div>
  </section><!-- End Hero -->
  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Kenapa harus Shiba Vet?</h3>
              <p>
                Karena Shiba Vet menawarkan pengalaman terbaik untuk Penginapan, Grooming, Dokter, dan Konsultasi Online
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Detail <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fas fa-building"></i>
                    <h4>Penginapan</h4>
                    <p>Penginapan yang dijamin kualitas, keamanan, dan kenyamanan untuk kucing anda</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fas fa-cat"></i>
                    <h4>Grooming</h4>
                    <p>Berbagai macam Grooming seperti Grooming Sehat yang mengutamakan kesehatan dan kewangian kucing
                      anda</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fas fa-comment-medical"></i>
                    <h4>Konsultansi Online</h4>
                    <p>Konsultansi Online dengan dokter yang ahli dalam bidangnya</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> -->
          </div>

          <div
            class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Keahlian Dokter</h3>
            <p>Keahlian Dokter di Shiba Vet mengutamakan keselamatan dan kenyamanan kucing anda. Ada beberapa Bidang
              dokter pada Shiba Vet, yaitu</p>

            <div class="icon-box">
              <div class="icon"><i class="fas fa-user-md"></i></div>
              <h4 class="title"><a href="#">Dokter Umum</a></h4>
              <p class="description">Konsultasi tentang masalah umum pada kucing anda.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="fas fa-user-md"></i></div>
              <h4 class="title"><a href="#">Dokter Kandungan</a></h4>
              <p class="description">Konsultasi tentang masalah kandungan kucing anda.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="fas fa-user-md"></i></div>
              <h4 class="title"><a href="#">Dokter Operasi</a></h4>
              <p class="description">Konsultasi tentang masalah sebelum atau pasca operasi kucing anda.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">
          <?php
            include '../../Back/conn.php';
              $result = mysqli_query($conn,"SELECT COUNT(1) FROM tb_mst_dokter");
              $result2 = mysqli_query($conn,"SELECT COUNT(1) FROM tb_konsulon");
              $result3 = mysqli_query($conn,"SELECT COUNT(1) FROM tb_bookinginap");
              $result4 = mysqli_query($conn,"SELECT COUNT(1) FROM tb_grooming");
              $row = mysqli_fetch_array($result);
              $row2 = mysqli_fetch_array($result2);
              $row3 = mysqli_fetch_array($result3);
              $row4 = mysqli_fetch_array($result4);              
              $total = $row[0];
              $total2 = $row2[0];
              $total3 = $row3[0];
              $total4 = $row4[0];
            ?>
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?=$total?>" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Dokter</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="fas fa-user"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?=$total2?>" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Pelanggan</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="far fa-building"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?=$total3?>" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Inap</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-cat"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?=$total4?>" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Grooming</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Dokter</h2>
          <p>Dokter-dokter yang ada di Shiba Vet beserta keahliannya</p>
        </div>

        <div class="row">
          <?php 
                    
            $query = mysqli_query($conn, "SELECT * FROM tb_mst_dokter LIMIT 4");
            while($d = mysqli_fetch_array($query)){
            
          ?>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="../assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?=$d['nama_dokter']?></h4>
                <span><?=$d['keahlian_dokter']?></span>
                <p><?=$d['keterangan_dokter']?></p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
          <?php }?>
        </div>

      </div>
    </section><!-- End Doctors Section -->
  </main><!-- End #main -->
  <?php include '../include/footer.php'?>
</body>

</html>