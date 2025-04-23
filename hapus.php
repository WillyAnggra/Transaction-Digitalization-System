<?php 
require_once 'koneksi.php';

$conn = mysqli_connect('localhost', 'root','', 'dbpelanggan');
$antrean = $_GET["noAntrean"];

mysqli_query($conn, "DELETE FROM tbpelanggannn WHERE noAntrean='$antrean'");

if(mysqli_affected_rows($conn)>0){
    echo "<script>

			alert('Data Berhasil Dihapus');
			documen.location.href='tampil.php';
			</script>";
} 
else {
	echo "<script>

			alert('Data Gagal Dihapus, Codingnya ada yang salah deh!');
			documen.location.href='tampil.php';
			</script>";
}

?>