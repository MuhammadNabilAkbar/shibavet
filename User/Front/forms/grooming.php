<!DOCTYPE html>
<html lang="en">

<?php include'../include/header.php'?>

<body>
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>&nbsp;</h2>
          <ol>
            <li><a href="../index.html" style="color:#7B1D37;">Lainnya</a></li>
            <li>Form Booking grooming</li>
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
                  <h4>Form Booking Grooming<div class="row">
                      <div class="col-md-3 form-group text-align-center">
                      </div>

                      <div class="col-md-3 form-group text-align-center">
                      </div>

                      <div class="col-md-2 form-group text-align-center">
                      </div>

                      <div class="col-md-4 form-group text-align-center">
                        <button type="button" class="harga-btn" id="myBtn2"><span class="d-none d-md-inline">
                            ?</button>
                      </div>

                      <!-- The Modal -->
                      <div id="myModal2" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                          <span class="close">&times;</span>
                          <br>
                          <div class="divider">Daftar Harga</div>
                          <br>
                          <p>*Grooming Sehat : Grooming sehat menggunakan shampoo khusus kucing</p>
                          <p>*Grooming Kutu : Grooming kutu menggunakan shampoo khusus kucing anti kutu</p>
                          <p>*Grooming Lengkap : Grooming lengkap menggunakan shampoo khusus kucing anti kutu dan jamur</p>
                          <br>

                          <div class="row">
                            <div class="col-md-1 form-group text-align-center">
                            </div>

                            <div class="col-md-10 form-group text-align-center">

                              <table class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th style="width:20%;">Kucing</th>
                                    <th style="width:40%;">Grooming</th>
                                    <th style="width:40%;">Harga</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>

                                    <td>1</td>
                                    <td>Grooming Sehat</td>
                                    <td>Rp 80.000</td>
                                  </tr>
                                  <tr>

                                    <td>1</td>
                                    <td>Grooming Kutu</td>
                                    <td>Rp 90.000</td>
                                  </tr>
                                  <tr>

                                    <td>1</td>
                                    <td>Grooming Lengkap</td>
                                    <td>Rp 110.000</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>

                            <div class="col-md-1 form-group text-align-center">
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-1 form-group text-align-center">
                            </div>

                            <div class="col-md-10 form-group text-align-center">

                              <table class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th style="width:20%;">Kucing</th>
                                    <th style="width:40%;">Hari</th>
                                    <th style="width:40%;">Harga</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>

                                    <td>2</td>
                                    <td>Grooming Sehat</td>
                                    <td>Rp 150.000</td>
                                  </tr>
                                  <tr>

                                    <td>2</td>
                                    <td>Grooming Kutu</td>
                                    <td>Rp 170.000</td>
                                  </tr>
                                  <tr>

                                    <td>2</td>
                                    <td>Grooming Lengkap</td>
                                    <td>Rp 200.000</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>

                            <div class="col-md-1 form-group text-align-center">
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-1 form-group text-align-center">
                            </div>

                            <div class="col-md-10 form-group text-align-center">

                              <table class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th style="width:20%;">Kucing</th>
                                    <th style="width:40%;">Hari</th>
                                    <th style="width:40%;">Harga</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>

                                    <td>3</td>
                                    <td>Grooming Sehat</td>
                                    <td>Rp 200.000</td>
                                  </tr>
                                  <tr>

                                    <td>3</td>
                                    <td>Grooming Kutu</td>
                                    <td>Rp 230.000</td>
                                  </tr>
                                  <tr>

                                    <td>3</td>
                                    <td>Grooming Lengkap</td>
                                    <td>Rp 280.000</td>
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

                  <form action="../../Back/exc-grooming.php" method="POST" role="form">

                  <div class="row">
                    <div class="col-md-1 form-group text-align-center">
                    </div>

                    <div class="col-md-10 form-group text-align-center">
                      <input type="text" name="nama_grooming" required class="form-control" id="name" placeholder="Nama"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                      <div class="validate"></div>
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
                          <input type="text" required name="telp_grooming" class="form-control"
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
                      <select name="jumlah_grooming" required id="department" class="form-select" data-toggle="tooltip"
                        data-placement="top" title="Klik ? untuk melihat daftar harga">
                        <option selected disabled>Jumlah</option>
                        <option value="1 Kucing">1 Kucing</option>
                        <option value="2 Kucing">2 Kucing</option>
                        <option value="3 Kucing">3 Kucing</option>
                      </select>
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
                      $query = mysqli_query($conn, "SELECT * FROM tb_mst_jenisgrooming");                      
                      ?>

                      <div class="col-md-10 form-group text-align-center">
                        <select name="jenis_grooming" required class="form-select">

                          <option selected disabled>Jenis Grooming</option>
                          <?php while($d = mysqli_fetch_array($query)){ ?>
                          <option value="<?=$d['jenisgrooming']?>"><?=$d['jenisgrooming']?></option>
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
                      <input type="date" name="waktu_grooming" required class="form-control" id="date">
                      <div class="validate"></div>
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

<?php include'../include/footer.php' ?>

  <script>
    // Get the modal
    var modal = document.getElementById("myModal2");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn2");

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

    $(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

</body>

</html>