<?php
session_start();
if(empty($_SESSION['n3_status'])){
    die("<h1>Data Kosong</h1>");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="padding-left: 20px;padding-right: 20px">
	<p align="right">Lampiran PMA No. 11 Tahun 2007 <br> - Pasal 5 ayat(2) huruf c - <br><b>Model: N-3</b></p>
	<center><u><b> SURAT PERSETUJUAN MEMPELAI </b></u> </center>
	<p>Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa :</p>
		<b>I. Calon Suami</b>
		<br>
			<table cellspacing="-1" style="margin-left: 10px;">
				<tr>
					<td>1.</td>
					<td>Nama Lengkap dan Alias</td>
					<td>: <?php echo $_SESSION["n3_csnamalengkap"];?></td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Bin</td>
					<td>: <?php echo $_SESSION["n3_csbin"];?></td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Tempat dan Tanggal Lahir</td>
					<td>: <?php echo $_SESSION["n3_csttl"];?></td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Warga Negara</td>
					<td>: <?php echo $_SESSION["n3_cswarganegara"];?></td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Agama</td>
					<td>: <?php echo $_SESSION["n3_csagama"];?></td>
				</tr>
				<tr>
					<td>6.</td>
					<td>Pekerjaan</td>
					<td>: <?php echo $_SESSION["n3_cspekerjaan"];?></td>
				</tr>
				<tr>
					<td>7.</td>
					<td>Tempat Tinggal</td>
					<td>: <?php echo $_SESSION["n3_cstempattinggal"];?></td>
				</tr>
			</table>
		<b>II. Calon Istri</b>
		<br>
			<table cellspacing="-1" style="margin-left: 10px;">
				<tr>
					<td>1.</td>
					<td>Nama Lengkap dan Alias</td>
					<td>: <?php echo $_SESSION["n3_cinamalengkap"];?></td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Bin</td>
					<td>: <?php echo $_SESSION["n3_cibinti"];?></td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Tempat dan Tanggal Lahir</td>
					<td>: <?php echo $_SESSION["n3_cittl"];?></td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Warga Negara</td>
					<td>: <?php echo $_SESSION["n3_ciwarganegara"];?></td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Agama</td>
					<td>: <?php echo $_SESSION["n3_ciagama"];?></td>
				</tr>
				<tr>
					<td>6.</td>
					<td>Pekerjaan</td>
					<td>: <?php echo $_SESSION["n3_cipekerjaan"];?></td>
				</tr>
				<tr>
					<td>7.</td>
					<td>Tempat Tinggal</td>
					<td>: <?php echo $_SESSION["n3_citempattinggal"];?></td>
				</tr>
			</table>
		<br>
		Menyatakan dengan sesungguhnya bahwa atas dasar suka rela, dengan kesadaran 
		sendiri, tanpa paksaan dari siapapun juga, setuju untuk melangsungkan 
		pernikahan.
		<br>
		<br>
		Demikian surat persetujuan ini dibuat untuk digunakan seperlunya.<br>
		<p align="right" style="margin-right: 80px;">..................................., 20 ....</p>

    <table style="text-align: center;width: 100%">
        <tr>
            <td>
                I. Calon Suami <br/><br/><br/>
                <p>.....................................</p>
            </td>
            <td>
                II. Calon Istri<br/><br/><br/>
                <p>.....................................</p>
            </td>
        </tr>
    </table>







    <hr>
    <p align="center"><button onclick="cetak()">Cetak!</button></p>
    <script>
        function cetak() {
            window.print();
        }
    </script>
		
		
	
</body>
</html>