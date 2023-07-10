<!DOCTYPE html>
<html lang="en">

<?php include'../include/header.php' ?>

<body>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>&nbsp;</h2>
          <ol>
            <li><a href="../index.html" style="color:#7B1D37;">Lainnya</a></li>
            <li>Form Booking Dokter</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="col-md-12">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-xl-2 d-flex align-items-stretch">
              </div>

              <div class="col-xl-8 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="fa-solid fa-edit"></i>
                  <h4>Form Booking Dokter<div class="row">
                      <div class="col-md-3 form-group text-align-center">
                      </div>

                      <div class="col-md-3 form-group text-align-center">
                      </div>

                      <div class="col-md-2 form-group text-align-center">
                      </div>

                      <div class="col-md-4 form-group text-align-center">
                        <button type="button" class="harga-btn" id="myBtn"><span class="d-none d-md-inline">
                            ?</button>
                      </div>

                      <!-- The Modal -->
                      <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                          <span class="close">&times;</span>
                          <br>
                          <div class="divider">Daftar Harga</div>

                          <br>

                          <div class="row">
                            <div class="col-md-1 form-group text-align-center">
                            </div>

                            <div class="col-md-10 form-group text-align-center">

                              <table class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th style="width:40%;">Dokter</th>
                                    <th style="width:40%;">Harga</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Dokter Umum</td>
                                    <td>Rp 50.000</td>
                                  </tr>
                                  <tr>
                                    <td>Dokter Spesialis Kandungan</td>
                                    <td>Rp 100.000</td>
                                  </tr>
                                  <tr>
                                    <td>Dokter Spesialis Operasi</td>
                                    <td>Rp 150.000</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>

                            <div class="col-md-1 form-group text-align-center">
                            </div>
                          </div>
                        </div>

                      </div>

                    </div>
                  </h4>

                  <form action="../../Back/exc-dokter.php" method="POST" role="form">

                    <div class="row">
                      <div class="col-md-1 form-group text-align-center">
                      </div>

                      <div class="col-md-10 form-group text-align-center">
                        <input type="text" required name="nama_bdokter" class="form-control" placeholder="Nama">
                      </div>

                      <div class="col-md-1 form-group text-align-center">
                      </div>
                    </div>

                    <br>

                    <div class="row">
                      <div class="col-md-1 form-group text-align-center">
                      </div>

                      <div class="col-md-10 form-group text-align-center">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">+62</span>
                          </div>
                          <input type="text" required name="telp_bdokter" class="form-control"
                          placeholder="Nomor telepon">
                        </div>
                      </div>                     

                      <div class="col-md-1 form-group text-align-center">
                      </div>
                    </div>

                    <br>

                    <div class="row">
                      <div class="col-md-1 form-group text-align-center">
                      </div>

                      <?php
                      include'../../Back/conn.php';
                      $no = 1;
                      $query = mysqli_query($conn, "SELECT * FROM tb_mst_dokter");                      
                      ?>

                      <div class="col-md-10 form-group text-align-center">
                        <select name="pildok" required class="form-select">

                          <option selected disabled>Pilih Dokter</option>
                          <?php while($d = mysqli_fetch_array($query)){ ?>
                          <option value="Dokter <?=$d['nama_dokter']?> - <?=$d['keahlian_dokter']?>">Dokter
                            <?= $d['nama_dokter'] ?> - <?=$d['keahlian_dokter']?></option>
                          <?php } ?>
                        </select>
                      </div>

                      <div class="col-md-1 form-group text-align-center">
                      </div>
                    </div>

                    <br>

                    <div class="row">
                      <div class="col-md-1 form-group text-align-center">
                      </div>

                      <div class="col-md-10 form-group text-align-center">
                        <input type="date" name="waktu_bdokter" class="form-control" id="date">
                      </div>

                      <div class="col-md-1 form-group text-align-center">
                      </div>
                    </div>

                    <br>

                    <div class="row">
                      <div class="col-md-7 form-group text-align-center">
                      </div>

                      <div class="col-md-2 form-group text-align-center">
                        <a href="../index.php" class="appointment-btn2 scrollto"><span
                            class="d-none d-md-inline">Cancel</a>
                      </div>

                      <div class="col-md-2 form-group text-align-center">
                        <button type="submit" name="submit" class="appointment-btn"><span
                            class="d-none d-md-inline">Checkout</button>
                      </div>

                      <div class="col-md-1 form-group text-align-center">
                      </div>
                    </div>


                  </form>
                </div>
              </div>
              <div class="col-xl-2 d-flex align-items-stretch">
              </div>
            </div>

          </div>
        </div>

      </div>

      </div>

      </div>

    </section><!-- End Why Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Shiba Vet</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/" style="color: #7B1D37;">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>


  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function () {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

</body>

</html>