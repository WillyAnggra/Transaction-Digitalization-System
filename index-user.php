<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" href="style-login-new.css">
</head>
<body>
	<main class="main">
		<article class="partOne">
			<div class="container">
				<section class="form">
					<form action="login.php" method="post" name="form_input">
						<h1>Login User</h1>
						<div class="username">
							<p>Username :</p> 
							<input type="text" name="username" placeholder="Masukan Username" required="">
						</div>
						<div class="password">
							<p>Password :</p>  
							<input type="password" name="password" placeholder="Masukan Password" required="">
						</div>

						<div class="tombol">
							<input type="submit" name="input" value="LOGIN">
							<input type="reset" name="input" value="RESET">
						</div>
						<div class="register">
							<a href="register-user.php">Are you a customer?</a><br>
							<a href="register.php">Create new account?</a>
						</div>
					</form>
					
				</section>
			</div>
		</article>
		<article class="partTwo">
			<div class="container">
				<section class="">

				</section>
			</div>
		</article>
	</main>
	

</body>
</html>
