<?php
// include databse connection file
include '../dbconnect.php';
// Check if form submitted insert form data into users table
if (isset($_POST['submit'])) {
	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$merek = $_POST['merek'];
	$jumlah = $_POST['jumlah'];
	$kondisi = $_POST['kondisi'];
	$fakultas = $_POST['fakultas'];
	$lokasi = $_POST['lokasi'];
	$pemakai = $_POST['pemakai'];
	// Insert user data into table
	$result = mysqli_query($conn, "INSERT INTO barang(kode,nama,merek,jumlah,kondisi,fakultas,lokasi,pemakai) VALUES('$kode','$nama','$merek','$jumlah','$kondisi','$fakultas','$lokasi','$pemakai')");
	// // show message when user added
	// echo "User added successfully";
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="..\style\add.css">
	<title>Inventaris BMN UIN Sunan Kalijaga</title>
</head>
<body>
	<!-- Header -->
	<div class="app_header-top"></div>
	<div class="app_header-top2"></div>
	<div class="app_main">
		<div class="app_header">
			<div class="center">
				<div class="app_uin_id">
					<img src="..\assets\images\uin.png">
				</div>
				<div class="app_header_right">
					<div class="app_system_id">Barang Milik Negara</div>
					<div class="app_univ_id">UIN Sunan Kalijaga</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>

	<!-- Body -->
	<div class="center">
		<a href="index.php">Go to Home</a>
		<br/><br/>
		<form action="add.php" method="post" name="input_barang">
			<table width="100%" border="0">
				<tr>
					<td>Kode Barang</td>
					<td><input type="tel" id="kode" name="kode" pattern="[0-9]{1}.[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{3}" required>
					<small>Format: X.XX.XX.XXX</small>
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Merek</td>
					<td><input type="text" name="merek"></td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td><input type="text" name="jumlah"></td>
				</tr>
				<tr>
					<td>Kondisi</td>
					<td><input type="text" name="kondisi"></td>
				</tr>
				<tr>
					<td>Fakultas</td>
					<td><input type="text" name="fakultas"></td>
				</tr>
				<tr>
					<td>Lokasi</td>
					<td><input type="text" name="lokasi"></td>
				</tr>
				<tr>
					<td>Pemakai</td>
					<td><input type="text" name="pemakai"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Add"></td>
				</tr>
			</table>
		</form>
	</div>

	<!-- Footer -->
	<div class="copyright" style="background-color: #f6f6f6; border-top: 1px solid #dddddd;"> 
		© 2022 - Pusat Teknologi Informasi dan Pangkalan Data, UIN Sunan Kalijaga, Yogyakarta
	</div>
</body>