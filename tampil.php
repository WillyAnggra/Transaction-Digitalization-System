<?php

$conn = mysqli_connect('localhost', 'root','', 'dbpelanggan');
$result = mysqli_query($conn,"SELECT * FROM tbpelanggannn");

if(isset($_POST["cari"])){
	$cari = $_POST["keyword"];
	$q = "SELECT * FROM tbpelanggannn WHERE
	
	nama LIKE '%$cari%' or
	alamat LIKE '%$cari%'
	";

	$result = mysqli_query($conn, $q);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style-tampil-new.css">
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
					<li><a href="tampil.php">Data Pelanggan</a></li>
					<li><a href="index.php">Logout</a></li>
				</ul>
			</nav>
		</div>
</header>
<main>
	<article class="data container">
	<h1>Data Pelanggan</h1>
	<div class="plusss">
		<a href="tambah.php" id="tambah"><img src="assets/plus.png" alt="" id="plus"> Tambah Data Pelanggan</a>
	</div>
	<form action="" method="post">
		<input type="text" id="search" name="keyword" size="30" placeholder="Ketikkan disini" autofocus="">
		<button type="submit" id="search" name="cari">cari</button>
	</form>

<div class="tbl-mid">
	<table border="1" cellpadding="10"	cellspacing="0">
		<tr>
			<th id="right-top">No</th>
			<th>Layanan</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th>Berat</th>
			<th>Paket</th>
			<th id="left-top">Aksi</th>	
		</tr>
	
	<?php $i=1; while($row = mysqli_fetch_assoc($result)): ?>	<!-- Mengurutkan -->

	<tr>
		<td id="right-bottom"><?php echo $i ; ?></td>
		<td><?php echo $row["layanan"]; ?></td>
		<td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["alamat"]; ?></td>
		<td><?php echo $row["noTelepon"]; ?></td>
		<td><?php echo $row["berat"]; ?></td>
		<td><?php echo $row["paket"]; ?></td>
		<td id="left-bottom"><a href="update.php?noAntrean=<?php echo $row["noAntrean"];?>">Edit</a> | <a href="hapus.php?noAntrean=<?php echo $row["noAntrean"];?>">Hapus</a></td>
	</tr>

	<?php $i++; endwhile; ?>

	</table>
	</div>	
	</article>
</main>
</body>
</html>