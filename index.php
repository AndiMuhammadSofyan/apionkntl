<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<h1>Data Mahasiswa</h1>
	<table width="50%" border="1">
		<tr>
			<th>NOMOR</th>
			<th>NIM</th>
			<th>NAMA</th>
			
		</tr>
		<?php 
		include 'koneksi.php';
			$sql = mysqli_query($conn, "SELECT * FROM koke order By Usia DESC");
			$nomor=1;
			while ($data = mysqli_fetch_array($sql)){
				echo 
					"<tr>
					<td>$nomor</td>
					<td>$data[NIM]</td>
					<td>$data[NAMA]</td>
				</tr>";
				$nomor++;

			}
		 ?>
	</table>
	 	<a href="tambahdata.php"> Tambah Data Mahasiswa </a>
</body>
</html>