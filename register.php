<?php
	require 'koneksi.php';

	$conn = mysqli_connect('localhost','root','','login');
    if (isset($_POST['regis'])){
        $nama= $_POST['nama'];
        $username= $_POST['username'];
        $password= $_POST['password'];
        $email= $_POST['email'];
        $noTelpon=$_POST['noTelpon'];

        $q="INSERT INTO tb_loginn VALUES('','$nama','$username','$password','$email','$noTelpon','Admin') ";
        mysqli_query($conn,$q);

        if(mysqli_affected_rows($conn)>0){
            echo "<script>
            
                alert('Data Berhasil Disimpan');
                document.location.href='index.php';
                </script>" ;
			}
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Pisang Laundry</title>
    <link rel="stylesheet" href="style-register.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="" method="post">
                <h1>Create New Account</h1>
                <h2>Admin</h2><br>
                    <article>
                        <div class="name">
                            <p>Nama Lengkap : </p>
				            <input type="text" name="nama" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="username">
                            <p>Username : </p>
				            <input type="text" name="username" placeholder="Masukkan Username">
                        </div>
                        <div class="password">
                            <p>Password : </p>
				            <input type="password" name="password" placeholder="Masukkan Password">
                        </div>
                        <span class="eye">
                            <i id="eye1" class="fa-solid fa-eye"></i>
                        </span>
                        <div class="email">
                            <p>Email : </p>
				            <input type="text" name="email" placeholder="Masukkan Email">
                        </div>
                        <div class="noTelepon">
                            <p>No Telepon : </p>
				            <input type="text" name="noTelpon" placeholder="Masukkan Nomor">
                        </div>
                        <div class="tombol">
                            <input type="submit" name="regis" value="Create">
                            <input type="reset" name="reset" value="Reset">
                            <a href="index.php">Back</a>
                        </div>   
                    </article>          
            </form>
        </div>
    </div>
</body>
</html>