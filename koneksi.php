<?php
	$conn = mysqli_connect('localhost','root','','login');
	if(!$conn){
		echo 'gagal terhubung ke database';
	}
?>