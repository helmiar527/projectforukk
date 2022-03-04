<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Peduli Diri Apps</title>
		<link rel="shortcut icon" href="img/logo/logo.png">
		<!-- Boostrap CSS Start-->

		<!-- Untuk Online -->
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

		<!-- Untuk Offline -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<!-- Boostrap CSS End -->
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col">
			    </div>
			    <div class="col">
					<form method="post" action="">
					  	<div class="mb-3">
						  	<br><br>
						  	<h1 class="text-primary">Peduli Diri Apps</h1><hr>
						  	<p>Ujian Kompetensi Kejuruan - Rekayasa Perangkat Lunak<br><b>SMK Ma'arif Batu</b></p>
						  	<hr>
						    <label class="form-label">NIK</label>
						    <input type="text" class="form-control" name="nik">
					  	</div>
					  	<div class="mb-3">
						   	<label class="form-label">Nama Lengkap</label>
						    <input type="text" class="form-control" name="namalengkap">
					  	</div>
						  	<input type="submit" value="Saya Pengguna Baru" name="sayapengguna" class="btn btn-primary">
						  	<input type="submit" value="Masuk" name="masuk" class="btn btn-danger">
					</form>
				</div>
				<div class="col">
				</div>
			</div>
		</div>
		<!-- Boostrap JS Start -->

		<!-- Untuk Online -->
		<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

		<!-- Untuk Offline -->
		<script type="text/javascript" herf="js/bootstrap.bundle.min.js"></script>

		<!-- Boostrap JS End -->
	</body>
</html>

<?php 

	if(isset($_POST['masuk'])){

	include 'koneksi.php';
	$nik = $_POST['nik'];
	$namalengkap = $_POST['namalengkap'];

	$sql = mysqli_query ($koneksi, "select * from pengguna where nik='$nik' and namalengkap='$namalengkap'");
	$cek = mysqli_num_rows($sql);

	if ($cek==0){
		echo '<script language="javascript">';
		echo 'alert("Mohon maaf data tidak tersedia di database, silahkan daftar pengguna baru.")';
		echo '</script>';
	}
	else{
		header("location:home.php");
	}	

	}

	if(isset($_POST['sayapengguna'])){

		include 'koneksi.php';
		$nik = $_POST['nik'];
		$namalengkap = $_POST['namalengkap'];

		mysqli_query($koneksi,"insert into pengguna values('','$nik','$namalengkap')");

		echo '<script language="javascript">';
		echo 'alert("Data berhasil tersimpan. Silahkan masuk dengan pengguna yang telah didaftarkan.")';
		echo '</script>';

	}
?>
