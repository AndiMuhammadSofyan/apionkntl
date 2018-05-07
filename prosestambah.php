<?php 
	include 'koke';
	$nim = $_POST['id'];
	$nama = $_POST['n'];
	$jurusan = $_POST['kls'];
	$usia = $_POST ['jurusan'];

	$sql = mysqli_query ($conn, "INSERT INTO koke SET id='$nim', n='$nama', kls='$jurusan', jurusan='$fakultas'");

	if ($sql) {
		echo "Berhasil Tambah Data";
			}
			else{
				echo "Tambah Data";
			}
 ?>