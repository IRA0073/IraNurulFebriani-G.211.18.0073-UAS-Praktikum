<php
include 'koneksi.php';
if(isset($_GET['id_member'])){
	$delete = mysqli_query($conn, "DELETE FROM crud WHERE id_member = '".$_GET['id_member']."' ")
	header('location:index.php');
}
?>