<?php
session_start();
if(empty($_SESSION['n5_status'])){
    die("<h1>Data Kosong</h1>");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="padding-left: 10px;padding-right: 10px;">
	<p align="right"><b>Model: N-5</b></p>
	<center><b><u>SURAT IZIN ORANGTUA</u></b></center>
	<p>Yang bertanda tangan dibawah ini :</p>
	<b>I. </b>
		<table cellspacing="-1" style="margin-left: 10px;">
				<tr>
					<td>1.</td>
					<td>Nama Lengkap dan Alias</td>
					<td>: <?php echo $_SESSION["n5_ayahnamalengkap"];?></td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Tempat dan Tanggal Lahir</td>
                    <td>: <?php echo  $_SESSION["n5_ayahttl"];?></td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Warga Negara</td>
                    <td>: <?php echo $_SESSION["n5_ayahwarganegara"];?></td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Agama</td>
                    <td>: <?php echo $_SESSION["n5_ayahagama"];?></td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Pekerjaan</td>
                    <td>: <?php echo $_SESSION["n5_ayahpekerjaan"];?></td>
				</tr>
				<tr>
					<td>6.</td>
					<td>Tempat Tinggal</td>
                    <td>: <?php echo $_SESSION["n5_ayahtl"];?></td>
				</tr>
			</table><br>
			<b>II. </b>
			<table cellspacing="-1" style="margin-left: 10px;">
				<tr>
					<td>1.</td>
					<td>Nama Lengkap dan Alias</td>
                    <td>: <?php echo $_SESSION["n5_ibunamalengkap"];?></td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Tempat dan Tanggal Lahir</td>
                    <td>: <?php echo $_SESSION["n5_ibuttl"];?></td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Warga Negara</td>
                    <td>: <?php echo $_SESSION["n5_ibuwarganegara"];?></td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Agama</td>
                    <td>: <?php echo $_SESSION["n5_ibuagama"];?></td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Pekerjaan</td>
                    <td>: <?php echo $_SESSION["n5_ibupekerjaan"];?></td>
				</tr>
				<tr>
					<td>6.</td>
					<td>Tempat Tinggal</td>
                    <td>: <?php echo $_SESSION["n5_ibutl"];?></td>
				</tr>
			</table>
			<p>Adalah ayah kandung dan ibu kandung dari :</p>
			<table cellspacing="-1" style="margin-left: 10px;">
				<tr>
					<td>1.</td>
					<td>Nama Lengkap dan Alias</td>
                    <td>: <?php echo $_SESSION["n5_darinamalengkap"];?></td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Tempat dan Tanggal Lahir</td>
                    <td>: <?php echo $_SESSION["n5_darittl"];?></td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Warga Negara</td>
                    <td>: <?php echo $_SESSION["n5_dariwarganegara"];?></td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Agama</td>
                    <td>: <?php echo $_SESSION["n5_dariagama"];?></td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Pekerjaan</td>
                    <td>: <?php echo $_SESSION["n5_daripekerjaan"];?></td>
				</tr>
				<tr>
					<td>6.</td>
					<td>Tempat Tinggal</td>
                    <td>: <?php echo $_SESSION["n5_daritl"];?></td>
				</tr>
			</table>
			<p>Memberikan izin kepadanya untuk melakukan pernikahan dengan :</p>
			<table cellspacing="-1" style="margin-left: 10px;">
				<tr>
					<td>1.</td>
					<td>Nama Lengkap dan Alias</td>
                    <td>: <?php echo $_SESSION["n5_dengannamalengkap"];?></td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Tempat dan Tanggal Lahir</td>
                    <td>: <?php echo $_SESSION["n5_denganttl"];?></td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Warga Negara</td>
                    <td>: <?php echo $_SESSION["n5_denganwarganegara"];?></td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Agama</td>
                    <td>: <?php echo $_SESSION["n5_denganagama"];?></td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Pekerjaan</td>
                    <td>: <?php echo $_SESSION["n5_denganpekerjaan"];?></td>
				</tr>
				<tr>
					<td>6.</td>
					<td>Tempat Tinggal</td>
                    <td>: <?php echo $_SESSION["n5_dengantl"];?></td>
				</tr>
			</table>
			<p>Demikianlah surat izin ini dibuat dengan kesadaran tanpa ada paksaan dari siapapun juga dan untuk dipergunakan seperlunya</p>

    <p align="center">............................................, 20 ....</p>

    <table style="text-align: center;width: 100%">
        <tr>
            <td>
                I. Ayah <br/><br/><br/>
                <p>.....................................</p>
            </td>
            <td>
                II. Ibu<br/><br/><br/>
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
