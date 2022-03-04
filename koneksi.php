<?php
	$koneksi = mysqli_connect("localhost", "root", "", "ukk_helmi");

	// cek koneksi ketika gagal
	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}
?>