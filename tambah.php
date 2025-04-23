<?php

$conn = mysqli_connect('localhost', 'root','', 'dbpelanggan');

if(isset($_POST["Simpan"])){
	$layanan=$_POST["layanan"];
	$nama=$_POST["nama"];
	$alamat=$_POST["alamat"];
	$telepon=$_POST["telepon"];
	$berat=$_POST["berat"];
	$paket=$_POST["paket"];


	$q="INSERT INTO tbpelanggannn VALUES('', '$layanan', '$nama', '$alamat', '$telepon', '$berat', '$paket')";
	mysqli_query($conn, $q);

	if(mysqli_affected_rows($conn)>0){
		echo "<script>

			alert('Data Berhasil Disimpan');
			documen.location.href='tampil.php';
			</script>";
		}
		else {
			echo "<script>

			alert('Data Gagal Disimpan');
			documen.location.href='tampil.php';
			</script>";
		}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style-tambah.css">
	<title>Tambah Data</title>
</head>
<body>
<header>
		<div class="container">
			<nav>
				<div class="logo">
					<img src="assets/Fast_Laundry-removebg-preview 1.png" alt="">
					<h1>Pisang Laundry</h1>
				</div>
				<ul>
					<li><a href="menu-admin.php">Home</a></li>  <!--?halaman=home"-->
					<li><a href="tambah.php">Form Simpan Data</a></li>
					<li><a href="tampil.php">Data Pelanggan</a></li>
					<li><a href="index.php">Logout</a></li>
				</ul>
			</nav>
		</div>
</header>

<div class="mid">

<form action="" method="post">
<h1>Input Data Pelanggan</h1>
	<table>
		<tr>
			<td>Layanan</td>
			<td> : </td>
			<td><select name="layanan" id="">
				<option value="Kiloan">Kiloan</option>
				<option value="Express">Express</option>
				<option value="Setrika">Setrika</option>
			</select></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td> : </td>
			<td><input type="text" name="nama" "></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td> : </td>
			<td><textarea name="alamat" cols="36" rows="6" ></textarea></td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td> : </td>
			<td><input type="text" name="telepon" "></td>
		</tr>
		<tr>
			<td>Berat</td>
			<td> : </td>
			<td><input type="text" name="berat" value=" Kg""></td>
		</tr>
		<tr>
			<td>Paket</td>
			<td> : </td>
			<td><select name="paket" id="">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				</select></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button type="submit" name="Simpan"><b>Simpan</b></button></td>
		</tr>
	</table>
</form>
</div>

</body>
</html>