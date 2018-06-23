<?php
session_start();
if(empty($_SESSION['n1_status'])){
    die("<h1>Data Kosong</h1>");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body style="padding-left: 10px;padding-right: 10px;">
<p align="right"><b> Model : N-1 </b> </p>
<table cellspacing="-1">
    <tr>
        <td>KANTOR DESA / KELURAHAN</td>
        <td> : .............................................</td>
    </tr>
    <tr>
        <td>KECAMATAN</td>
        <td> : .............................................</td>
    </tr>
    <tr>
        <td>KABUPATEN / KOTA</td>
        <td> : .............................................</td>
    </tr>
</table>
<center><b><u>SURAT KETERANGAN UNTUK NIKAH</u></b><br>
    Nomor : .............................................
</center>
<p>Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa :</p>
<table cellspacing="-1" style="margin-left: 10px;">
    <tr>
        <td>1.</td>
        <td>Nama Lengkap dan Alias</td>
        <td>: <?php echo $_SESSION["n1_namalengkap"];?></td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Jenis Kelamin</td>
        <td>: <?php echo $_SESSION["n1_jeniskelamin"];?> </td>
    </tr>
    <tr>
        <td>3.</td>
        <td>Tempat dan Tanggal Lahir</td>
        <td>: <?php echo $_SESSION["n1_tempattanggallahir"];?> </td>
    </tr>
    <tr>
        <td>4.</td>
        <td>Warga Negara</td>
        <td>: <?php echo $_SESSION["n1_warganegara"];?> </td>
    </tr>
    <tr>
        <td>5.</td>
        <td>Agama</td>
        <td>: <?php echo $_SESSION["n1_agama"];?> </td>
    </tr>
    <tr>
        <td>6.</td>
        <td>Pekerjaan</td>
        <td>: <?php echo $_SESSION["n1_pekerjaan"];?> </td>
    </tr>
    <tr>
        <td>7.</td>
        <td>Tempat Tinggal</td>
        <td>: <?php echo $_SESSION["n1_tempattinggal"];?> </td>
    </tr>
    <tr>
        <td>8.</td>
        <td>Bin/binti</td>
        <td>: <?php echo $_SESSION["n1_binti"];?> </td>
    </tr>
    <tr>
        <td>9.</td>
        <td>Status perkawinan</td>
        <td>: </td>
    </tr>
    <tr>
        <td colspan="3">
            <table style="padding-left: 16px">
                <tr>
                    <td valign="top">a.</td>
                    <td>Jika pria, terangkan jejaka,<br>duda atau beristri dan<br>
                        berapa istrinya</td>
                    <td valign="bottom">: <?php echo $_SESSION["n1_keteranganpria"];?> </td>
                </tr>
                <tr style="margin-left: 30px">
                    <td valign="top">b.</td>
                    <td>Jika wanita terangkan<br>
                        perawan atau janda</td>
                    <td valign="bottom">: <?php echo $_SESSION["n1_keteranganwanita"];?> </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>10.</td>
        <td>Nama Istri/Suami terdahulu</td>
        <td>: <?php echo $_SESSION["n1_namapasangandulu"];?></td>
    </tr>
</table>
<p>Demikian surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya</p>

<p align="right" style="margin-right: 80px;">................., ...................................
    <br> Kepala Desa / Kelurahan <br><br><br><br><br> ...........................................
</p>

*) nama lengkap


<hr>
<p align="center"><button onclick="cetak()">Cetak!</button></p>
<script>
    function cetak() {
        window.print();
    }
</script>
</body>
</html>