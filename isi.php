<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Peduli Diri Apps</title>
		<link rel="shortcut icon" href="img/logo/logo.png">
		<!-- Boostrap CSS Start-->

		<!-- Online -->
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

		<!-- Offline -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<!-- Boostrap CSS End -->
	</head>
	<body>
	<div class="container">
		<br><br><br>
	  	<div class="row">
		    <div class="col-2">
			    <!-- Images Start-->

				<!-- Online -->
			    <!-- <img src="https://cdn-icons-png.flaticon.com/512/725/725105.png" class="img-thumbnail text-right rounded float-right" width="80%"> -->
			    <!-- Offline -->
			    <img src="img/dashboard/smile.png" class="img-thumbnail text-right rounded float-right" width="80%">

			    <!-- Images End -->
		    </div>
		    <div class="col-9">
			    <h1>Peduli Diri Apps</h1>
				<h6>Catatan Perjalanan</h6>
				<hr>
				<a href="home.php" type="button" class="btn btn-dark">Home</a>
				<a href="catatan.php" type="button" class="btn btn-dark">Catatan Perjalanan</a>
				<a href="isi.php" type="button" class="btn btn-primary">Isi Data</a>
				<a href="index.php" type="button" class="btn btn-danger">Keluar</a>
		    </div>
		</div>
		<div class="row">
		    <div class="col-2">
			</div>
		    <div class="col-9">
				<div class="card bg-light">
				  	<div class="card-body">
					 	<form method="post" action="">
						  	<div class="mb-3">
							    <label class="form-label">Tanggal</label>
							    <input type="date" class="form-control" name="tanggal">
							</div>
							<div class="mb-3">
							    <label class="form-label">Jam</label>
							    <input type="text" class="form-control" name="jam">
						  	</div>
						    <div class="mb-3">
							    <label class="form-label">Lokasi Yang Dikunjungi</label>
							    <input type="text" class="form-control" name="lokasi">
						  	</div>
						    <div class="mb-3">
							    <label class="form-label">Suhu Tubuh</label>
							    <input type="text" class="form-control" name="suhu">
						  	</div>
						  	<input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- Boostrap JS Start -->

		<!-- Online -->
		<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

		<!-- Offline -->
		<script type="text/javascript" herf="js/bootstrap.bundle.min.js"></script>

		<!-- Boostrap JS End -->
	</body>
</html>

<?php 

	if(isset($_POST['simpan'])){
		include 'koneksi.php';

		$tanggal = $_POST['tanggal'];
		$jam = $_POST['jam'];
		$lokasi = $_POST['lokasi'];
		$suhu = $_POST['suhu'];

		mysqli_query($koneksi,"insert into perjalanan values('','$tanggal','$jam','$lokasi','$suhu','' )");

		echo '<script language="javascript">';
		echo 'alert("Data Berhasil Disimpan")';
		echo '</script>';
	}
?>
