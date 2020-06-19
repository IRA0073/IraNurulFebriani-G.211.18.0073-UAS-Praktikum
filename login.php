<?php
	session_start();
	if(isset($_SESSION['nama'])){
		echo "Anda Belum keluar! Silahkan <a href='index.php'>keluar</a> Dulu";
	}else{
?>
<html>
	<head>
		<title>Halaman Login</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
			<div class="box-login">
				<font style="font-size:26px;color:#fff;">Silahkan LOGIN</font>
				<form action="" method="post">
					<input type="text" name="email" placeholder="Masukan E-mail" /><br>
					<input type="password" name="pass" placeholder="Masukan Password" /><br>
					<input type="submit" name="login" value="Login" /><br>
				</form>
				<?php
					include 'koneksi.php';
					if(isset($_POST['login'])){
						$conn = mysqli_connect('localhost','root','','login')or die ('gagal');
						$email = $_POST['email'];
						$pass = $_POST['pass'];
						$cek_data = mysqli_query($conn, "SELECT * FROM login WHERE email = '".$_POST['email']."' AND password = '".$_POST['pass']."'");
						$hasil = mysqli_fetch_array($cek_data);
						$count = mysqli_num_rows($cek_data);
						$nama_user = $hasil['nama'];
						if($count > 0){
							session_start();
							$_SESSION['nama'] = $nama_user;
							header("location:index.php");
						}else{
							echo"Gagal Masuk";
						}
					}
				?>
			</div>
	</body>
</html>
<?php } ?>