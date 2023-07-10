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
                        <li>Checkout</li>
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
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <h4>Checkout
                                        <div class="row">
                                            <div class="col-md-3 form-group text-align-center">
                                            </div>

                                            <div class="col-md-3 form-group text-align-center">
                                            </div>

                                            <div class="col-md-2 form-group text-align-center">
                                            </div>

                                            <!-- <div class="col-md-4 form-group text-align-center">
                        <button type="button" class="harga-btn" id="myBtn"><span class="d-none d-md-inline">
                            ?</button>
                      </div> -->

                                        </div>
                                    </h4>
                                    <?php
	                                include '../../Back/conn.php';
	                                $telp_bdokter = $_GET['telp_bdokter'];
	                                $data = mysqli_query($conn,"SELECT * FROM tb_bookingdokter WHERE telp_bdokter = '$telp_bdokter'");
	                                while($d = mysqli_fetch_array($data)){
		                            ?>



                                    <form action="../../../User/Back/exc-checkoutdokter.php" method="POST" role="form">

                                        <div class="row">
                                            <div class="col-md-1 form-group text-align-center">
                                            </div>

                                            <div class="col-md-10 form-group text-align-center">
                                                <input type="text" name="nama_bdokter" class="form-control"
                                                    readonly="true" id="name" value="<?= $d['nama_bdokter']?>">
                                            </div>

                                            <div class="col-md-1 form-group text-align-center">
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            <div class="col-md-1 form-group text-align-center">
                                            </div>

                                            <div class="col-md-10 form-group text-align-center">
                                                <input type="text" readonly="true" name="telp_bdokter"
                                                    class="form-control" value="<?= $d['telp_bdokter']?>">
                                            </div>

                                            <div class="col-md-1 form-group text-align-center">
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            <div class="col-md-1 form-group text-align-center">
                                            </div>

                                            <div class="col-md-10 form-group text-align-center">
                                                <input type="text" readonly="true" name="pildok"
                                                    class="form-control" value="<?= $d['pildok']?>">
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
                                                    </div>
                                                    <input type="text" readonly="true" name="waktu_bdokter"
                                                        class="form-control" placeholder="Jumlah"
                                                        value="<?= $d['waktu_bdokter']?>">

                                                </div>
                                            </div>

                                            <div class="col-md-1 form-group text-align-center">
                                            </div>
                                        </div>                                      

                                        <hr>

                                        <?php } ?>

                                        <!-- <h4>Pembayaran</h4> -->

                                        <div class="row">                                                                         
                                            <br>
                                            <br>
                                            <div class="col-md-1 form-group text-align-center">
                                            </div>

                                            <div class="col-md-10 form-group text-align-center">
                                                <select name="metode_pembayaran" id="metode_pembayaran" required
                                                    class="form-select">
                                                    <option selected readonly="true">Metode Pembayaran</option>
                                                    <option value="DANA">DANA</option>
                                                    <option value="OVO">OVO</option>
                                                    <option value="GOPAY">GOPAY</option>
                                                    <option value="MANDIRI">MANDIRI</option>
                                                    <option value="BCA">BCA</option>
                                                </select>
                                            </div>
                                            <div class="DANA box1"><img class="sizedana" src="../assets/img/dana.png"
                                                    alt="IMG">
                                                <hr>081807840786<br>ATAS NAMA <br>SHIBA VET</div>
                                            <div class="OVO box1"><img class="sizeovo" src="../assets/img/ovo.png"
                                                    alt="IMG">
                                                <hr>081807840786<br>ATAS NAMA <br>SHIBA VET</div>
                                            <div class="GOPAY box1"><img class="sizegopay" src="../assets/img/gopay.png"
                                                    alt="IMG">
                                                <hr>081807840786<br>ATAS NAMA <br>SHIBA VET</div>
                                            <div class="MANDIRI box1"><img class="sizemandiri"
                                                    src="../assets/img/mandiri.png" alt="IMG">
                                                <hr>14119284<br>ATAS NAMA <br>SHIBA VET</div>
                                            <div class="BCA box1"><img class="sizebca" src="../assets/img/bca.png"
                                                    alt="IMG">
                                                <hr>14119284<br>ATAS NAMA <br>SHIBA VET</div>

                                            <div class="col-md-1 form-group text-align-center">
                                            </div>

                                           
                                        </div>
                                        <br>
                                        <br>
                                        <?php
	                                include '../../Back/conn.php';
	                                $telp_bdokter = $_GET['telp_bdokter'];
	                                $data = mysqli_query($conn,"SELECT * FROM tb_bookingdokter WHERE telp_bdokter = '$telp_bdokter'");
	                                while($d = mysqli_fetch_array($data)){
		                            ?>
                                        <div class="row">
                                            <div class="col-md-7 form-group text-align-center">
                                            </div>

                                            <div class="col-md-2 form-group text-align-center">
                                                <a href="../../Back/exc-canceldokter.php?telp_bdokter=<?=$telp_bdokter?>"
                                                    class="appointment-btn2"><span class="d-none d-md-inline">Cancel</a>
                                            </div>

                                            <div class="col-md-2 form-group text-align-center">
                                                <button type="submit" name="submit" class="appointment-btn"><span
                                                        class="d-none d-md-inline">Submit</button>
                                            </div>

                                            <div class="col-md-1 form-group text-align-center">
                                            </div>
                                        </div>


                                    </form>
                                    <?php } ?>
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


</body>
<script>
    $(document).ready(function () {
        $("select").change(function () {
            $(this).find("option:selected").each(function () {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".box1").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".box1").hide();
                }
            });
        }).change();
    });
</script>

</html>