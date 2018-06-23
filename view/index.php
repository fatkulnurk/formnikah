<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="../bulma.css">
    <!--
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    -->
    <style>
        body{
            font-size: 18px !important;
        }

        .awalan{
            background: linear-gradient(-70deg, rgba(255, 43, 127, 0.1) 30%, rgba(250, 0, 147, 0.1) 0%), url('../landing.png') left;
            background-position: top;
            background-size: cover;
            padding-bottom: 3px;
            padding-right: 3px;
        }

    </style>
</head>
<body>
<section class="section is-fullwidth awalan">
    <div class="columns">
        <div class="column is-4">
                
        </div>
        <div class="column is-4">
            <p class="has-text-centered">
                    <div class="content has-text-centered">
                            <img src="../logo.png" width="128px">
                            <h1 class="title">
                                Kementrian Agama
                            </h1>
                            <p class="subtitle">
                                Proses <strong>Pengisian Form</strong>.
                            </p>
                            <br/>
                            <p>
                                <table class="table is-bordered">
                                    <thead>
                                        <td class="has-text-centered has-text-weight-bold">Form</td>
                                        <td class="has-text-centered has-text-weight-bold">Status</td>
                                        <td class="has-text-centered has-text-weight-bold">Action</a></td>
                                    </thead>
                                    <tr>
                                        <td>N1</td>
                                        <td>
                                            <?php
                                            if(isset($_SESSION['n1_status'])){
                                                echo "Sudah di Isi";
                                            }else{
                                                echo "Belum di Isi";
                                            }
                                            ?>
                                        </td>
                                        <td class="has-text-centered"><a href="form/n1.php" class="button is-grey is-rounded is-inverted">Submit</a></td>
                                    </tr>
                                    <tr>
                                        <td>N2</td>
                                        <td>
                                            <?php
                                            if(isset($_SESSION['n2_status'])){
                                                echo "Sudah di Isi";
                                            }else{
                                                echo "Belum di Isi";
                                            }
                                            ?>
                                        </td>
                                        <td class="has-text-centered"><a href="form/n2.php" class="button is-grey is-rounded is-inverted">Submit</a></td>
                                    </tr>
                                    <tr>
                                        <td>N3</td>
                                        <td>
                                            <?php
                                            if(isset($_SESSION['n3_status'])){
                                                echo "Sudah di Isi";
                                            }else{
                                                echo "Belum di Isi";
                                            }
                                            ?>
                                        </td>
                                        <td class="has-text-centered"><a href="form/n3.php" class="button is-grey is-rounded is-inverted">Submit</a></td>
                                    </tr>
                                    <tr>
                                        <td>N4</td>
                                        <td>
                                            <?php
                                            if(isset($_SESSION['n4_status'])){
                                                echo "Sudah di Isi";
                                            }else{
                                                echo "Belum di Isi";
                                            }
                                            ?>
                                        </td>
                                        <td class="has-text-centered"><a href="form/n4.php" class="button is-grey is-rounded is-inverted">Submit</a></td>
                                    </tr>
                                    <tr>
                                        <td>N5</td>
                                        <td>
                                            <?php
                                            if(isset($_SESSION['n5_status'])){
                                                echo "Sudah di Isi";
                                            }else{
                                                echo "Belum di Isi";
                                            }
                                            ?>
                                        </td>
                                        <td class="has-text-centered"><a href="form/n5.php" class="button is-grey is-rounded is-inverted">Submit</a></td>
                                    </tr>
                                    <tr>
                                        <td>N6</td>
                                        <td>
                                            <?php
                                            if(isset($_SESSION['n6_status'])){
                                                echo "Sudah di Isi";
                                            }else{
                                                echo "Belum di Isi";
                                            }
                                            ?>
                                        </td>
                                        <td class="has-text-centered"><a href="form/n6.php" class="button is-grey is-rounded is-inverted">Submit</a></td>
                                    </tr>
                                    <tr>
                                        <td>N7</td>
                                        <td>
                                            <?php
                                            if(isset($_SESSION['n7_status'])){
                                                echo "Sudah di Isi";
                                            }else{
                                                echo "Belum di Isi";
                                            }
                                            ?>
                                            </td>
                                        <td class="has-text-centered"><a href="form/n7.php" class="button is-grey is-rounded is-inverted">Submit</a></td>
                                    </tr>
                                </table>
                            </p>
                            <br>
                                    <p class="has-text-weight-bold">Cetak atau Hapus data?</p>
                                    <p>
                                        <a href="./landing.html" class="button is-danger is-medium is-inverted is-rounded">Cetak Dokumen</a>
                                        <a href="hasil/destroy.php" class="button is-info is-medium is-inverted is-rounded">Hapus Data</a>
                                    </p>
                                </div>
                        </div>
            </p>
        </div>
        <div class="column is-4">
                
        </div>
    </div>
</section>
<footer class="footer has-text-centered">
    <p>Copyright &copy; 2018 Fatkul Nur Koirudin</p>
    <p>Program ini dibawah lisensi MIT (desain) & Creative Commons 3.0 (kode program).</p>
</footer>
</body>
</html>