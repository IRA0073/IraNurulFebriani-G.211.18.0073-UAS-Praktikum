<?php
	include 'koneksi.php';{
?>
<html>
	<head>
		<title>Halaman Beranda</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<header>
			<ul>
				<a href="index.php"><li>Beranda</li></a>
				<a href="profil.php"><li>Profil</li></a>
				<a href="keluar.php"><li>Keluar</li></a>
			</ul>
		</header>
		
		<section>
			<center>
			<font style="font-size:40px;">Hallo Selamat Datang di HIREMAXI</font>
			</center>
			<h2>Data Peserta</h2><br>
			<a href="tambah.php" style="padding:0.6% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;">Tambah Data</a><br><br>
			<table border="1" cellspacing="0" width="60%">
				<tr style="text-align:center;font-weight:bold;background-color:#eee;">
					<td>No</td>
					<td>id_member</td>
					<td>Nama</td>
					<td>Telepon</td>
					<td>Email</td>
					<td>Events</td>
					<td>Opsi</td>
				</tr>
				<?php
						$no = 1;
						$cek_data = mysqli_query($conn, "SELECT * FROM crud");
						if(mysqli_num_rows($cek_data) > 0){
						while($crud = mysqli_fetch_array($cek_data)){
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $crud['id_member'] ?></td>
					<td><?php echo $crud['nama'] ?></td>
					<td><?php echo $crud['telepon'] ?></td>
					<td><?php echo $crud['email'] ?></td>
					<td><?php echo $crud['event'] ?></td>
					<td>
						<a href="edit.php">Edit</a> ||
						<a href="Hapus.php?id_member=<?php echo $crud['id_member'] ?>">Hapus</a>
					</td>
				</tr>
				<?php }}else{ ?>
				<tr>
					<td colspan="7">Data Kosong</td>
				</tr>
				<?php } ?>
			</table>
		</section>
		
		<footer>
			Copyright &copy; 2020 IraNurul. All Rights Reserved.
		</footer>
	</body>
</html>
<?php } ?>