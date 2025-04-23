<?php

require 'koneksi.php';

$conn = mysqli_connect('localhost', 'root','', 'dbpelanggan');
$noAntrean = $_GET["noAntrean"];
$result = mysqli_query($conn, "SELECT * FROM tbpelanggannn WHERE noAntrean='$noAntrean'");

if(isset($_POST["edit"])){
	$layanan = $_POST["layanan"];
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$telepon = $_POST["telepon"];
	$berat = $_POST["berat"];
	$paket = $_POST["paket"];


	$q = "UPDATE tbpelanggannn SET
	layanan = '$layanan',
 	nama = '$nama',
 	alamat ='$alamat',
	noTelepon = '$telepon',
	berat = '$berat',
	paket = '$paket'

 	WHERE noAntrean='$noAntrean'";
	mysqli_query($conn,$q);


	if(mysqli_affected_rows($conn)>0){
		echo "<script>

		alert('Data Telah Berhasil Diubah');
		documen.location.href='menu.php';
		</script>";
	} else {
		echo "<script>

		alert('Data Tidak Ada Yang Diubah');
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
	<link rel="stylesheet" href="style-update.css">
	<title></title>
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
					<li><a href="menu.php">Home</a></li>  <!--?halaman=home"-->
					<li><a href="tambah.php">Form Simpan Data</a></li>
					<li><a href="?halaman=data_mahasiswa">Data Pelanggan</a></li>
					<li><a href="index.php">Logout</a></li>
				</ul>
			</nav>
		</div>
	</header>



<?php while($row = mysqli_fetch_assoc($result)): ?>

<form action="" method="post">
<h1>Edit Data Mahasiswa</h1>
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
			<td><input type="text" name="nama" value="<?php echo $row["nama"]; ?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td> : </td>
			<td><textarea name="alamat" cols="36" rows="6" ><?php echo $row["alamat"]; ?></textarea></td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td> : </td>
			<td><input type="text" name="telepon" value="<?php echo $row["noTelepon"]; ?>"></td>
		</tr>
		<tr>
			<td>Berat</td>
			<td> : </td>
			<td><input type="text" name="berat" value="<?php echo $row["berat"]; ?>"></td>
		</tr>
		<tr>
			<td>Paket</td>
			<td> : </td>
			<td><input type="text" name="paket" value="<?php echo $row["paket"]; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button type="submit" name="edit">Edit!</button></td>
		</tr>

	</table>

	<?php endwhile; ?>

</form>

</body>
</html> 