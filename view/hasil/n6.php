<?php
session_start();
if(empty($_SESSION['n6_status'])){
    die("<h1>Data Kosong</h1>");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="padding-left: 10px;padding-right: 10px;">
	<p align="right">Lampiran PMA No. 11 Tahun 2007 <br>  -Pasal 5 ayat(2) huruf k - <br><b>Model N-6</b></p>
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
	<center><u><b> SURAT KETERANGAN KEMATIAN SUAMI / ISTRI </b></u><br>Nomor : .......................................................</center>

	<p>Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa :</p>
	<b>I. </b>
	<table cellspacing="-1" style="margin-left: 10px;">
		<tr>
			<td>1.</td>
			<td>Nama Lengkap dan Alias</td>
            <td>: <?php echo $_SESSION["n6_meninggal_namalengkap"];?></td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Bin / Binti</td>
            <td>: <?php echo $_SESSION["n6_meninggal_bin"];?> </td>
		</tr>
		<tr>
			<td>3.</td>
			<td>Tempat dan Tanggal Lahir</td>
            <td>: <?php echo $_SESSION["n6_meninggal_ttl"];?> </td>
		</tr>
		<tr>
			<td>4.</td>
			<td>Warga Negara</td>
            <td>: <?php echo $_SESSION["n6_meninggal_warganegara"];?> </td>
		</tr>
		<tr>
			<td>5.</td>
			<td>Agama</td>
            <td>: <?php echo $_SESSION["n6_meninggal_agama"];?> </td>
		</tr>
		<tr>
			<td>6.</td>
			<td>Pekerjaan</td>
            <td>: <?php echo $_SESSION["n6_meninggal_pekerjaan"];?> </td>
		</tr>
		<tr>
			<td>7.</td>
			<td>Tempat Tinggal</td>
            <td>: <?php echo $_SESSION["n6_meninggal_ttt"];?> </td>
		</tr>
	</table>
	<table>
		<tr>
			<td>Telah Meninggal pada tanggal</td>
			<td>: <?php echo $_SESSION["n6_meninggal_date"];?></td>
		</tr>
		<tr>
			<td>di</td>
			<td>: <?php echo $_SESSION["n6_meninggal_tempat"];?></td>
		</tr>
	</table>
	<b>II. </b>
	<table cellspacing="-1" style="margin-left: 10px;">
		<tr>
			<td>1.</td>
			<td>Nama Lengkap dan Alias</td>
            <td>: <?php echo $_SESSION["n6_psg_namalengkap"];?> </td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Bin / Binti</td>
            <td>: <?php echo $_SESSION["n6_psg_binti"];?> </td>
		</tr>
		<tr>
			<td>3.</td>
			<td>Tempat dan Tanggal Lahir</td>
            <td>: <?php echo $_SESSION["n6_psg_ttl"];?> </td>
		</tr>
		<tr>
			<td>4.</td>
			<td>Warga Negara</td>
            <td>: <?php echo $_SESSION["n6_psg_warganegara"];?> </td>
		</tr>
		<tr>
			<td>5.</td>
			<td>Agama</td>
            <td>: <?php echo $_SESSION["n6_psg_agama"];?> </td>
		</tr>
		<tr>
			<td>6.</td>
			<td>Pekerjaan</td>
            <td>: <?php echo $_SESSION["n6_psg_pekerjaan"];?> </td>
		</tr>
		<tr>
			<td>7.</td>
			<td>Tempat Tinggal</td>
			<td>: <?php echo $_SESSION["n6_psg_tempattinggal"];?> </td>
		</tr>
	</table>
	<p>Adalah suami / Istri orang yang telah meninggal tersebut diatas</p>
	<p>Demikianlah, surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunkan seperlunya.</p>
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