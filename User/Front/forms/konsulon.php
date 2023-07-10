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
            <li><a href="../index.html" style="color:#7B1D37;">Home</a></li>
            <li>Form Konsul Online</li>
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
                  <h4>Form Konsul Online<div class="row">
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
                                    <td>Rp 20.000</td>
                                  </tr>
                                  <tr>
                                    <td>Dokter Spesialis Kandungan</td>
                                    <td>Rp 40.000</td>
                                  </tr>
                                  <tr>
                                    <td>Dokter Spesialis Operasi</td>
                                    <td>Rp 60.000</td>
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

                  <form action="../../Back/exc-konsulon.php" method="POST" role="form">

                  <div class="row">
                    <div class="col-md-1 form-group text-align-center">
                    </div>

                    <div class="col-md-10 form-group text-align-center">
                      <input type="text" name="nama_konsulon" required class="form-control" id="name" placeholder="Nama">
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
                          <input type="text" required name="telp_konsulon" class="form-control"
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

                    <div class="col-md-10 form-group text-align-center">
                      <select name="pildok" required class="form-select">
                        <option selected disabled>Pilih Dokter</option>
                        <option value="Dokter Umum">Dokter Irna - Umum</option>
                        <option value="Dokter Kandungan">Dokter Dewi - Spesialis Kandungan</option>
                        <option value="Dokter Operasi">Dokter Fajar - Spesialis Operasi</option>
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
                      <select name="keluhan" class="form-select">
                        <option selected disabled>Jenis Keluhan</option>
                        <option value="Luar">Masalah/Luka Luar</option>
                        <option value="Dalam">Masalah/Luka Dalam</option>
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
                      <select name="jenis_konsulon" id="department" class="form-select">
                        <option disabled>Jenis Kucing</option>
                        <option value="Domestik">Domestik</option>
                        <option value="Ras">Ras</option>
                        <option value="Campuran">Campuran</option>
                      </select>
                    </div>


                    <div class="col-md-1 form-group text-align-center">
                    </div>
                  </div>

                  <br>

                  <div class="row">
                    <div class="col-md-7 form-group text-align-center">
                    </div>

                    <div class="col-md-2 form-group text-align-center">
                      <a href="../index.html" class="appointment-btn2 scrollto"><span
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

<?php include'../include/footer.php'?>
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