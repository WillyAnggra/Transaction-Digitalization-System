<?php 

	//unutk penghubung dengan file koneksi
	include 'koneksi.php';

	if(isset($_POST['input'])){
		$username = $_POST['username'];
		$password = $_POST['password'];



		//ambil data dari database tabel login dengan username dan passsowrd
		$data = mysqli_query($koneksi,"SELECT * FROM tb_loginn WHERE username='$username' AND password='$password'");
		$userData = mysqli_query($koneksi,"SELECT * FROM login_user WHERE username='$username' AND password='$password'");
		if(mysqli_num_rows($data)){
			// $_SESSION["login"] = true;
			echo "Login berhasil";
			header("Location:menu-admin.php");
		} else if(mysqli_num_rows($userData)){
			echo "Login berhasil";
			header("Location:menu.php");
		} else{
			echo "<script>
			alert('Kamu pasti hengker? hehehe');
			document.location.href='index.php';
			</script>";
		}

	}
 ?>