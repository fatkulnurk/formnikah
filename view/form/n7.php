<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulir N7</title>

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    <link href="css/skins/square/grey.css" rel="stylesheet">

    <!-- COLOR CSS -->
    <link href="css/color_2.css" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/modernizr.js"></script>
    <!-- Modernizr -->

</head>

<body>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- /Preload -->

    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div>
    <!-- /loader_form -->

    <main>
        <div id="form_container">
            <div class="row">
                <div class="col-lg-5">
                    <div id="left_form">
                        <figure>
                            <img src="img/registration_bg.svg" alt="">
                        </figure>
                        <h2>Formulir N7</h2>
                        <p>Lampiran PMA.</p>                            
                        <p>* ) Coret yang tidak perlu</p>

                        <a href="#0" id="more_info" data-toggle="modal" data-target="#more-info">
                            <i class="pe-7s-info"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">

                    <div id="wizard_container">
                        <div id="top-wizard">
                            <div id="progressbar"></div>
                        </div>
                        <!-- /top-wizard -->
                        <form name="example-1" id="wrapped" method="GET" action="registration_send.php">
                            <input id="website" name="website" type="text" value="">
                            <input name="form" type="hidden" value="n7">
                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">

                                <!-- LANGKAH PERTAMA -->
                                <div class="step">
                                    <h3 class="main_question">
                                        <strong>1/3</strong>Info Pernikaan</h3>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="caloncowok" class="form-control" placeholder="Nama Calon Laki Laki">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="caloncewek" class="form-control" placeholder="Nama Calon Perempuan">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="tgl" class="form-control" placeholder="Tanggal (DD/MONTH/YYYY)">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="hari" class="form-control" placeholder="Hari (tulis huruf Besar semua)">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="jam" class="form-control" placeholder="Jam (Basis 24 & zona waktu Wib)">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step-->

                                <!-- LANGKAH KEDUA -->
                                <div class="step">
                                    <h3 class="main_question">
                                        <strong>2/3</strong>Mas Kawin</h3>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="maskawin" class="form-control" placeholder="Barang yang dijadikan mas kawin">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /row -->
                                        
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
                                            <label>Mas Kawin dibayar</label>
                                            </div>
										</div>
										<div class="col-md-8">
											<div class="form-group radio_input">
												<label>
													<input type="radio" value="Tunai" checked name="dibayar" class="icheck">Tunai</label>
												<label>
													<input type="radio" value="Hutang" name="dibayar" class="icheck">Hutang</label>
											</div>
										</div>
									</div>
									<!-- /row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="bertempat" class="form-control" placeholder="Tempat Menikah">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step-->

                                <!-- LANGKAH KETIGA -->
                                <div class="submit step">
                                    <h3 class="main_question">
                                        <strong>3/3</strong>Surat Surat Yang di Lampirkan</h3>
                                        
									<div class="row">
										<div class="col-md-6">
											<div class="form-group terms">
												<label>1. Surat Keterangan Untuk Nikah</label> <br>
												<label>2. Surat Keterangan Asal Usul</label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group terms">
												<label>3. Surat Persetujuan Mempelai</label> <br>
												<label>4. Surat Keterangan Tentang Orang Tua</label>
											</div>
										</div>
									</div>  

									<div class="row">
										<div class="col-md-6">
											<div class="form-group radio_input">
												<label><input type="checkbox" value="no5" name="no5" class="icheck required">*) Surat Izin Orang tua</label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group radio_input">
												<label><input type="checkbox" value="no6" name="no6" class="icheck required">*) Surat Keterangan Kematian suami/istri</label>
											</div>
										</div>
									</div>
									<!-- /row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="no7" class="form-control" placeholder="Surat Lainnya, jika lebih dari 1 pisah dengan simbol , (Optional)">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step-->
                            </div>
                            <!-- /middle-wizard -->
                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward">Kembali </button>
                                <button type="button" name="forward" class="forward">Selanjutnya</button>
                                <button type="submit" name="process" class="submit">Submit</button>
                            </div>
                            <!-- /bottom-wizard -->
                        </form>
                    </div>
                    <!-- /Wizard container -->
                </div>
            </div>
            <!-- /Row -->
        </div>
        <!-- /Form_container -->
    </main>

    <footer id="home" class="clearfix">
        <p>© 2018 Fatkul Nur Koirudin</p>
        <ul>
            <li>
                <a href="../index.html" class="animated_link">Home</a>
            </li>
            <li>
                <a href="#" class="animated_link">Terms and conditions</a>
            </li>
            <li>
                <a href="#" class="animated_link">Contacts</a>
            </li>
        </ul>
    </footer>
    <!-- end footer-->

    <!-- SCRIPTS -->
    <!-- Jquery-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Common script -->
    <script src="js/common_scripts_min.js"></script>
    <!-- Wizard script -->
    <script src="js/registration_wizard_func.js"></script>
    <!-- Menu script -->
    <script src="js/velocity.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Theme script -->
    <script src="js/functions.js"></script>

</body>

</html>