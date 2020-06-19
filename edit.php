<php
include 'koneksi.php';
$data_edit = mysqli_query($conn,"SELECT * FROM crud WHERE id_member '".$_GET['id_member']."'");
$result = mysqli_fetch_array($data_edit);
?>
<html>
<head>
	<title>Halaman Edit Data</title>
</head>
<body>
	<h2>Input Data Peserta</h2>
	<a href="index.php" style="padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;">Data Peserta</a><br><br>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Id_member</td>
				<td>:</td>
				<td><input type="text" name="id_member" value="<?php echo $result['id_member'] ?>" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $result['nama'] ?>" required></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>:</td>
				<td><input type="text" name="telepon" value="<?php echo $result['telepon'] ?>" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" value="<?php echo $result['email'] ?>" required></td>
			</tr>
			<tr>
				<td>Event</td>
				<td>:</td>
				<td><input type="text" name="event" value="<?php echo $result['event'] ?>" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="edit" value="simpan"></td>
			</tr>
		</table>
	</form>	
	<?php
	include 'koneksi.php';
	if(isset($_POST['edit'])){
	
	}
	?>
</body>
</html>