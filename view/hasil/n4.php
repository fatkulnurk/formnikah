<?php
session_start();
if(empty($_SESSION['n4_status'])){
    die("<h1>Data Kosong</h1>");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="padding-left: 10px;padding-right: 10px;">
	<p align="right"><b> Model : N-4 </b> </p>
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
		<center><b><u>SURAT KETERANGAN TENTANG ORANG TUA</u></b><br>
			Nomor : .............................................
		</center>
		<p>Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa :</p>
		<b>I. </b>
		<table cellspacing="-1" style="margin-left: 10px;">
				<tr>
					<td>1.</td>
					<td>Nama Lengkap dan Alias</td>
					<td>: <?php echo $_SESSION["n4_ayahnamalengkap"];?></td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Tempat dan Tanggal Lahir</td>
                    <td>: <?php echo $_SESSION["n4_ayahttl"];?> </td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Warga Negara</td>
                    <td>: <?php echo $_SESSION["n4_ayahwarganegara"] ;?> </td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Agama</td>
                    <td>: <?php echo $_SESSION["n4_ayahagama"];?> </td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Pekerjaan</td>
                    <td>: <?php echo $_SESSION["n4_ayahpekerjaan"];?> </td>
				</tr>
				<tr>
					<td>6.</td>
					<td>Tempat Tinggal</td>
                    <td>: <?php echo $_SESSION["n4_ayahtempattinggal"];?> </td>
				</tr>
			</table>

			<br>
			<b>II. </b>
			<table cellspacing="-1" style="margin-left: 10px;">
				<tr>
					<td>1.</td>
					<td>Nama Lengkap dan Alias</td>
                    <td>: <?php echo $_SESSION["n4_ibunamalengkap"];?> </td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Tempat dan Tanggal Lahir</td>
                    <td>: <?php echo $_SESSION["n4_ibuttl"];?> </td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Warga Negara</td>
                    <td>: <?php echo $_SESSION["n4_ibuwarganegara"];?> </td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Agama</td>
                    <td>: <?php echo $_SESSION["n4_ibuagama"];?> </td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Pekerjaan</td>
                    <td>: <?php echo $_SESSION["n4_ibupekerjaan"];?> </td>
				</tr>
				<tr>
					<td>6.</td>
					<td>Tempat Tinggal</td>
                    <td>: <?php echo $_SESSION["n4_ibutempattinggal"];?> </td>
				</tr>
			</table>

			<p>Adalah benar ayah kandung dan ibu kandung dari seorang : </p>

			<table cellspacing="-1" style="margin-left: 10px;">
				<tr>
					<td>1.</td>
					<td>Nama Lengkap dan Alias</td>
                    <td>: <?php echo $_SESSION["n4_senamalengkap"];?> </td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Tempat dan Tanggal Lahir</td>
                    <td>: <?php echo $_SESSION["n4_settl"];?> </td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Warga Negara</td>
                    <td>: <?php echo $_SESSION["n4_sewarganegara"];?> </td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Jenis Kelamin</td>
                    <td>: <?php echo $_SESSION["n4_sejeniskelamin"];?> </td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Agama</td>
                    <td>: <?php echo $_SESSION["n4_seagama"];?> </td>
				</tr>
				<tr>
					<td>6.</td>
					<td>Pekerjaan</td>
                    <td>: <?php echo $_SESSION["n4_sepekerjaan"];?> </td>
				</tr>
				<tr>
					<td>7.</td>
					<td>Tempat Tinggal</td>
                    <td>: <?php echo $_SESSION["n4_setempattinggal"];?> </td>
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