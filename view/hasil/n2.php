<?php
session_start();
if(empty($_SESSION['n2_status'])){
    die("<h1>Data Kosong</h1>");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body style="padding-left: 10px;padding-right: 10px;">
<p align="right"><b> Model : N-2 </b> </p>
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
<center><b><u>SURAT KETERANGAN ASAL USUL</u></b><br>
    Nomor : .............................................
</center>
<p>Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa :</p>
<b>I. </b>
<table cellspacing="-1" style="margin-left: 10px;">
    <tr>
        <td>1.</td>
        <td>Nama Lengkap dan Alias</td>
        <td>: <?php echo $_SESSION["n2_namalengkap"];?></td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Tempat dan Tanggal Lahir</td>
        <td>: <?php echo $_SESSION["n2_tempattanggallahir"];?></td>
    </tr>
    <tr>
        <td>3.</td>
        <td>Warga Negara</td>
        <td>: <?php echo $_SESSION["n2_warganegara"];?></td>
    </tr>
    <tr>
        <td>4.</td>
        <td>Agama</td>
        <td>: <?php echo $_SESSION["n2_agama"];?></td>
    </tr>
    <tr>
        <td>5.</td>
        <td>Pekerjaan</td>
        <td>: <?php echo $_SESSION["n2_pekerjaan"];?></td>
    </tr>
    <tr>
        <td>6.</td>
        <td>Tempat Tinggal</td>
        <td>: <?php echo $_SESSION["n2_tempattinggal"];?></td>
    </tr>
</table>
<p>adalah benar ayah kandung dan ibu kandung dari seorang :</p>
<b>II. </b>
<table cellspacing="-1" style="margin-left: 10px;">
    <tr>
        <td>1.</td>
        <td>Nama Lengkap dan Alias</td>
        <td>: <?php echo $_SESSION["n2_seorangnamalengkap"];?></td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Tempat dan Tanggal Lahir</td>
        <td>: <?php echo $_SESSION["n2_seorangtempattanggallahir"];?></td>
    </tr>
    <tr>
        <td>3.</td>
        <td>Warga Negara</td>
        <td>: <?php echo $_SESSION["n2_seorangwarganegara"];?></td>
    </tr>
    <tr>
        <td>4.</td>
        <td>Agama</td>
        <td>: <?php echo $_SESSION["n2_seorangagama"];?></td>
    </tr>
    <tr>
        <td>5.</td>
        <td>Pekerjaan</td>
        <td>: <?php echo $_SESSION["n2_seorangpekerjaan"];?></td>
    </tr>
    <tr>
        <td>6.</td>
        <td>Tempat Tinggal</td>
        <td>: <?php echo $_SESSION["n2_seorangtempattinggal"];?></td>
    </tr>
</table>

<p>dengan seorang wanita : </p>

<table cellspacing="-1" style="margin-left: 10px;">
    <tr>
        <td>1.</td>
        <td>Nama Lengkap dan Alias</td>
        <td>: <?php echo $_SESSION["n2_wanitanamalengkap"];?></td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Tempat dan Tanggal Lahir</td>
        <td>: <?php echo $_SESSION["n2_wanitatempattanggallahir"];?></td>
    </tr>
    <tr>
        <td>3.</td>
        <td>Warga Negara</td>
        <td>: <?php echo $_SESSION["n2_wanitawarganegara"];?></td>
    </tr>
    <tr>
        <td>4.</td>
        <td>Agama</td>
        <td>: <?php echo $_SESSION["n2_wanitagama"];?></td>
    </tr>
    <tr>
        <td>5.</td>
        <td>Pekerjaan</td>
        <td>: <?php echo $_SESSION["n2_wanitapekerjaan"];?></td>
    </tr>
    <tr>
        <td>6.</td>
        <td>Tempat Tinggal</td>
        <td>: <?php echo $_SESSION["n2_wanitatempattinggal"];?></td>
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