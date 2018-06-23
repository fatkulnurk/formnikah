<?php
session_start();
if(empty($_SESSION['n7_status'])){
    die("<h1>Data Kosong</h1>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulir N7</title>
    <style>
        body{
            padding: 10px;
            max-width: 100%;
            align-content: center;
        }
        table{
            width: 100%;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td align="right" colspan="2">
            Lampiran PMA : No 11 Tahun 2007<br/>
            - Pasal 5 ayat (1) -
            <p>
                <strong>Model : N-7</strong>
            </p>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <table>
                <tr valign="top">
                    <td>Lampiran</td>
                    <td>:</td>
                    <td>......lembar</td>
                </tr>
                <tr valign="top">
                    <td>Perihal</td>
                    <td>:</td>
                    <td>Pemberitahuan<br/>Kehendak Nikah</td>
                </tr>
            </table>
        </td>
        <td width="250px" style="float: right">
            <div style="text-align:right">.............................. 20.....</div>
            <p>
                Kepada Yth.<br/>
                Pegawai Pencatat nikah pada<br/>
                KUA Kecamatan/Pembantu PPN</br>
                di .........................
            </p>
        </td>
    </tr>
</table>
<p>Assalamu'alaikum wr.wb.</p>
<p>
    Dengan ini kami memberitahukan bahwa kami bermaksud akan melangsungkan
    pernikahan antara <i><?php echo $_SESSION["n7_caloncowok"];?></i> dengan <i><?php echo $_SESSION["n7_caloncewek"];?></i>
    pada hari <i><?php echo $_SESSION["n7_hari"];?></i> tanggal <?php echo $_SESSION["n7_tgl"];?> jam <?php echo $_SESSION["n7_jam"];?>  dengan mas kawin
    <?php echo $_SESSION["n7_maskawin"];?> dibayar <?php echo $_SESSION["n7_dibayar"];?> *)
    bertempat di <?php echo $_SESSION["n7_bertempat"];?>
</p>
<p>
    Bersama ini kami lampirkan surat surat yang diperlukan untuk diperiksa, sebagai berikut :
</p>
<ol>
    <li>Surat Keterangan Untuk Nikah</li>
    <li>Surat Keterangan Asal-Usul</li>
    <li>Surat Persetujuann Mempelai</li>
    <li>Surat Keterangan Tentang orang tua</li>
    <li>*) Surat Izin Orang Tua</li>
    <li>*) Surat Keterangan Kematian Suami/Istri</li>
    <li>....................................................</li>
    <li>....................................................</li>
    <li>....................................................</li>
    <li>....................................................</li>
</ol>
<p>Hanya dapat dihadiri dan dicatat pelaksanaannya sesuai dengan ketentuan perundng undangan yang berlaku.</p>

<table>
    <tr>
        <td valign="top">
            Diterima tanggal ..............
            <p>
                Yang Menerima<br>
                PPN/Pebantu PPN*)
                <br>
                <br>
                <br>
                <br>
                <br>
                ........................................................ **)
            </p>
        </td>
        <td valign="top" align="center" style="float: right;">
            Wassalam<br>
            Yang memberitahukan,<br>
            Calon mempelai/wali/wakil wali *)
            <br>
            <br>
            <br>
            <br>
            <br>
            ........................................................ **)
        </td>
    </tr>
</table>
<br>
*) coret yang tidak perlu<br>
**) nama lengkap
<hr>
<p align="center"><button onclick="cetak()">Cetak!</button></p>
<script>
    function cetak() {
        window.print();
    }
</script>
</body>
</html>