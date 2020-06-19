<html>
<head>
	<title>Halaman Input Data</title>
</head>
<body>
	<h2>Input Data Peserta</h2>
	<a href="index.php" style="padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;">Data Peserta</a><br><br>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Id_member</td>
				<td>:</td>
				<td><input type="text" name="id_member" placeholder="id_member" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="nama" required></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>:</td>
				<td><input type="text" name="telepon" placeholder="telepon" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" placeholder="email" required></td>
			</tr>
			<tr>
				<td>Event</td>
				<td>:</td>
				<td><input type="text" name="event" placeholder="event" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="simpan" placeholder="simpan" required></td>
			</tr>
		</table>
	</form>	
	<?php
	include 'koneksi.php';
	if(isset($_POST['simpan'])){
	$insert = mysqli_query($conn, "INSERT INTO crud VALUES
						('".$_POST['id_member']."',
						'".$_POST['nama']."',
						'".$_POST['telepon']."',
						'".$_POST['email']."',
						'".$_POST['event']."')");
		if($insert){
			echo 'berhasil disimpan';
		}else{
			echo 'gagal disimpan';
		}
	}
	?>
</body>
</html>