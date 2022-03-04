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
					<a href="catatan.php" type="button" class="btn btn-primary">Catatan Perjalanan</a>
					<a href="isi.php" type="button" class="btn btn-dark">Isi Data</a>
					<a href="index.php" type="button" class="btn btn-danger">Keluar</a>
				</div>
			</div>
		</div>
		<div class="row">
		    <div class="col-2">
			</div>
		    <div class="col-9">
				<div class="card bg-light">
				  	<div class="card-body">
					  	<div class="row">
						  	<div class="col-3">
						   		<label>Urutkan Berdasarkan : </label>
							</div>
							<div class="col-6">
								<input class="form-control" type="date" name="tanggal"required/>      
							</div>
							<div class="col-3">
								<button type="button" class="btn btn-success">Urutkan</button>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="card bg-light">
					<div class="card-body">
					<table id="datatablesSimple" class="table table-striped">
					    <thead>
					    <tr>
						    <th scope="col">No</th>
						 	<th scope="col">Tanggal</th>
						 	<th scope="col">Jam</th>
						 	<th scope="col">Lokasi</th>
						 	<th scope="col">Suhu Tubuh</th>
						 	<th scope="col">nik</th>
						</tr>
						</thead>
						<tbody>
						  	<?php 
							include 'koneksi.php';
							$no = 1;
							$data = mysqli_query($koneksi,"select * from perjalanan");
							while($d = mysqli_fetch_array($data)){
							?>
						   	<tr>
							  	<td><?php echo $no++; ?></td>
							  	<td><?php echo $d['tanggal']; ?></td>
							  	<td><?php echo $d['jam']; ?></td>
							  	<td><?php echo $d['lokasi']; ?></td>
							  	<td><?php echo $d['suhu']; ?></td>
							  	<td><?php echo $d['nik']; ?></td>
							</tr>
							<?php 
							}
							?>
						</tbody>
				    </table>
					</div>
				</div>
				<br>
				<button type="button" class="btn btn-dark">Isi Catatan Perjalanan</button>
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