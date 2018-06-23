<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulir N3</title>

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
                        <h2>Formulir N3</h2>
                        <p>Surat Persetujuan Mempelai.</p>
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
                        <form name="example-1" id="wrapped" method="GET">
                            <input id="website" name="website" type="text" value="">
                            <input name="form" type="hidden" value="n3">

                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">

                                <div class="step">
                                    <h3 class="main_question">
                                        <strong>1/3</strong>Calon Suami</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="csnamalengkap" class="form-control required" placeholder="Nama Lengkap">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="csbin" class="form-control required" placeholder="Bin">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="csttl" class="form-control required" placeholder="Tempat Tanggal Lahir">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="cswarganegara" class="form-control" placeholder="Warga Negara Indonesia">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="styled-select">
                                                    <select class="required" name="csagama">
                                                        <option value="" selected>Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="cspekerjaan" class="form-control" placeholder="Pekerjaan">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="cstempattinggal" class="form-control required" placeholder="Tempat Tinggal">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step-->

                                <!-- LANGKAH KEDUA -->
                                <div class="step">
                                    <h3 class="main_question">
                                        <strong>2/3</strong>Calon Istri</h3>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="cinamalengkap" class="form-control required" placeholder="Nama Lengkap">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="cibinti" class="form-control required" placeholder="Binti">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="cittl" class="form-control required" placeholder="Tempat Tanggal Lahir">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="ciwarganegara" class="form-control" placeholder="Warga Negara">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="styled-select">
                                                    <select class="required" name="ciagama">
                                                        <option value="" selected>Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="cipekerjaan" class="form-control" placeholder="Pekerjaan">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="citempattinggal" class="form-control required" placeholder="Tempat Tinggal">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step-->

                                <div class="submit step">
                                    <h3 class="main_question">
                                        <strong>3/3</strong>Pernyataan</h3>
                                    <div class="row">
                                        
									<div class="form-group terms">
                                            <input name="terms" type="checkbox" class="icheck required" value="yes"> Baca Dengan Hati Hati, Klik Jika Setuju. 
                                            <label>Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran sendiri tanpa paksaan dari siapapun juga, setuju untuk melangsungkan pernikahan.</label>
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